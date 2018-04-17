<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VgeocodingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

             'id'      => $this->id,
             'name'    => $this->NAME.' '.$this->MIDDLE_NAME.' '.$this->LAST_NAME,
             'address' => $this->NUMBER.' '.$this->STREET,
             'city'    => $this->CITY,
             'zip'     => $this->ZIP,
             'lat'     => $this->Latitude,
             'lng'     => $this->Longitude,
             'position' => array ('lat'  => $this->Latitude, 'lng' => $this->Longitude),
             'voter'   => $this->voter
        ];
    }
}
