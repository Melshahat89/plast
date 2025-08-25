@extends(layoutExtend('website'))
@section('title')
    {{$news->title .'-'.  'المصرية الدولية بلاست' }}
@endsection


@section('content')


        <section class="py-5">
            <div class="container">
                <div class="mb-4">
                    <a href="{{ url('news') }}" class="btn btn-outline-secondary btn-sm">
                        ← العودة للأخبار
                    </a>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="mb-4 text-center">
                            <h1 class="fw-bold">{{ $news->title }}</h1>
                            <p class="text-muted small">
                                <i class="bi bi-calendar-event me-1"></i> {{ $news->created_at->format('Y-m-d') }}
                            </p>
                        </div>

                        @if($news->image)
                            <div class="mb-4 text-center">
                                <img src="{{ large($news->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $news->title }}">
                            </div>
                        @endif

                        <div class="news-content">
                            {!! nl2br(e($news->description)) !!}
                        </div>

                        <div class="mt-5 d-flex justify-content-between">
                            <div>
                                <span class="text-muted">شارك الخبر:</span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="btn btn-sm btn-outline-primary ms-2">
                                    <i class="bi bi-facebook"></i> فيسبوك
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . request()->fullUrl()) }}" target="_blank" class="btn btn-sm btn-outline-success ms-2">
                                    <i class="bi bi-whatsapp"></i> واتساب
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
