@extends(layoutExtend('website'))

@section('title')
    {{ trans('news.news') }} {{ trans('home.view') }}
@endsection

@section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
        <a href="{{ url('news') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200">{{ trans("news.title") }}</th>
					<td>{{ nl2br($item->title) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("news.description") }}</th>
					<td>{{ nl2br($item->description) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("news.image") }}</th>
					<td>
					<img src="{{ small($item->image) }}" width="100" />
					</td>
				</tr>
				<tr>
				<th width="200">{{ trans("news.published") }}</th>
					<td>
				{{ $item->published == 1 ? trans("news.Yes") : trans("news.No")  }}
					</td>
				</tr>
		</table>

        @include('website.news.buttons.delete' , ['id' => $item->id])
        @include('website.news.buttons.edit' , ['id' => $item->id])
</div>
@endsection
