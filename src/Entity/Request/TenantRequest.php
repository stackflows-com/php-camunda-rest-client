<?php

namespace Camunda\Entity\Request;

class TenantRequest extends BasicRequest
{
    protected $fields = [
        'id',
        'name',
        'userId',
        'groupId',
        'nameLike',
        'userMember',
        'groupMember',
        'includingGroupsOfUser',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
    ];
}
