<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RunnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'runner_name'=>$this->name,
            'age'=>'age',
            'sex'=>'sex',
            'color'=>'color',
            'last_runs'=>new LastRunnerCollection($this->tbm_form_last_runners),
        ];
    }
}
