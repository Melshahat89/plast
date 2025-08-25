<h2>{{ ucfirst(trans('admin.Random'))}} {{ ucfirst('products') }}</h2>
<hr>
@php $sidebarProducts = \App\Application\Model\Products::inRandomOrder()->limit(5)->get(); @endphp
		@if (count($sidebarProducts) > 0)
			@foreach ($sidebarProducts as $d)
				 <div>
					<h2 > {{ \Illuminate\Support\Str::limit($d->name , 50) }}</h2 > 
					<p> {{ \Illuminate\Support\Str::limit($d->description , 300) }}</p > 
					<p> {{ \Illuminate\Support\Str::limit($d->shortdescription , 300) }}</p > 
					 <p><a href="{{ url("products/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			