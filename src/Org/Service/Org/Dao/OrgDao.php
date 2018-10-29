<?php

namespace Org\Service\Org\Dao;

interface OrgDao
{
    public function getOrgByCode($value);

    public function createOrg($org);

    public function updateOrg($id, $fields);

    public function delete($id);

    public function deleteOrgsByOrgCode($orgCode);

    public function findOrgsStartByOrgCode($orgCode);
}
