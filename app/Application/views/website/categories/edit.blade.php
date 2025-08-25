@extends(layoutExtend('website'))

@section('title')
    {{ trans('categories.categories') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
         @include(layoutMessage('website'))
         <a href="{{ url('categories') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
        <form action="{{ concatenateLangToUrl('categories/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
             		 <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}" > 
			<label for="name">{{ trans("categories.name")}}</label>
				<input type="text" name="name" class="form-control" id="name" value="{{ isset($item->name) ? $item->name : old("name") }}"  placeholder="{{ trans("categories.name")}}">
		</div>
			@if ($errors->has("name"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("name") }}</strong>
					</span>
				</div>
			@endif
		 <div class="form-group {{ $errors->has("published") ? "has-error" : "" }}" > 
			<label for="published">{{ trans("categories.published")}}</label>
				 <div class="form-check">
					<label class="form-check-label">
					<input class="form-check-input" name="published" {{ isset($item->published) && $item->published == 0 ? "checked" : "" }} type="radio" value="0" > 
					{{ trans("categories.No")}}
				 </label > 
				<label class="form-check-label">
				<input class="form-check-input" name="published" {{ isset($item->published) && $item->published == 1 ? "checked" : "" }} type="radio" value="1" > 
									{{ trans("categories.Yes")}}
				 </label> 
				</div> 		</div>
			@if ($errors->has("published"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("published") }}</strong>
					</span>
				</div>
			@endif

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="fa fa-save"></i>
                    {{ trans('website.Update') }}  {{ trans('website.categories') }}
                </button>
            </div>
        </form>
</div>
@endsection
