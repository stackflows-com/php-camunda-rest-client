<?php

namespace Camunda\Service;

use Camunda\Entity\Request\TenantRequest;

class TenantService extends BasicService
{
    public function getList(TenantRequest $tenantRequest = null)
    {
        $this->setRequestUrl('/tenant')
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->setRequestObject($tenantRequest)
            ->run();

        return $this->getResponseContents();
    }

    public function getById($tenantId)
    {
        $this->setRequestUrl('/tenant/' . $tenantId)
            ->setRequestMethod('GET')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseContents();
    }

    public function create(TenantRequest $tenantRequest = null)
    {
        $this->setRequestUrl('/tenant/create')
            ->setRequestMethod('POST')
            ->setRequestContentType('JSON')
            ->setRequestObject($tenantRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function update($tenantId, TenantRequest $tenantRequest = null)
    {
        $this->setRequestUrl('/tenant/' . $tenantId)
            ->setRequestMethod('PUT')
            ->setRequestContentType('JSON')
            ->setRequestObject($tenantRequest)
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }

    public function delete($tenantId)
    {
        $this->setRequestUrl('/tenant/' . $tenantId)
            ->setRequestMethod('DELETE')
            ->setRequestContentType('QUERY')
            ->run();

        return $this->getResponseCode() == 204 ? true : false;
    }
}
