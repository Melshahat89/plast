<?php
 namespace App\Application\Requests\Website\Products;
  class ApiAddRequestProducts
{
    public function rules()
    {
        return [
        	"categories_id" => "required|integer",
            "name" => "description",
   "seokeywords.*" => "",
            ];
    }
}
