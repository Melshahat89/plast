@extends(layoutExtend('website'))
@section('title')
    {{'اخبارنا' .'-'.  'المصرية الدولية بلاست' }}
@endsection


@section('content')


        <section class="py-5 bg-light border-bottom">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">📢 أخبارنا</h2>

                <div class="row">
                    @foreach($news as $item)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="{{ large($item->image)}}" class="card-img-top" alt="{{ $item->title }}">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                    <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($item->description, 100) }}</p>
                                    <a href="{{url('new/'.$item->id)}}" class="btn btn-outline-dark btn-sm">
                                        اقرأ المزيد
                                    </a>
                                </div>
                                <div class="card-footer text-muted small">
                                    <i class="bi bi-calendar-event me-1"></i> {{ $item->created_at->format('Y-m-d') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $news->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>

@endsection
