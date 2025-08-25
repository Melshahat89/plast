@extends(layoutExtend('website'))

@section('title')
     {{ trans('categories.categories') }} {{ trans('home.control') }}
@endsection

@section('content')
 <div class="pull-{{ getDirection() }} col-lg-9">
    <div><h1>{{ trans('website.categories') }}</h1></div>
     <div><a href="{{ url('categories/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.categories') }}</a><br></div>
 	<form method="get" class="form-inline">
		<div class="form-group">
			<input type="text" name="from" class="form-control datepicker2" placeholder="{{ trans("admin.from") }}"value="{{ request()->has("from") ? request()->get("from") : "" }}">
		 </div>
		<div class="form-group">
			<input type="text" name="to" class="form-control datepicker2" placeholder="{{ trans("admin.to") }}"value="{{ request()->has("to") ? request()->get("to") : "" }}">
		</div>
		<div class="form-group"> 
			<input type="text" name="name" class="form-control " placeholder="{{ trans("categories.name") }}" value="{{ request()->has("name") ? request()->get("name") : "" }}"> 
		</div> 
		<div class="form-group" > 
			<select style="width:80px;" name="published" class="form-control select2" placeholder="{{ trans("categories.published") }}" > 
				<option value="1" {{ request()->has("published") && request()->get("published") === 1 ? "selected" : "" }}>{{trans("categories.Yes") }} </option> 
				<option value="0" {{request()->has("published") && request()->get("published") === 0 ? "selected" : "" }}>{{trans("categories.No") }} </option> 
			</select> 
		</div> 
		 <button class="btn btn-success" type="submit" ><i class="fa fa-search" ></i ></button>
		<a href="{{ url("categories") }}" class="btn btn-danger" ><i class="fa fa-close" ></i></a>
	 </form > 
<br ><table class="table table-responsive table-striped table-bordered"> 
		<thead > 
			<tr> 
				<th>{{ trans("categories.name") }}</th> 
				<th>{{ trans("categories.edit") }}</th> 
				<th>{{ trans("categories.show") }}</th> 
				<th>{{
            trans("categories.delete") }}</th> 
				</thead > 
		<tbody > 
		@if (count($items) > 0) 
			@foreach ($items as $d) 
				 <tr>
					<td>{{ \Illuminate\Support\Str::limit($d->name , 20) }}</td> 
				<td> @include("website.categories.buttons.edit", ["id" => $d->id])</td> 
					<td> @include("website.categories.buttons.view", ["id" => $d->id])</td> 
					<td> @include("website.categories.buttons.delete", ["id" => $d->id])</td> 
					</tr> 
					@endforeach
				@endif
			 </tbody > 
		</table > 
	@include(layoutPaginate() , ["items" => $items])
		
</div>
@endsection
