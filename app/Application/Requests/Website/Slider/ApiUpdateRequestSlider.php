<?php

namespace App\Application\Requests\Website\Slider;

use Illuminate\Support\Facades\Route;

class ApiUpdateRequestSlider
{
    public function rules()
    {
        $id = Route::input('id');
        return [
            "image" => "",
			"title" => "",
			
        ];
    }
}
