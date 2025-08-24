@extends(layoutExtend('website'))

@section('content')
    <!-- ✅ سلايدر الصور -->
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach($sliders as $key=>$slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{large($slider->image)}}" class="d-block w-100" alt="عبوات بلاستيكية" />
                    <!-- ✅ عنوان فوق الصورة -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        @if(!empty($slider->description))
                            <p>{{ $slider->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- 🛠️ خدماتنا -->
    <section class="container py-5">
        <h2 class="text-center mb-5">خدماتنا</h2>
        <!-- 🪄 فاصل خط مزخرف -->
        <div class="text-center my-5">
            <hr class="w-25 mx-auto border-3 border-black">
            <i class="bi bi-stars fs-3 text-danger"></i>
        </div>
        <div class="row text-center">

            <!-- خدمة 1 -->
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 shadow-sm rounded h-100">
                    <i class="fas fa-bottle-water fa-4x  mb-3" style="color: #ff0024;"></i>
                    <!--                <i class="fas fa-truck fa-4x" style="color: #004080;"></i>-->

                    <h5 class="mb-3">تصنيع العبوات البلاستيكية</h5>
                    <p>نقوم بتصنيع عبوات عالية الجودة بمقاسات متعددة تناسب الزيوت، العصائر، والمنظفات، باستخدام أحدث تقنيات النفخ والحقن لضمان المتانة والشكل الجذاب.</p>
                </div>
            </div>

            <!-- خدمة 2 -->
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 shadow-sm rounded h-100">
                    <i class="fas fa-truck fa-4x  mb-3" style="color: #ff0024;"></i>
                    <h5 class="mb-3">التوريد للمصانع والشركات</h5>
                    <p>نوفر حلول توريد مرنة وسريعة للمصانع، مع إمكانية تخصيص العبوات حسب الطلب، وضمان الالتزام بالمواعيد وجودة التغليف.</p>
                </div>
            </div>

            <!-- خدمة 3 -->
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 shadow-sm rounded h-100">
                    <i class="fas fa-print fa-4x  mb-3" style="color: #ff0024;"></i>
                    <h5 class="mb-3">تصميم وطباعة العلامات التجارية</h5>
                    <p>نساعدك في إبراز علامتك التجارية من خلال تصميم وطباعة لاصقات احترافية للعبوات، تشمل الشعار والمعلومات التسويقية بشكل جذاب وواضح.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ✅ المنتجات -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">منتجاتنا</h2>
            <!-- 🪄 فاصل خط مزخرف -->
            <div class="text-center my-5">
                <hr class="w-25 mx-auto border-3 border-black">
                <i class="bi bi-stars fs-3 text-danger"></i>
            </div>
            <div class="row g-4">
                <!-- 12 منتج -->
                <!-- يمكنك تكرار هذا البلوك 12 مرة -->
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://www.masterpet.net//upload/files/Products/water-bottles/A-142.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://www.masterpet.net//upload/files/Products/water-bottles/A250.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/jars/A107.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/jars/A041_2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/squeezable/A277.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card product-card shadow-sm">
                        <img src="https://masterpet.net//upload/files/Products/water-bottles/A133-2.jpg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">عبوة بلاستيك </h5>
                            <p class="card-text">السعر:  جنيه</p>
                            <a href="#" class="btn btn-outline-primary">عرض المنتج</a>
                        </div>
                    </div>
                </div>
                <!-- كرر البلوك أعلاه 11 مرة مع تغيير المحتوى -->
            </div>
        </div>
    </section>

    <!-- ✅ الأخبار -->
    <section class="container mb-5">
        <h2 class="text-center mb-4">آخر الأخبار</h2>

        <!-- 🪄 فاصل خط مزخرف -->
        <div class="text-center my-5">
            <hr class="w-25 mx-auto border-3 border-black">
            <i class="bi bi-stars fs-3 text-danger"></i>
        </div>
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- الشريحة الأولى -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bg-white p-3 shadow-sm rounded mb-4">
                                <img src="{{ asset('website/images') }}/504635657_633569639734006_8644161340789870542_n.jpg" class="w-100 mb-3" alt="خبر 1">
                                <h5>خبر رقم 1</h5>
                                <p>تم إطلاق منتج جديد في السوق المصري بجودة عالية وتصميم مبتكر.</p>
                                <a href="#" class="btn btn-sm btn-primary">اقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white p-3 shadow-sm rounded mb-4">
                                <img src="{{ asset('website/images') }}/504635657_633569639734006_8644161340789870542_n.jpg" class="w-100 mb-3" alt="خبر 2">
                                <h5>خبر رقم 2</h5>
                                <p>تم توقيع اتفاقية جديدة مع مصنع زيوت لتوريد عبوات بلاستيكية.</p>
                                <a href="#" class="btn btn-sm btn-primary">اقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white p-3 shadow-sm rounded mb-4">
                                <img src="{{ asset('website/images') }}/504635657_633569639734006_8644161340789870542_n.jpg" class="w-100 mb-3" alt="خبر 3">
                                <h5>خبر رقم 3</h5>
                                <p>افتتاح خط إنتاج جديد لزيادة الطاقة الإنتاجية وتلبية الطلب المحلي.</p>
                                <a href="#" class="btn btn-sm btn-primary">اقرأ المزيد</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- الشريحة الثانية -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bg-white p-3 shadow-sm rounded mb-4">
                                <img src="{{ asset('website/images') }}/504635657_633569639734006_8644161340789870542_n.jpg" class="w-100 mb-3" alt="خبر 4">
                                <h5>خبر رقم 4</h5>
                                <p>إطلاق عبوة عصير جديدة بسعة 500 مل بتصميم عملي وجذاب.</p>
                                <a href="#" class="btn btn-sm btn-primary">اقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white p-3 shadow-sm rounded mb-4">
                                <img src="{{ asset('website/images') }}/504635657_633569639734006_8644161340789870542_n.jpg" class="w-100 mb-3" alt="خبر 5">
                                <h5>خبر رقم 5</h5>
                                <p>تحديثات على موقع الشركة تشمل قسم الطلبات وخدمة العملاء المباشرة.</p>
                                <a href="#" class="btn btn-sm btn-primary">اقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white p-3 shadow-sm rounded mb-4">
                                <img src="{{ asset('website/images') }}/504635657_633569639734006_8644161340789870542_n.jpg" class="w-100 mb-3" alt="خبر 6">
                                <h5>خبر رقم 6</h5>
                                <p>مشاركة الشركة في معرض الصناعات البلاستيكية الدولي بالقاهرة.</p>
                                <a href="#" class="btn btn-sm btn-primary">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- أزرار التنقل -->
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
            </button>
        </div>
    </section>

    <!-- 💬 آراء العملاء -->
    <section class="container mb-5">
        <h2 class="text-center mb-4">آراء العملاء</h2>
        <!-- 🪄 فاصل خط مزخرف -->
        <div class="text-center my-5">
            <hr class="w-25 mx-auto border-3 border-black">
            <i class="bi bi-stars fs-3 text-danger"></i>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 shadow-sm rounded text-center">
                    <img src="https://i.pravatar.cc/100?img=12" class="rounded-circle mb-3" alt="عميل 1">
                    <h5>أ. محمد عبد الله</h5>
                    <p class="text-muted">مدير مشتريات - مصنع تعبئة</p>
                    <p>منتجاتكم ممتازة من حيث الجودة والتغليف، والتوصيل كان سريع جدًا. أنصح بالتعامل معكم بشدة.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 shadow-sm rounded text-center">
                    <img src="https://i.pravatar.cc/100?img=5" class="rounded-circle mb-3" alt="عميل 2">
                    <h5>م. سارة يوسف</h5>
                    <p class="text-muted">مهندسة جودة - شركة أغذية</p>
                    <p>العبوات البلاستيكية عندكم متينة وآمنة، وتم اعتمادها بسهولة في خطوط الإنتاج لدينا.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="bg-white p-4 shadow-sm rounded text-center">
                    <img src="https://i.pravatar.cc/100?img=8" class="rounded-circle mb-3" alt="عميل 3">
                    <h5>أ. كريم حسن</h5>
                    <p class="text-muted">صاحب مطعم عصائر</p>
                    <p>طلبت عبوات مخصصة للعصير وتم تنفيذ التصميم بدقة. شكراً لفريقكم على الاحترافية.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
