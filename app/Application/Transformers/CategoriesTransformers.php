<?php

namespace App\Application\Transformers;

use Illuminate\Database\Eloquent\Model;

class CategoriesTransformers extends AbstractTransformer
{

    public function transformModel(Model $modelOrCollection)
    {
        return [
            "id" => $modelOrCollection->id,
			"name" => $modelOrCollection->name,
			"published" => $modelOrCollection->published,

        ];
    }

    public function transformModelAr(Model $modelOrCollection)
    {
        return [
           "id" => $modelOrCollection->id,
			"name" => $modelOrCollection->name,
			"published" => $modelOrCollection->published,

        ];
    }

}