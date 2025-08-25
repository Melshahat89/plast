@extends(layoutExtend('website'))
 @section('title')
    {{ trans('products.products') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection
 @section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
         @include(layoutMessage('website'))
         <a href="{{ url('products') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
        <form action="{{ concatenateLangToUrl('products/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include("website.products.relation.categories.edit")
                <div class="form-group {{ $errors->has("name") ? "has-error" : "" }}" > 
   <label for="name">{{ trans("products.name")}}</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ isset($item->name) ? $item->name : old("name") }}"  placeholder="{{ trans("products.name")}}">
  </div>
   @if ($errors->has("name"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("name") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("description") ? "has-error" : "" }}" > 
   <label for="description">{{ trans("products.description")}}</label>
    <textarea name="description" class="form-control" id="description"   placeholder="{{ trans("products.description")}}" >{{isset($item->description) ? $item->description : old("description") }}</textarea >
  </div>
   @if ($errors->has("description"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("description") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("shortdescription") ? "has-error" : "" }}" > 
   <label for="shortdescription">{{ trans("products.shortdescription")}}</label>
    <input type="text" name="shortdescription" class="form-control" id="shortdescription" value="{{ isset($item->shortdescription) ? $item->shortdescription : old("shortdescription") }}"  placeholder="{{ trans("products.shortdescription")}}">
  </div>
   @if ($errors->has("shortdescription"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("shortdescription") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("slug") ? "has-error" : "" }}" > 
   <label for="slug">{{ trans("products.slug")}}</label>
    <input type="text" name="slug" class="form-control" id="slug" value="{{ isset($item->slug) ? $item->slug : old("slug") }}"  placeholder="{{ trans("products.slug")}}">
  </div>
   @if ($errors->has("slug"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("slug") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("price") ? "has-error" : "" }}" > 
   <label for="price">{{ trans("products.price")}}</label>
    <input type="text" name="price" class="form-control" id="price" value="{{ isset($item->price) ? $item->price : old("price") }}"  placeholder="{{ trans("products.price")}}">
  </div>
   @if ($errors->has("price"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("price") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("image") ? "has-error" : "" }}" > 
   <label for="image">{{ trans("products.image")}}</label>
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
   <div class="form-group {{ $errors->has("quantity") ? "has-error" : "" }}" > 
   <label for="quantity">{{ trans("products.quantity")}}</label>
    <input type="text" name="quantity" class="form-control" id="quantity" value="{{ isset($item->quantity) ? $item->quantity : old("quantity") }}"  placeholder="{{ trans("products.quantity")}}">
  </div>
   @if ($errors->has("quantity"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("quantity") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("futured") ? "has-error" : "" }}" > 
   <label for="futured">{{ trans("products.futured")}}</label>
     <div class="form-check">
     <label class="form-check-label">
     <input class="form-check-input" name="futured" {{ isset($item->futured) && $item->futured == 0 ? "checked" : "" }} type="radio" value="0" > 
     {{ trans("products.No")}}
     </label > 
    <label class="form-check-label">
    <input class="form-check-input" name="futured" {{ isset($item->futured) && $item->futured == 1 ? "checked" : "" }} type="radio" value="1" > 
         {{ trans("products.Yes")}}
     </label> 
    </div> 		</div>
   @if ($errors->has("futured"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("futured") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("published") ? "has-error" : "" }}" > 
   <label for="published">{{ trans("products.published")}}</label>
     <div class="form-check">
     <label class="form-check-label">
     <input class="form-check-input" name="published" {{ isset($item->published) && $item->published == 0 ? "checked" : "" }} type="radio" value="0" > 
     {{ trans("products.No")}}
     </label > 
    <label class="form-check-label">
    <input class="form-check-input" name="published" {{ isset($item->published) && $item->published == 1 ? "checked" : "" }} type="radio" value="1" > 
         {{ trans("products.Yes")}}
     </label> 
    </div> 		</div>
   @if ($errors->has("published"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("published") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("bestseller") ? "has-error" : "" }}" > 
   <label for="bestseller">{{ trans("products.bestseller")}}</label>
     <div class="form-check">
     <label class="form-check-label">
     <input class="form-check-input" name="bestseller" {{ isset($item->bestseller) && $item->bestseller == 0 ? "checked" : "" }} type="radio" value="0" > 
     {{ trans("products.No")}}
     </label > 
    <label class="form-check-label">
    <input class="form-check-input" name="bestseller" {{ isset($item->bestseller) && $item->bestseller == 1 ? "checked" : "" }} type="radio" value="1" > 
         {{ trans("products.Yes")}}
     </label> 
    </div> 		</div>
   @if ($errors->has("bestseller"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("bestseller") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("type") ? "has-error" : "" }}" > 
   <label for="type">{{ trans("products.type")}}</label>
    <input type="text" name="type" class="form-control" id="type" value="{{ isset($item->type) ? $item->type : old("type") }}"  placeholder="{{ trans("products.type")}}">
  </div>
   @if ($errors->has("type"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("type") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("youtubelink") ? "has-error" : "" }}" > 
   <label for="youtubelink">{{ trans("products.youtubelink")}}</label>
    <input type="text" name="youtubelink" class="form-control" id="youtubelink" value="{{ isset($item->youtubelink) ? $item->youtubelink : old("youtubelink") }}"  placeholder="{{ trans("products.youtubelink")}}">
  </div>
   @if ($errors->has("youtubelink"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("youtubelink") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("metadescription") ? "has-error" : "" }}" > 
   <label for="metadescription">{{ trans("products.metadescription")}}</label>
    <input type="text" name="metadescription" class="form-control" id="metadescription" value="{{ isset($item->metadescription) ? $item->metadescription : old("metadescription") }}"  placeholder="{{ trans("products.metadescription")}}">
  </div>
   @if ($errors->has("metadescription"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("metadescription") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("metatitle") ? "has-error" : "" }}" > 
   <label for="metatitle">{{ trans("products.metatitle")}}</label>
    <input type="text" name="metatitle" class="form-control" id="metatitle" value="{{ isset($item->metatitle) ? $item->metatitle : old("metatitle") }}"  placeholder="{{ trans("products.metatitle")}}">
  </div>
   @if ($errors->has("metatitle"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("metatitle") }}</strong>
     </span>
    </div>
   @endif
   <div class="form-group {{ $errors->has("seokeywords[]") ? "has-error" : "" }}" > 
   <label for="seokeywords">{{ trans("products.seokeywords")}}</label>
    <div id="laraflat-seokeywords">
     @if(isset($item) || old("seokeywords"))
      @if((isset($item->seokeywords) && json_decode($item->seokeywords) ) || old("seokeywords"))
      @php $items = isset($item->seokeywords) && json_decode($item->seokeywords) ? json_decode($item->seokeywords)  : old("seokeywords") @endphp
       @foreach($items as $jsonseokeywords)
        <div class="title form-inline" style="margin-top:5px;margin-bottom:5px"><input class="form-control" name="seokeywords[]"  value="{{ $jsonseokeywords}}" type="text" placeholder="{{ trans("products.seokeywords")}}" ><span class="btn btn-warning" onclick="removetitle(this)"> <i class="fa fa-minus"></i></span></div>
       @endforeach
      @endif
     @endif
    <span class="btn btn-success" onclick="AddNewseokeywords()"><i class="fa fa-plus"></i></span>
    <span class="btn btn-danger" onclick="clearAllseokeywords(this)"><i class="fa fa-minus"></i></span>
    @push("js")
                                        <script>
                                            function AddNewseokeywords() {
                                                $("#laraflat-seokeywords").append('<div class="seokeywords form-inline" style="margin-top:5px;margin-bottom:5px">'+'<input class="form-control" name="seokeywords[]"  type="text" placeholder="{{ trans("products.seokeywords")}}" >'+'<span class="btn btn-warning" onclick="removeseokeywords(this)">'+' <i class="fa fa-minus"></i></span>'+'</div>');
                                            }
                                            function removeseokeywords(e) {
                                                $(e).closest("div.seokeywords").remove();
                                            }
                                            function clearAllseokeywords(e) {
                                                $("#laraflat-seokeywords").html("");
                                            }
                                        </script>
            @endpush
     </div>
  </div>
   @if ($errors->has("seokeywords[]"))
    <div class="alert alert-danger">
     <span class='help-block'>
      <strong>{{ $errors->first("seokeywords[]") }}</strong>
     </span>
    </div>
   @endif
             <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="fa fa-save"></i>
                    {{ trans('website.Update') }}  {{ trans('website.products') }}
                </button>
            </div>
        </form>
</div>
@endsection
