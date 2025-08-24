<?php

namespace App\Application\Transformers;

use Illuminate\Database\Eloquent\Model;

class SliderTransformers extends AbstractTransformer
{

    public function transformModel(Model $modelOrCollection)
    {
        return [
            "id" => $modelOrCollection->id,
			"image" => $modelOrCollection->image,
			"title" => $modelOrCollection->title,

        ];
    }

    public function transformModelAr(Model $modelOrCollection)
    {
        return [
           "id" => $modelOrCollection->id,
			"image" => $modelOrCollection->image,
			"title" => $modelOrCollection->title,

        ];
    }

}