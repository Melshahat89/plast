<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    {{ Html::style('css/sweetalert.css') }}

    {{ Html::style('website/css/custom.css') }}
    <link rel="shortcut icon" href="{{ asset('website/images') }}/logo.png" type="image/png">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    @stack('css')
    @stack('schema')
</head>
<body>

<!-- ✅ القائمة -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('website/images') }}/logo.png" alt="Plast Logo" style="height: 40px; background-color: white; border-radius: 5px;" class="me-2">
            <span>المصرية الدولية بلاست </span>
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">الرئيسية</a></li>
                <!-- ✅ القائمة المنسدلة داخل الـ ul -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        المنتجات
                    </a>
                    <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">
                        @foreach(Categories() as $category)
                            <li>
                                <a class="dropdown-item" href="{{ url('category/' . $category->id) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
{{--                <li class="nav-item"><a class="nav-link" href="#">المعرض</a></li>--}}
                <li class="nav-item"><a class="nav-link" href="{{url('news')}}">أخبارنا</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">اتصل بنا</a></li>


            </ul>
        </div>
    </div>
</nav>

@include(layoutContent('website'))





<!-- ✅ الفوتر -->
<!-- 🧱 الفوتر -->
<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>عن المصنع</h5>
                <p>نحن متخصصون في تصنيع العبوات البلاستيكية بجودة عالية وخدمة متميزة للمصانع والمطاعم.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>روابط سريعة</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">الرئيسية</a></li>
                    <li><a href="#" class="text-white text-decoration-none">منتجاتنا</a></li>
                    <li><a href="#" class="text-white text-decoration-none">خدماتنا</a></li>
                    <li><a href="#" class="text-white text-decoration-none">اتصل بنا</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5>تواصل معنا</h5>
                <p>📞 0100-123-4567</p>
                <p>📧 info@factory.com</p>
                <p>📍 6 أكتوبر، الجيزة، مصر</p>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a href="https://www.facebook.com/YourPage" target="_blank" class="social-icon facebook" title="فيسبوك">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/YourProfile" target="_blank" class="social-icon instagram" title="انستجرام">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/YourChannel" target="_blank" class="social-icon youtube" title="يوتيوب">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://wa.me/201001234567" target="_blank" class="social-icon whatsapp" title="واتساب مباشر">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <hr class="bg-light">
        <div class="container text-center">
            <p class="mb-1">جميع الحقوق محفوظة &copy; 2025 مصنع العبوات البلاستيكية</p>
            <p class="mb-0">تم التطوير بواسطة
                <a href="https://softwep.com" target="_blank" rel="noopener" style="text-decoration: none; color: #d00;">
                    Softwep
                </a>
            </p>
        </div>
    </div>
</footer>
<!-- ✅ أيقونات التواصل الثابتة -->
<div class="fixed-contact-icons">
    <a href="tel:01018115715" class="contact-icon phone" title="اتصل بنا">
        <i class="fa fa-phone"></i>
    </a>
    <a href="https://wa.me/201018115715" class="contact-icon whatsapp" title="واتساب مباشر" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
{{ Html::script('js/sweetalert.min.js') }}
<!-- ✅ سكربتات Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
