<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImplementorOrganization extends Model
{
    protected $fillable = [
        'ministry', 'sub_ministry','sector','sub_sector','division','subdivision'
    ];

    public static function latest()
    {
    }
}
