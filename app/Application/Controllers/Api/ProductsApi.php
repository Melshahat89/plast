<?php

namespace App\Application\Controllers\Api;


use App\Application\Controllers\Controller;
use App\Application\Model\Products;
use App\Application\Transformers\ProductsTransformers;
use App\Application\Requests\Website\Products\ApiAddRequestProducts;
use App\Application\Requests\Website\Products\ApiUpdateRequestProducts;

class ProductsApi extends Controller
{
    use ApiTrait;
    protected $model;

    public function __construct(Products $model)
    {
        $this->model = $model;
        /// send header Authorization Bearer token
        /// $this->middleware('authApi')->only();
    }

    public function add(ApiAddRequestProducts $validation){
         return $this->addItem($validation);
    }

    public function update($id , ApiUpdateRequestProducts $validation){
        return $this->updateItem($id , $validation);
    }

    protected function checkLanguageBeforeReturn($data , $status_code = 200, $paginate = [])
    {
       if (request()->has('lang') && request()->get('lang') == 'ar') {
            return response(apiReturn(ProductsTransformers::transformAr($data) + $paginate), $status_code);
        }
        return response(apiReturn(ProductsTransformers::transform($data) + $paginate), $status_code);
    }

}
