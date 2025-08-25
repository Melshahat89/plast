<h2>{{ ucfirst(trans('admin.Latest'))}} {{ ucfirst('categories') }}</h2>
<hr>
@php $sidebarCategories = \App\Application\Model\Categories::orderBy("id", "DESC")->limit(5)->get(); @endphp
		@if (count($sidebarCategories) > 0)
			@foreach ($sidebarCategories as $d)
				 <div>
					<p><a href="{{ url("categories/".$d->id."/view") }}">{{ \Illuminate\Support\Str::limit($d->name , 20) }}</a></p > 
					<p><a href="{{ url("categories/".$d->id."/view") }}" ><i class="fa fa-eye" ></i ></a> <small ><i class="fa fa-calendar-o" ></i > {{ $d->created_at }}</small ></p > 
				<hr > 
				</div> 
			@endforeach
		@endif
			