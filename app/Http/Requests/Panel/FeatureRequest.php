<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        dd($this->request->all());
        $rules = [
            'image' => 'required_unless:_method,PUT|image',
        ];

        foreach (locales() as $key => $trans) {
            $rules['name_' . $key] = 'required|string|max:255';
            $rules['content_' . $key] = 'required|string|max:255';
        }

        return $rules;
    }
}
