<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Products\AddRequestProducts;
use App\Application\Requests\Admin\Products\UpdateRequestProducts;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ProductssDataTable;
use App\Application\Model\Products;
use Yajra\Datatables\Request;
use Alert;

class ProductsController extends AbstractController
{
    public function __construct(Products $model)
    {
        parent::__construct($model);
    }

    public function index(ProductssDataTable $dataTable){
        return $dataTable->render('admin.products.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.products.edit' , $id);
    }

     public function store(AddRequestProducts $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/products');
     }

     public function update($id , UpdateRequestProducts $request){
          $item = $this->storeOrUpdate($request, $id, true);
return redirect()->back();

     }


    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.products.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/products')->with('sucess' , 'Done Delete products From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/products')->with('sucess' , 'Done Delete products From system');
    }

}
