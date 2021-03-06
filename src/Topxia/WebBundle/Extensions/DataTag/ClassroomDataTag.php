<?php

namespace Topxia\WebBundle\Extensions\DataTag;

use Topxia\WebBundle\Extensions\DataTag\DataTag;

class ClassroomDataTag extends CourseBaseDataTag implements DataTag
{
    /**
     * 获取科室
     *
     * 可传入的参数：
     *   classroomId    必需 科室Id
     *
     * @param  array $arguments 参数
     * @return array 科室
     */
    public function getData(array $arguments)
    {
        if (empty($arguments['classroomId'])) {
            throw new \InvalidArgumentException("classroomId参数缺失");
        } else {
            $classroom = $this->getClassroomService()->getClassroom($arguments['classroomId']);
        }

        return $classroom;
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }
}
