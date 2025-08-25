<?php

namespace App\Application\DataTables;

use App\Application\Model\Products;
use Yajra\DataTables\Services\DataTable;

class ProductssDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables()
             ->eloquent($this->query())
              ->addColumn('id', 'admin.products.buttons.id')
             ->addColumn('edit', 'admin.products.buttons.edit')
             ->addColumn('delete', 'admin.products.buttons.delete')
             ->addColumn('view', 'admin.products.buttons.view')
             /*->addColumn('name', 'admin.products.buttons.langcol')*/
             ->rawColumns(['id', 'edit', 'delete', 'view'])
             ->make(true);
    }
    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Products::query();

        if(request()->has('from') && request()->get('from') != ''){
            $query = $query->whereDate('created_at' , '>=' , request()->get('from'));
        }

        if(request()->has('to') && request()->get('to') != ''){
            $query = $query->whereDate('created_at' , '<=' , request()->get('to'));
        }

		if(request()->has("name") && request()->get("name") != ""){
				$query = $query->where("name","=", request()->get("name"));
		}

		if(request()->has("description") && request()->get("description") != ""){
				$query = $query->where("description","=", request()->get("description"));
		}

		if(request()->has("shortdescription") && request()->get("shortdescription") != ""){
				$query = $query->where("shortdescription","=", request()->get("shortdescription"));
		}

		if(request()->has("slug") && request()->get("slug") != ""){
				$query = $query->where("slug","=", request()->get("slug"));
		}

		if(request()->has("price") && request()->get("price") != ""){
				$query = $query->where("price","=", request()->get("price"));
		}

		if(request()->has("quantity") && request()->get("quantity") != ""){
				$query = $query->where("quantity","=", request()->get("quantity"));
		}

		if(request()->has("futured") && request()->get("futured") != ""){
				$query = $query->where("futured","=", request()->get("futured"));
		}

		if(request()->has("published") && request()->get("published") != ""){
				$query = $query->where("published","=", request()->get("published"));
		}

		if(request()->has("bestseller") && request()->get("bestseller") != ""){
				$query = $query->where("bestseller","=", request()->get("bestseller"));
		}

		if(request()->has("type") && request()->get("type") != ""){
				$query = $query->where("type","=", request()->get("type"));
		}

		if(request()->has("youtubelink") && request()->get("youtubelink") != ""){
				$query = $query->where("youtubelink","=", request()->get("youtubelink"));
		}

		if(request()->has("metadescription") && request()->get("metadescription") != ""){
				$query = $query->where("metadescription","=", request()->get("metadescription"));
		}

		if(request()->has("metatitle") && request()->get("metatitle") != ""){
				$query = $query->where("metatitle","=", request()->get("metatitle"));
		}

		if(request()->has("seokeywords") && request()->get("seokeywords") != ""){
				$query = $query->where("seokeywords","like", "%".request()->get("seokeywords")."%");
		}



        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->parameters(dataTableConfig());
    }
    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
              [
                  'name' => "id",
                  'data' => 'id',
                  'title' => trans('curd.id'),
             ],
			[
                'name' => 'name',
                'data' => 'name',
                'title' => "name",
                
                ],
             [
                  'name' => 'view',
                  'data' => 'view',
                  'title' => trans('curd.view'),
                  'exportable' => false,
                  'printable' => false,
                  'searchable' => false,
                  'orderable' => false,
             ],
             [
                  'name' => 'edit',
                  'data' => 'edit',
                  'title' =>  trans('curd.edit'),
                  'exportable' => false,
                  'printable' => false,
                  'searchable' => false,
                  'orderable' => false,
             ],
             [
                   'name' => 'delete',
                   'data' => 'delete',
                   'title' => trans('curd.delete'),
                   'exportable' => false,
                   'printable' => false,
                   'searchable' => false,
                   'orderable' => false,
             ],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Productsdatatables_' . time();
    }
}