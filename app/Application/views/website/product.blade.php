@extends(layoutExtend('website'))
@section('title')
    {{ $product->metatitle ?? $product->name .'-'.  'المصرية الدولية بلاست' }}
@endsection
@section('canonical')<link rel="canonical" href="{{$product->canonical ? $product->canonical : url()->current() }}">@endsection
@section('description')
    {{  $product->metadescription ?? (($product->seo_desc) ? $product->seo_desc : $product->description)  }}
@endsection
@section('keywords')
    {{ ($product->seo_keys) ? extractSeoKeys($product->seo_keys) : defaultSeoKeys($product->title) }}
@endsection

@push('css')
    <meta property="og:title" content="{{$product->metatitle ?? $product->title}}">
    <meta property="og:description" content="{{ $product->metadescription ?? $product->description }}">
    <meta property="og:image" content="{{ large($product->image) }}">
    <meta property="og:url" content="{{url('courses/view/'.$product->slug)}}">
    <meta property="og:type" content="website">
@endpush

@push('schema')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Course",
          "headline": "{{ $product->metatitle }}",
          "description": "{{ $product->metadescription }}",
          "image": "{{ large($product->image) }}",
          "author": {
            "@type": "Person",
            "name": "{{ $product->author }}"
          },
          "datePublished": "{{ $product->created_at->toIso8601String() }}",
          "dateModified": "{{ $product->updated_at->toIso8601String() }}"
        }
    </script>


@endpush

@section('content')


    <section class="py-5 bg-light border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <img src="{{ large($product->image) }}" alt="اسم المنتج" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">{{$product->name}}</h2>
                    <p class="text-muted">{{$product->shortdescription}}</p>
                    <h4 class="text-danger mb-3">السعر: <span class="fw-bold">{{$product->price}}   جنيه </span></h4>
                    <ul class="list-unstyled mb-4">
                        @if((isset($product->seokeywords) && json_decode($product->seokeywords) ) || old("seokeywords"))
                            @php $items = isset($product->seokeywords) && json_decode($product->seokeywords) ? json_decode($product->seokeywords)  : old("seokeywords") @endphp
                            @foreach($items as $jsonseokeywords)
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> {{ $jsonseokeywords}}</li>
                            @endforeach
                        @endif

                    </ul>

                    <a href="https://wa.me/201018115715?text={{ urlencode('مرحبًا، أود طلب المنتج: ' . $product->name . ' بسعر ' . $product->price . ' جنيه') }}"
                            target="_blank"
                            class="btn btn-cart px-4 py-2">
                        <i class="bi bi-cart-plus me-2"></i> اطلب الآن عبر واتساب
                    </a>

                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 text-center">تفاصيل المنتج</h3>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        {!! $product->description !!}

                    </p>
                    <ul>
                        <li>النوع: {{$product->type}}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ large($product->image) }}" alt="تفاصيل المنتج" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white">
        <div class="container">
            <h3 class="mb-4 text-center">🎥 فيديو توضيحي للمنتج</h3>
            <!-- 🪄 فاصل خط مزخرف -->
            <div class="text-center my-5">
                <hr class="w-25 mx-auto border-3 border-black">
                <i class="bi bi-stars fs-3 text-danger"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="ratio ratio-16x9 rounded shadow">
                        <iframe
                                src="https://www.youtube.com/embed/{{getYouTubeId($product->youtubelink)}}"
                                title="فيديو المنتج"
                                allowfullscreen
                                loading="lazy">
                        </iframe>
                    </div>
                    <p class="mt-3 text-center">يوضح هذا الفيديو تفاصيل اكثر عن المنتج، مما يعزز ثقة العميل في جودة المنتج.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="mb-4 text-center">منتجات مشابهة</h3>
            <!-- 🪄 فاصل خط مزخرف -->
            <div class="text-center my-5">
                <hr class="w-25 mx-auto border-3 border-black">
                <i class="bi bi-stars fs-3 text-danger"></i>
            </div>
            <div class="row">
                @foreach($relatedProducts as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ large($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-danger fw-bold">{{ $product->price }} جنيه</p>
                                <a href="{{ url('product/', $product->slug) }}" class="btn btn-outline-dark btn-sm">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="mb-4 text-center">المنتجات الأكثر مبيعًا</h3>
            <!-- 🪄 فاصل خط مزخرف -->
            <div class="text-center my-5">
                <hr class="w-25 mx-auto border-3 border-black">
                <i class="bi bi-stars fs-3 text-danger"></i>
            </div>
            <div class="row">
                @foreach($topSellingProducts as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ large($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-danger fw-bold">{{ $product->price }} جنيه</p>
                                <a href="{{ url('product/', $product->slug) }}" class="btn btn-outline-dark btn-sm">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
