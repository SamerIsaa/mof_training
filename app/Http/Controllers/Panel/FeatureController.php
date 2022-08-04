<?php

namespace App\Http\Controllers\Panel;

use App\Constants\StatusCodes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\FeatureRequest;
use App\Http\Resources\Panel\FeatureResource;
use App\Model\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        return view('panel.features.index');
    }

    public function datatable()
    {
        $items = Feature::query();
        $resource = new FeatureResource($items);
        return filterDataTable($items, $resource, \request());
    }

    public function create()
    {
        return view('panel.features.create');
    }

    public function store(FeatureRequest $request)
    {

        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = uploadImage($request, 'image');
            $data['image'] = $image->file_name;
        }

        Feature::query()->create($data)->createTranslation($request);
        return $this->response_api(true, __('messages.done_successfully'), StatusCodes::OK);
    }
}
