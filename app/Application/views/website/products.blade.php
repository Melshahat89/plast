@extends(layoutExtend('website'))
@section('title')
    {{ 'المنتجات' .'-'.  'المصرية الدولية بلاست' }}
@endsection



@section('content')



        <section class="py-5 bg-light border-bottom">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">جميع المنتجات حسب الأقسام</h2>


                    <div class="mb-5">
                        <h3 class="fw-bold text-primary mb-3">{{ $category->name }}</h3>
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="{{ large($product->image) }}" alt="{{ $product->name }}" class="card-img-top rounded-top">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                                            <p class="card-text text-muted">{{ $product->shortdescription }}</p>
                                            <p class="text-danger fw-bold">السعر: {{ $product->price }} جنيه</p>
                                            <a
                                                    href="{{ url('product/'. $product->slug) }}"
                                                    class="btn btn-cart w-100">
                                                <i class="bi bi-cart-plus me-2"></i>  تفاصيل
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $products->links('pagination::bootstrap-4') }}
                                </div>

                        </div>
                    </div>
            </div>
        </section>




@endsection
