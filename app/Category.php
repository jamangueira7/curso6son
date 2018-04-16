<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Scopes\TenantModels;

class Category extends Model
{
    use TenantModels;
    protected $fillable = ['name','account_id'];

}
