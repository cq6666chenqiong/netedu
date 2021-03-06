<?php

namespace Topxia\Api\Resource;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\ArrayToolkit;

class Threads extends BaseResource
{
    public function get(Application $app, Request $request)
    {
        $conditions = ArrayToolkit::parts($request->query->all(), array());

        $sort = $request->query->get('sort', 'created');
        $start = $request->query->get('start', 0);
        $limit = $request->query->get('limit', 10);

        $total = $this->getThreadService()->searchThreadCount($conditions);
        $start = $start == -1 ? rand(0, $total - 1) : $start;  
        $threads = $this->getThreadService()->searchThreads($conditions, $sort, $start, $limit);
        return $this->wrap($this->filter($threads), $total);
    }

    public function filter(&$res)
    {
        return $this->multicallFilter('Thread', $res);
    }

    protected function multicallFilter($name, &$res)
    {
        foreach ($res as &$one) {
            $this->callFilter($name, $one);
            $one['body'] = '';
        }
        return $res;
    }

    protected function getThreadService()
    {
        return $this->getServiceKernel()->createService('Thread.ThreadService');
    }
}
