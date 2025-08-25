@extends(layoutExtend())
  @section('title')
    {{ trans('products.products') }} {{ trans('home.view') }}
@endsection
  @section('content')
    @component(layoutForm() , ['title' => trans('products.products') , 'model' => 'products' , 'action' => trans('home.view')  ])
   <table class="table table-bordered  table-striped" > 
    <tr>
    <th width="200">{{ trans("products.name") }}</th>
     <td>{{ nl2br($item->name) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.description") }}</th>
     <td>{{ nl2br($item->description) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.shortdescription") }}</th>
     <td>{{ nl2br($item->shortdescription) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.slug") }}</th>
     <td>{{ nl2br($item->slug) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.price") }}</th>
     <td>{{ nl2br($item->price) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.image") }}</th>
     <td>
     <img src="{{ small($item->image) }}" width="100" />
     </td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.quantity") }}</th>
     <td>{{ nl2br($item->quantity) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.futured") }}</th>
     <td>
    {{ $item->futured == 1 ? trans("products.Yes") : trans("products.No")  }}
     </td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.published") }}</th>
     <td>
    {{ $item->published == 1 ? trans("products.Yes") : trans("products.No")  }}
     </td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.bestseller") }}</th>
     <td>
    {{ $item->bestseller == 1 ? trans("products.Yes") : trans("products.No")  }}
     </td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.type") }}</th>
     <td>{{ nl2br($item->type) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.youtubelink") }}</th>
     <td>{{ nl2br($item->youtubelink) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.metadescription") }}</th>
     <td>{{ nl2br($item->metadescription) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.metatitle") }}</th>
     <td>{{ nl2br($item->metatitle) }}</td>
    </tr>
    <tr>
    <th width="200">{{ trans("products.seokeywords") }}</th>
     <td><span class="label label-default">{!! json_decode($item->seokeywords) ? implode("</span> <br> <span class='label label-default'>" , json_decode($item->seokeywords)) : "" !!}</span></td> 
        </tr>
  </table>
          @include('admin.products.buttons.delete' , ['id' => $item->id])
        @include('admin.products.buttons.edit' , ['id' => $item->id])
    @endcomponent
@endsection
