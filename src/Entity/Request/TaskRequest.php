<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/23
 * Time: 17:51
 */

namespace Camunda\Entity\Request;

class TaskRequest extends BasicRequest
{
    protected $fields = [
        'processInstanceId',
        'processInstanceBusinessKey',
        'processInstanceBusinessKeyIn',
        'processInstanceBusinessKeyLike',
        'processDefinitionId',
        'processDefinitionKey',
        'processDefinitionKeyIn',
        'processDefinitionName',
        'processDefinitionNameLike',
        'executionId',
        'caseInstanceId',
        'caseInstanceBusinessKey',
        'caseInstanceBusinessKeyLike',
        'caseDefinitionId',
        'caseDefinitionKey',
        'caseDefinitionName',
        'caseDefinitionNameLike',
        'caseExecutionId',
        'activityInstanceIdIn',
        'tenantIdIn',
        'withoutTenantId',
        'assignee',
        'assigneeExpression',
        'assigneeLike',
        'assigneeLikeExpression',
        'owner',
        'ownerExpression',
        'candidateGroup',
        'candidateGroupExpression',
        'candidateUser',
        'candidateUserExpression',
        'includeAssignedTasks',
        'involvedUser',
        'involvedUserExpression',
        'assigned',
        'unassigned',
        'taskDefinitionKey',
        'taskDefinitionKeyIn',
        'taskDefinitionKeyLike',
        'name',
        'nameNotEqual',
        'nameLike',
        'nameNotLike',
        'description',
        'descriptionLike',
        'priority',
        'maxPriority',
        'dueDate',
        'dueDateExpression',
        'dueAfter',
        'dueAfterExpression',
        'dueBefore',
        'dueBeforeExpression',
        'followUpDate',
        'followUpDateExpression',
        'followUpAfter',
        'followUpAfterExpression',
        'followUpBefore',
        'followUpBeforeExpression',
        'followUpBeforeOrNotExistent',
        'followUpBeforeOrNotExistentExpression',
        'createdOn',
        'createdOnExpression',
        'createdAfter',
        'createdAfterExpression',
        'createdBefore',
        'createdBeforeExpression',
        'delegationState',
        'candidateGroups',
        'candidateGroupsExpression',
        'withCandidateGroups',
        'withoutCandidateGroups',
        'withCandidateUsers',
        'withoutCandidateUsers',
        'active',
        'suspended',
        'taskVariables',
        'processVariables',
        'caseInstanceVariables',
        'parentTaskId',
        'sortBy',
        'sortOrder',
        'firstResult',
        'maxResults',
        'userId',
        'groupId',
        'type',
        'variables',
        'message',
        'escalationCode',
    ];
}
