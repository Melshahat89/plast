@extends(layoutExtend())

@section('title')
    {{ trans('categories.categories') }} {{ trans('home.view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('categories.categories') , 'model' => 'categories' , 'action' => trans('home.view')  ])
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200">{{ trans("categories.name") }}</th>
					<td>{{ nl2br($item->name) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("categories.published") }}</th>
					<td>
				{{ $item->published == 1 ? trans("categories.Yes") : trans("categories.No")  }}
					</td>
				</tr>
		</table>

        @include('admin.categories.buttons.delete' , ['id' => $item->id])
        @include('admin.categories.buttons.edit' , ['id' => $item->id])
    @endcomponent
@endsection
