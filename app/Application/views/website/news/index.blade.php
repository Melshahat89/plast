@extends(layoutExtend('website'))

@section('title')
     {{ trans('news.news') }} {{ trans('home.control') }}
@endsection

@section('content')
 <div class="pull-{{ getDirection() }} col-lg-9">
    <div><h1>{{ trans('website.news') }}</h1></div>
     <div><a href="{{ url('news/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.news') }}</a><br></div>
 	<form method="get" class="form-inline">
		<div class="form-group">
			<input type="text" name="from" class="form-control datepicker2" placeholder="{{ trans("admin.from") }}"value="{{ request()->has("from") ? request()->get("from") : "" }}">
		 </div>
		<div class="form-group">
			<input type="text" name="to" class="form-control datepicker2" placeholder="{{ trans("admin.to") }}"value="{{ request()->has("to") ? request()->get("to") : "" }}">
		</div>
		<div class="form-group"> 
			<input type="text" name="title" class="form-control " placeholder="{{ trans("news.title") }}" value="{{ request()->has("title") ? request()->get("title") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="description" class="form-control " placeholder="{{ trans("news.description") }}" value="{{ request()->has("description") ? request()->get("description") : "" }}"> 
		</div> 
		<div class="form-group" > 
			<select style="width:80px;" name="published" class="form-control select2" placeholder="{{ trans("news.published") }}" > 
				<option value="1" {{ request()->has("published") && request()->get("published") === 1 ? "selected" : "" }}>{{trans("news.Yes") }} </option> 
				<option value="0" {{request()->has("published") && request()->get("published") === 0 ? "selected" : "" }}>{{trans("news.No") }} </option> 
			</select> 
		</div> 
		 <button class="btn btn-success" type="submit" ><i class="fa fa-search" ></i ></button>
		<a href="{{ url("news") }}" class="btn btn-danger" ><i class="fa fa-close" ></i></a>
	 </form > 
<br ><table class="table table-responsive table-striped table-bordered"> 
		<thead > 
			<tr> 
				<th>{{ trans("news.title") }}</th> 
				<th>{{ trans("news.edit") }}</th> 
				<th>{{ trans("news.show") }}</th> 
				<th>{{
            trans("news.delete") }}</th> 
				</thead > 
		<tbody > 
		@if (count($items) > 0) 
			@foreach ($items as $d) 
				 <tr>
					<td>{{ \Illuminate\Support\Str::limit($d->title , 20) }}</td> 
				<td> @include("website.news.buttons.edit", ["id" => $d->id])</td> 
					<td> @include("website.news.buttons.view", ["id" => $d->id])</td> 
					<td> @include("website.news.buttons.delete", ["id" => $d->id])</td> 
					</tr> 
					@endforeach
				@endif
			 </tbody > 
		</table > 
	@include(layoutPaginate() , ["items" => $items])
		
</div>
@endsection
