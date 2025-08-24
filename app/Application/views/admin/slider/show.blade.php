@extends(layoutExtend())

@section('title')
    {{ trans('slider.slider') }} {{ trans('home.view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('slider.slider') , 'model' => 'slider' , 'action' => trans('home.view')  ])
		 <table class="table table-bordered table-responsive table-striped" > 
				<tr>
				<th width="200">{{ trans("slider.image") }}</th>
					<td>
					<img src="{{ small($item->image) }}" width="100" />
					</td>
				</tr>
				<tr>
				<th width="200">{{ trans("slider.title") }}</th>
					<td>{{ nl2br($item->title) }}</td>
				</tr>
		</table>

        @include('admin.slider.buttons.delete' , ['id' => $item->id])
        @include('admin.slider.buttons.edit' , ['id' => $item->id])
    @endcomponent
@endsection
