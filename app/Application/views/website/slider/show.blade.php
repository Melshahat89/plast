@extends(layoutExtend('website'))

@section('title')
    {{ trans('slider.slider') }} {{ trans('home.view') }}
@endsection

@section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
        <a href="{{ url('slider') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
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

        @include('website.slider.buttons.delete' , ['id' => $item->id])
        @include('website.slider.buttons.edit' , ['id' => $item->id])
</div>
@endsection
