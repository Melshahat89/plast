@extends(layoutExtend())

@section('title')
    {{ trans('slider.slider') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('slider.slider') , 'model' => 'slider' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/slider/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

 		 <div class="form-group {{ $errors->has("image") ? "has-error" : "" }}" > 
			<label for="image">{{ trans("slider.image")}}</label>
				@if(isset($item) && $item->image != "")
				<br>
				<img src="{{ small($item->image) }}" class="thumbnail" alt="" width="200">
				<br>
				@endif
				<input type="file" name="image" >
		</div>
			@if ($errors->has("image"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("image") }}</strong>
					</span>
				</div>
			@endif
		 <div class="form-group {{ $errors->has("title") ? "has-error" : "" }}" > 
			<label for="title">{{ trans("slider.title")}}</label>
				<input type="text" name="title" class="form-control" id="title" value="{{ isset($item->title) ? $item->title : old("title") }}"  placeholder="{{ trans("slider.title")}}">
		</div>
			@if ($errors->has("title"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("title") }}</strong>
					</span>
				</div>
			@endif


            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ trans('home.save') }}  {{ trans('slider.slider') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
