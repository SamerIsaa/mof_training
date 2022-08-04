<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FeatureTranslation extends Model
{
    protected $fillable = ['name', 'content'];
    public $timestamps = false;
}
