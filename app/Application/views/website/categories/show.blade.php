@extends(layoutExtend('website'))

@section('title')
    {{ trans('categories.categories') }} {{ trans('home.view') }}
@endsection

@section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
        <a href="{{ url('categories') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
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

        @include('website.categories.buttons.delete' , ['id' => $item->id])
        @include('website.categories.buttons.edit' , ['id' => $item->id])
</div>
@endsection
