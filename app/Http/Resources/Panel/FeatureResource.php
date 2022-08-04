<?php

namespace App\Http\Resources\Panel;

use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $active = view('panel.features.partials.active_status' , ['instance' => $this])->render();
        $options = view('panel.features.partials.options' , ['instance' => $this])->render();
         return [
            'id' => $this->id,
            'image' => '<img src="'.image_url($this->image , '50x50').'">',
            'name' => $this->name,
            'content' => $this->content,
            'active_status' => $active,
            'options' => $options,
        ];
    }
}
