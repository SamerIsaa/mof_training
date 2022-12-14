<?php

namespace App\Http\Requests\Panel;

use App\Constants\StatusCodes;
use App\Http\Requests\User\UserConsumerRequest;
use App\Http\Requests\User\UserFactoryRequest;
use App\Http\Requests\User\UserForeignRequest;
use App\Http\Requests\User\UserGovernmentRequest;
use App\Http\Requests\User\UserInterpriceRequest;
use App\Http\Requests\User\UserMediaRequest;
use App\Http\Requests\User\UserStudentRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $id;
    protected $formRequests;

    public function authorize()
    {
        $this->id = $this->route('id');
        return true;
//        return auth('admin')->user()->can('add_users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ssn_id' => 'required|numeric|unique:users,ssn_id,' . $this->id,
            'name' => 'required|string|max:255',
            'email' => 'required|email' ,
//            'mobile' => 'required|numeric' ,
            'password' => 'required_unless:_method,PUT|nullable|min:8',
        ];

    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'    => StatusCodes::VALIDATION_ERROR,
            'msg' => $validator->errors()->first()
        ], StatusCodes::VALIDATION_ERROR));
    }

    protected function failedAuthorization()
    {
        throw new HttpResponseException(response()->json([
            'status'    => StatusCodes::UNAUTHORIZED,
            'msg' => 'ليس لديك صلاحية'
        ], StatusCodes::UNAUTHORIZED));
    }
}
