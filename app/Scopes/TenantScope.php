<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use App\Tenant\TenantManager;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        // TODO: Implement apply() method.
        $tenantManager = app(TenantManager::class);
        if($tenantManager->getTenant())
        {
            $accountId = $tenantManager->getTenant()->id;
            $builder->where('account_id',$accountId);
        }

    }
}