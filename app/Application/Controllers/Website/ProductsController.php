<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Products;
use App\Application\Requests\Website\Products\AddRequestProducts;
use App\Application\Requests\Website\Products\UpdateRequestProducts;

class ProductsController extends AbstractController
{

     public function __construct(Products $model)
     {
        parent::__construct($model);
     }

     public function index(){
        $items = $this->model;

        if(request()->has('from') && request()->get('from') != ''){
            $items = $items->whereDate('created_at' , '>=' , request()->get('from'));
        }

        if(request()->has('to') && request()->get('to') != ''){
            $items = $items->whereDate('created_at' , '<=' , request()->get('to'));
        }

			if(request()->has("name") && request()->get("name") != ""){
				$items = $items->where("name","=", request()->get("name"));
			}

			if(request()->has("description") && request()->get("description") != ""){
				$items = $items->where("description","=", request()->get("description"));
			}

			if(request()->has("shortdescription") && request()->get("shortdescription") != ""){
				$items = $items->where("shortdescription","=", request()->get("shortdescription"));
			}

			if(request()->has("slug") && request()->get("slug") != ""){
				$items = $items->where("slug","=", request()->get("slug"));
			}

			if(request()->has("price") && request()->get("price") != ""){
				$items = $items->where("price","=", request()->get("price"));
			}

			if(request()->has("quantity") && request()->get("quantity") != ""){
				$items = $items->where("quantity","=", request()->get("quantity"));
			}

			if(request()->has("futured") && request()->get("futured") != ""){
				$items = $items->where("futured","=", request()->get("futured"));
			}

			if(request()->has("published") && request()->get("published") != ""){
				$items = $items->where("published","=", request()->get("published"));
			}

			if(request()->has("bestseller") && request()->get("bestseller") != ""){
				$items = $items->where("bestseller","=", request()->get("bestseller"));
			}

			if(request()->has("type") && request()->get("type") != ""){
				$items = $items->where("type","=", request()->get("type"));
			}

			if(request()->has("youtubelink") && request()->get("youtubelink") != ""){
				$items = $items->where("youtubelink","=", request()->get("youtubelink"));
			}

			if(request()->has("metadescription") && request()->get("metadescription") != ""){
				$items = $items->where("metadescription","=", request()->get("metadescription"));
			}

			if(request()->has("metatitle") && request()->get("metatitle") != ""){
				$items = $items->where("metatitle","=", request()->get("metatitle"));
			}

			if(request()->has("seokeywords") && request()->get("seokeywords") != ""){
				$items = $items->where("seokeywords","like", "%".request()->get("seokeywords")."%");
			}



        $items = $items->paginate(env('PAGINATE'));
        return view('website.products.index' , compact('items'));
     }

     public function show($id = null){
         return $this->createOrEdit('website.products.edit' , $id);
     }

     public function store(AddRequestProducts $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('products');
     }

     public function update($id , UpdateRequestProducts $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }

     public function getById($id){
         $fields = $this->model->findOrFail($id);
         return $this->createOrEdit('website.products.show' , $id , ['fields' =>  $fields]);
     }

     public function destroy($id){
         return $this->deleteItem($id , 'products')->with('sucess' , 'Done Delete Products From system');
     }


}
