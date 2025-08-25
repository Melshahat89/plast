<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\News;
use App\Application\Requests\Website\News\AddRequestNews;
use App\Application\Requests\Website\News\UpdateRequestNews;

class NewsController extends AbstractController
{

     public function __construct(News $model)
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

			if(request()->has("title") && request()->get("title") != ""){
				$items = $items->where("title","=", request()->get("title"));
			}

			if(request()->has("description") && request()->get("description") != ""){
				$items = $items->where("description","=", request()->get("description"));
			}

			if(request()->has("published") && request()->get("published") != ""){
				$items = $items->where("published","=", request()->get("published"));
			}



        $items = $items->paginate(env('PAGINATE'));
        return view('website.news.index' , compact('items'));
     }

     public function show($id = null){
         return $this->createOrEdit('website.news.edit' , $id);
     }

     public function store(AddRequestNews $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('news');
     }

     public function update($id , UpdateRequestNews $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }

     public function getById($id){
         $fields = $this->model->findOrFail($id);
         return $this->createOrEdit('website.news.show' , $id , ['fields' =>  $fields]);
     }

     public function destroy($id){
         return $this->deleteItem($id , 'news')->with('sucess' , 'Done Delete News From system');
     }


}
