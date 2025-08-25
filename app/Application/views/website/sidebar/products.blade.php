<h2>{{ ucfirst(trans('admin.Latest'))}} {{ ucfirst('products') }}</h2>
<hr>
@php $sidebarProducts = \App\Application\Model\Products::orderBy("id", "DESC")->limit(5)->get(); @endphp
		@if (count($sidebarProducts) > 0)
			@foreach ($sidebarProducts as $d)
				 <div>
					<p><a href="{{ url("products/".$d->id."/view") }}">{{ \Illuminate\Support\Str::limit($d->name , 20) }}</a></p > 
					<p><a href="{{ url("products/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			