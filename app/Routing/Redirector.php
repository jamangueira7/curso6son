<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 15/04/2018
 * Time: 21:59
 */

namespace App\Routing;

use Illuminate\Routing\Redirector as RedirectorLaravel;
use App\Tenant\TenantManager;


class Redirector extends RedirectorLaravel
{
    public function routeTenant($name, $params =[], $status = 302, $headers = [])
    {
        $tenantManager = app(TenantManager::class);
        $tenantParam = $tenantManager->routeParam();
        return $this->route($name,
            $params+[config('tenant.route_param') => tenantParam] ,
            $status,
            $headers);
    }
}