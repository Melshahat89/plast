<?php

namespace App\Application\Transformers;

use Illuminate\Database\Eloquent\Model;

class ProductsTransformers extends AbstractTransformer
{

    public function transformModel(Model $modelOrCollection)
    {
        return [
            "id" => $modelOrCollection->id,
			"name" => $modelOrCollection->name,
			"description" => $modelOrCollection->description,
			"shortdescription" => $modelOrCollection->shortdescription,
			"slug" => $modelOrCollection->slug,
			"price" => $modelOrCollection->price,
			"image" => $modelOrCollection->image,
			"quantity" => $modelOrCollection->quantity,
			"futured" => $modelOrCollection->futured,
			"published" => $modelOrCollection->published,
			"bestseller" => $modelOrCollection->bestseller,
			"type" => $modelOrCollection->type,
			"youtubelink" => $modelOrCollection->youtubelink,
			"metadescription" => $modelOrCollection->metadescription,
			"metatitle" => $modelOrCollection->metatitle,
			"seokeywords[]" => $modelOrCollection->seokeywords[],

        ];
    }

    public function transformModelAr(Model $modelOrCollection)
    {
        return [
           "id" => $modelOrCollection->id,
			"name" => $modelOrCollection->name,
			"description" => $modelOrCollection->description,
			"shortdescription" => $modelOrCollection->shortdescription,
			"slug" => $modelOrCollection->slug,
			"price" => $modelOrCollection->price,
			"image" => $modelOrCollection->image,
			"quantity" => $modelOrCollection->quantity,
			"futured" => $modelOrCollection->futured,
			"published" => $modelOrCollection->published,
			"bestseller" => $modelOrCollection->bestseller,
			"type" => $modelOrCollection->type,
			"youtubelink" => $modelOrCollection->youtubelink,
			"metadescription" => $modelOrCollection->metadescription,
			"metatitle" => $modelOrCollection->metatitle,
			"seokeywords[]" => $modelOrCollection->seokeywords[],

        ];
    }

}