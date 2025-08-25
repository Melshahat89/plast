<?php

namespace App\Application\Transformers;

use Illuminate\Database\Eloquent\Model;

class NewsTransformers extends AbstractTransformer
{

    public function transformModel(Model $modelOrCollection)
    {
        return [
            "id" => $modelOrCollection->id,
			"title" => $modelOrCollection->title,
			"description" => $modelOrCollection->description,
			"image" => $modelOrCollection->image,
			"published" => $modelOrCollection->published,

        ];
    }

    public function transformModelAr(Model $modelOrCollection)
    {
        return [
           "id" => $modelOrCollection->id,
			"title" => $modelOrCollection->title,
			"description" => $modelOrCollection->description,
			"image" => $modelOrCollection->image,
			"published" => $modelOrCollection->published,

        ];
    }

}