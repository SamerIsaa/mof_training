<?php

namespace App\Model;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Feature extends Model
{
    use SoftDeletes, Translatable;

    public $translatedAttributes = ['name', 'content'];
    public $translationModel = FeatureTranslation::class;

    protected $fillable = [
        'image', 'is_active',
    ];

    public function createTranslation(Request $request)
    {
        foreach (locales() as $key => $language) {
            foreach ($this->translatedAttributes as $attribute) {
                if ($request->get($attribute . '_' . $key) != null && !empty($request->$attribute . $key)) {
                    $this->{$attribute . ':' . $key} = $request->get($attribute . '_' . $key);
                }
            }
            $this->save();
        }
        return $this;
    }

    public function scopeActive($q)
    {
        return $q->where('is_active' , 1);
    }

}
