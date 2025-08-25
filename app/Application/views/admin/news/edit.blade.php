@extends(layoutExtend())

@section('title')
    {{ trans('news.news') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('news.news') , 'model' => 'news' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/news/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

 		 <div class="form-group {{ $errors->has("title") ? "has-error" : "" }}" > 
			<label for="title">{{ trans("news.title")}}</label>
				<input type="text" name="title" class="form-control" id="title" value="{{ isset($item->title) ? $item->title : old("title") }}"  placeholder="{{ trans("news.title")}}">
		</div>
			@if ($errors->has("title"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("title") }}</strong>
					</span>
				</div>
			@endif
		 <div class="form-group {{ $errors->has("description") ? "has-error" : "" }}" > 
			<label for="description">{{ trans("news.description")}}</label>
				<textarea name="description" class="form-control" id="description"   placeholder="{{ trans("news.description")}}" >{{isset($item->description) ? $item->description : old("description") }}</textarea >
		</div>
			@if ($errors->has("description"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("description") }}</strong>
					</span>
				</div>
			@endif
		 <div class="form-group {{ $errors->has("image") ? "has-error" : "" }}" > 
			<label for="image">{{ trans("news.image")}}</label>
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
		 <div class="form-group {{ $errors->has("published") ? "has-error" : "" }}" > 
			<label for="published">{{ trans("news.published")}}</label>
				 <div class="form-check">
					<label class="form-check-label">
					<input class="form-check-input" name="published" {{ isset($item->published) && $item->published == 0 ? "checked" : "" }} type="radio" value="0" > 
					{{ trans("news.No")}}
				 </label > 
				<label class="form-check-label">
				<input class="form-check-input" name="published" {{ isset($item->published) && $item->published == 1 ? "checked" : "" }} type="radio" value="1" > 
									{{ trans("news.Yes")}}
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
                    <i class="material-icons">check_circle</i>
                    {{ trans('home.save') }}  {{ trans('news.news') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
