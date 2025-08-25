<?php
 namespace App\Application\Requests\Website\Products;
 use Illuminate\Support\Facades\Route;
 class ApiUpdateRequestProducts
{
    public function rules()
    {
        $id = Route::input('id');
        return [
        	"categories_id" => "required|integer",
            "name" => "description",
   "seokeywords.*" => "",
            ];
    }
}
