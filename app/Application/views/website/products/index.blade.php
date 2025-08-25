@extends(layoutExtend('website'))

@section('title')
     {{ trans('products.products') }} {{ trans('home.control') }}
@endsection

@section('content')
 <div class="pull-{{ getDirection() }} col-lg-9">
    <div><h1>{{ trans('website.products') }}</h1></div>
     <div><a href="{{ url('products/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.products') }}</a><br></div>
 	<form method="get" class="form-inline">
		<div class="form-group">
			<input type="text" name="from" class="form-control datepicker2" placeholder="{{ trans("admin.from") }}"value="{{ request()->has("from") ? request()->get("from") : "" }}">
		 </div>
		<div class="form-group">
			<input type="text" name="to" class="form-control datepicker2" placeholder="{{ trans("admin.to") }}"value="{{ request()->has("to") ? request()->get("to") : "" }}">
		</div>
		<div class="form-group"> 
			<input type="text" name="name" class="form-control " placeholder="{{ trans("products.name") }}" value="{{ request()->has("name") ? request()->get("name") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="description" class="form-control " placeholder="{{ trans("products.description") }}" value="{{ request()->has("description") ? request()->get("description") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="shortdescription" class="form-control " placeholder="{{ trans("products.shortdescription") }}" value="{{ request()->has("shortdescription") ? request()->get("shortdescription") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="slug" class="form-control " placeholder="{{ trans("products.slug") }}" value="{{ request()->has("slug") ? request()->get("slug") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="price" class="form-control " placeholder="{{ trans("products.price") }}" value="{{ request()->has("price") ? request()->get("price") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="quantity" class="form-control " placeholder="{{ trans("products.quantity") }}" value="{{ request()->has("quantity") ? request()->get("quantity") : "" }}"> 
		</div> 
		<div class="form-group" > 
			<select style="width:80px;" name="futured" class="form-control select2" placeholder="{{ trans("products.futured") }}" > 
				<option value="1" {{ request()->has("futured") && request()->get("futured") === 1 ? "selected" : "" }}>{{trans("products.Yes") }} </option> 
				<option value="0" {{request()->has("futured") && request()->get("futured") === 0 ? "selected" : "" }}>{{trans("products.No") }} </option> 
			</select> 
		</div> 
		<div class="form-group" > 
			<select style="width:80px;" name="published" class="form-control select2" placeholder="{{ trans("products.published") }}" > 
				<option value="1" {{ request()->has("published") && request()->get("published") === 1 ? "selected" : "" }}>{{trans("products.Yes") }} </option> 
				<option value="0" {{request()->has("published") && request()->get("published") === 0 ? "selected" : "" }}>{{trans("products.No") }} </option> 
			</select> 
		</div> 
		<div class="form-group" > 
			<select style="width:80px;" name="bestseller" class="form-control select2" placeholder="{{ trans("products.bestseller") }}" > 
				<option value="1" {{ request()->has("bestseller") && request()->get("bestseller") === 1 ? "selected" : "" }}>{{trans("products.Yes") }} </option> 
				<option value="0" {{request()->has("bestseller") && request()->get("bestseller") === 0 ? "selected" : "" }}>{{trans("products.No") }} </option> 
			</select> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="type" class="form-control " placeholder="{{ trans("products.type") }}" value="{{ request()->has("type") ? request()->get("type") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="youtubelink" class="form-control " placeholder="{{ trans("products.youtubelink") }}" value="{{ request()->has("youtubelink") ? request()->get("youtubelink") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="metadescription" class="form-control " placeholder="{{ trans("products.metadescription") }}" value="{{ request()->has("metadescription") ? request()->get("metadescription") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="metatitle" class="form-control " placeholder="{{ trans("products.metatitle") }}" value="{{ request()->has("metatitle") ? request()->get("metatitle") : "" }}"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="seokeywords" class="form-control " placeholder="{{ trans("products.seokeywords") }}" value="{{ request()->has("seokeywords") ? request()->get("seokeywords") : "" }}"> 
		</div> 
		 <button class="btn btn-success" type="submit" ><i class="fa fa-search" ></i ></button>
		<a href="{{ url("products") }}" class="btn btn-danger" ><i class="fa fa-close" ></i></a>
	 </form > 
<br ><table class="table table-responsive table-striped table-bordered"> 
		<thead > 
			<tr> 
				<th>{{ trans("products.name") }}</th> 
				<th>{{ trans("products.edit") }}</th> 
				<th>{{ trans("products.show") }}</th> 
				<th>{{
            trans("products.delete") }}</th> 
				</thead > 
		<tbody > 
		@if (count($items) > 0) 
			@foreach ($items as $d) 
				 <tr>
					<td>{{ \Illuminate\Support\Str::limit($d->name , 20) }}</td> 
				<td> @include("website.products.buttons.edit", ["id" => $d->id])</td> 
					<td> @include("website.products.buttons.view", ["id" => $d->id])</td> 
					<td> @include("website.products.buttons.delete", ["id" => $d->id])</td> 
					</tr> 
					@endforeach
				@endif
			 </tbody > 
		</table > 
	@include(layoutPaginate() , ["items" => $items])
		
</div>
@endsection
