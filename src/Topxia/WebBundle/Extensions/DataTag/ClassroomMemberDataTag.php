<?php

namespace Topxia\WebBundle\Extensions\DataTag;

use Topxia\WebBundle\Extensions\DataTag\DataTag;

class ClassroomMemberDataTag extends BaseDataTag implements DataTag
{
    /**
     * 获取科室中某个学员的信息
     *
     * 该DataTag返回了指定的科室中某学员的信息
     *
     * @param  array $arguments 参数
     *               classroomId:         科室id
     *               userId:              用户id
     *
     * @return array 用户信息
     */
    public function getData(array $arguments)
    {
        return $this->getClassroomService()->getClassroomMember(
            $arguments['classroomId'], $arguments['userId']
        );
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }
}
