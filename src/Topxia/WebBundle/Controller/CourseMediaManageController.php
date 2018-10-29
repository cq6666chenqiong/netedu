<?php
namespace Topxia\WebBundle\Controller;

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Topxia\Component\MediaParser\ParserProxy;

class CourseMediaManageController extends BaseController
{
    public function libraryAction(Request $request, $id)
    {
        $type = $request->query->get('type');

        if (!in_array($type, array('video', 'audio'))) {
            throw $this->createNotFoundException('参数不正确！');
        }

        $file      = $this->setting('file');
        $directory = dirname($this->container->getParameter('kernel.root_dir')).'/'.$file['private_directory'];
        $directory .= '/course/'.$id;

        if (!is_dir($directory)) {
            return $this->createJsonResponse(array());
        }

        $config = $this->getMediaConfig($type);

        $finder = new Finder();
        $finder->files()->in($directory)->name($config['file_pattern']);

        $files = array();

        foreach ($finder as $file) {
            $name    = $file->getRelativePathname();
            $files[] = array(
                'type'   => $type,
                'source' => 'self',
                'name'   => $name,
                'files'  => array(
                    array('type' => 'mp4', 'url' => "private://course/{$id}/{$name}")
                )
            );
        }

        response:
        return $this->createJsonResponse($files);
    }

    public function importAction(Request $request, $id)
    {
        $url = $request->query->get('url');
/*
        $proxy = new ParserProxy();
        $item  = $proxy->parseItem($url);
       */
       // error_log(json_encode($item));
//{"type":"video","source":"youku","uuid":"youku:XMTM5Njg5NTkzNg==","page":"http:\/\/v.youku.com\/v_show\/id_XMTM5Njg5NTkzNg==.html","pictures":[],"files":[{"url":"http:\/\/player.youku.com\/player.php\/sid\/XMTM5Njg5NTkzNg==\/v.swf","type":"swf"}]}
       error_log("zz");
        $item = array();
        $item["type"] = "video";
        $item["source"] = "youku";
        $item["uuid"] = "youku:XMTM5Njg5NTkzNg==";
        $item["page"] = "ks";
        $item["pictures"] = "[]";
        $files = array();
        $files["url"] = $url;
        $files["type"] = "swf";
        $item["files"][0] = $files;
        error_log(json_encode($item));

        return $this->createJsonResponse($item);
    }

    protected function getMediaConfig($type)
    {
        $config = array(
            'video' => array(
                'file_pattern' => "*.mp4"
            ),
            'audio' => array(
                'file_pattern' => "*.mp3"
            )
        );
        return $config[$type];
    }
}
