<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    private $role_type_name;
    
    // public function __construct($resource,$role_type_name){
    //     parent::__construct($resource);
    //     $this->resource = $resource;

    //     $this->role_type_name = $role_type_name;
    // }
    
    public function toArray($request)
    {
        // $data =  parent::toArray($request);
        // array_push($data,['role_type_name' => $this->role_type_name]);
        // return $data;
        return parent::toArray($request);
        // return [
        //     'id'    => $this->id,
        //     'fname' => $this->fname,
        //     'lname' => $this->lname,
        //     'dob'   => $this->dob,
        //     'mobile_no'=> $this->mobile_no,
        //     'address'=> $this->address,
        //     'city'=> $this->city,
        //     'zipcode'=> $this->zipcode,
        //     'state'=> $this->state,
        //     'email'=> $this->email,
        //     'created_at'=> $this->created_at,
        //     'updated_at'=> $this->updated_at,
        //     'role_type_name' => $this->role_type_name
            
        // ];
    }

}
