<?php
namespace Topxia\Service\Course\Impl;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Course\MaterialService;
use Topxia\Common\ArrayToolkit;

class MaterialServiceImpl extends BaseService implements MaterialService
{

	public function uploadMaterial($material)
	{
		$argument = $material;
		if (!ArrayToolkit::requireds($material, array('courseId', 'fileId'))) {
			throw $this->createServiceException('参数缺失，上传失败！');
		}

        $fields = $this->_getMaterialFields($material);

        if (!empty($fields['fileId'])) {
        	$courseMaterials = $this->searchMaterials(
                array(
                    'courseId' => $fields['courseId'], 
                    'fileId'   => $fields['fileId'],
                    'lessonId' => 0,
                ), 
                array('createdTime','DESC'), 0, PHP_INT_MAX
            );
            if ($courseMaterials) {
            	$updateFields = array(
            		'lessonId'    => $fields['lessonId'],
            		'source'      => $fields['source'],
            		'description' => $fields['description']
            	);
                $material = $this->updateMaterial($courseMaterials[0]['id'], $updateFields, $argument);
            } else {
	        	$material = $this->addMaterial($fields, $argument);
	        }
        } elseif (!empty($fields['link'])) {
        	$material = $this->addMaterial($fields, $argument);
        }

		return $material;
	}

	public function addMaterial($fields, $argument)
	{
		$material =  $this->getMaterialDao()->addMaterial($fields);

		//$this->dispatchEvent("course.material.create",array('argument'=>$argument,'material'=>$material));

		return $material;
	}

	public function updateMaterial($id, $fields, $argument)
	{
		$material = $this->getMaterialDao()->updateMaterial($id, $fields);

		//$this->dispatchEvent("course.material.update",array('argument'=>$argument,'material'=>$material));

		return $material;
	}

	public function deleteMaterial($courseId, $materialId)
	{
		$material = $this->getMaterialDao()->getMaterial($materialId);
		if (empty($material) || $material['courseId'] != $courseId) {
			throw $this->createNotFoundException('课程资料不存在，删除失败。');
		}

		$this->getMaterialDao()->deleteMaterial($materialId);

		//$this->dispatchEvent("course.material.delete",$material);
	}


	public function findMaterialsByCopyIdAndLockedCourseIds($copyId, $courseIds)
	{
		return $this->getMaterialDao()->findMaterialsByCopyIdAndLockedCourseIds($copyId, $courseIds);
	}

	public function deleteMaterialByMaterialId($materialId)
	{
		return $this->getMaterialDao()->deleteMaterial($materialId);
	}

	public function deleteMaterialsByLessonId($lessonId)
	{
		return $this->getMaterialDao()->deleteMaterialsByLessonId($lessonId);
	}

	public function deleteMaterialsByCourseId($courseId)
	{
		return $this->getMaterialDao()->deleteMaterialsByCourseId($courseId);
	}

	public function deleteMaterials($courseId, $fileIds)
	{
		$materials = $this->searchMaterials(
			array('courseId' => $courseId, 'fileIds' => $fileIds),
			array('createdTime','DESC'), 0, PHP_INT_MAX
		);

		if (!$materials) {
			return false;
		}

		foreach ($materials as $key => $material) {
			$this->deleteMaterial($courseId, $material['id']);
		}

		return true;
	}

	public function deleteMaterialsByFileId($fileId)
	{
		return $this->getMaterialDao()->deleteMaterialsByFileId($fileId);
	}

	public function getMaterial($courseId, $materialId)
	{
		$material = $this->getMaterialDao()->getMaterial($materialId);
		if (empty($material) || $material['courseId'] != $courseId) {
			return null;
		}
		return $material;
	}

	public function findCourseMaterials($courseId, $start, $limit)
	{
		return $this->getMaterialDao()->findMaterialsByCourseId($courseId, $start, $limit);
	}

	public function getMaterialCountByFileId($fileId)
	{
		return $this->getMaterialDao()->getMaterialCountByFileId($fileId);
	}

    public function findLessonMaterials($lessonId, $start, $limit)
    {
        return $this->getMaterialDao()->findMaterialsByLessonId($lessonId, $start, $limit);
    }

	public function getMaterialCount($courseId)
	{
		return $this->getMaterialDao()->getMaterialCountByCourseId($courseId);
	}

	public function findMaterialsGroupByFileId($courseId, $start, $limit)
    {
        return $this->getMaterialDao()->findMaterialsGroupByFileId($courseId, $start, $limit);
    }

    public function findMaterialCountGroupByFileId($courseId)
    {
        return $this->getMaterialDao()->findMaterialCountGroupByFileId($courseId);
    }

	public function searchMaterials($conditions, $orderBy, $start, $limit)
	{
		return $this->getMaterialDao()->searchMaterials($conditions, $orderBy, $start, $limit);
	}

    public function searchMaterialCount($conditions)
    {
    	return $this->getMaterialDao()->searchMaterialCount($conditions);
    }

    public function findUsedCourseMaterials($courseId, $fileIds)
    {
    	$materials = $this->searchMaterials(
            array(
            	'courseId'      => $courseId, 
            	'fileIds'       => $fileIds,
            	'excludeLessonId' => 0
            ),
            array('createdTime','DESC'), 0, PHP_INT_MAX 
        );
        $materials = ArrayToolkit::group($materials, 'fileId');
        $files     = array();

        if ($materials) {
        	foreach ($materials as $fileId => $material) {
	        	$files[$fileId] = ArrayToolkit::column($material, 'source');
	        }
        }

        return $files;
    }

    private function _getMaterialFields($material)
    {
    	$fields = array(
            'courseId' => $material['courseId'],
            'lessonId' => empty($material['lessonId']) ? 0 : $material['lessonId'],
            'description'  => empty($material['description']) ? '' : $material['description'],
            'userId' => $this->getCurrentUser()->id,
            'source' => isset($material['source']) ? $material['source'] : 'coursematerial',
            'createdTime' => time(),
        );

        if (empty($material['fileId'])) {
            if (empty($material['link'])) {
                throw $this->createServiceException('资料链接地址不能为空，添加资料失败！');
            }
            $fields['fileId'] = 0;
            $fields['link'] = $material['link'];
            $fields['title'] = empty($material['description']) ? $material['link'] : $material['description'];
        } else {
            $fields['fileId'] = (int) $material['fileId'];
    		$file = $this->getUploadFileService()->getFile($material['fileId']);
    		if (empty($file)) {
    			throw $this->createServiceException('文件不存在，上传资料失败！');
    		}
            $fields['link'] = '';
            $fields['title'] = $file['filename'];
            $fields['fileSize'] = $file['fileSize'];
        }

        if(array_key_exists('copyId', $material)){
        	$fields['copyId'] = $material['copyId'];
        }

        return $fields;
    }

    protected function getMaterialDao()
    {
    	return $this->createDao('Course.CourseMaterialDao');
    }

    protected function getCourseService()
    {
    	return $this->createService('Course.CourseService');
    }

    protected function getFileService()
    {
    	return $this->createService('Content.FileService');
    }

    protected function getUploadFileService()
    {
        return $this->createService('File.UploadFileService');
    }

}
