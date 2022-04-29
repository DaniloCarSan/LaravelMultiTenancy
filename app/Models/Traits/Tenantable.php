<?php

namespace App\Models\Traits;

use App\Models\Tenant;
use App\Scopes\TenantScope;


trait Tenantable 
{
    protected static function bootTenantable()
    {
        if(checkTenantId())
        {
            static::addGlobalScope(new TenantScope);

            static::creating(function($model){
                $model->tenant_id = session('tenant_id');
            });
            
        }
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}