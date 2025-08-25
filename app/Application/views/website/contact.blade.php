@extends(layoutExtend('website'))

@push('css')
    <style>
        .contact-section {
            padding: 60px 0;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
        }
        .contact-info h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }
        .contact-info p {
            margin-bottom: 10px;
        }
        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
@endpush

@section('content')
    <section class="contact-section">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">📬 تواصل معنا</h2>
            <div class="row g-4">
                {{-- بيانات التواصل --}}
                <div class="col-lg-4">
                    <div class="contact-info shadow-sm">
                        <h5>📍 العنوان</h5>
                        <p>مدينة الصالحيه الجديده المنقطه الصناعية الثانية , Cairo, Egypt</p>

                        <h5>📞 الهاتف</h5>
                        <p><a href="tel:+201001234567">+20 0100-123-4567</a></p>

                        <h5>📧 البريد الإلكتروني</h5>
                        <p><a href="mailto:info@almasriapetplast.com">info@almasriapetplast.com</a></p>

                        <h5>🕒 ساعات العمل</h5>
                        <p>من الأحد إلى الخميس: 9 صباحًا - 5 مساءً</p>
                    </div>
                </div>

                {{-- نموذج التواصل --}}
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="mb-4">📄 أرسل لنا رسالة</h5>
                            <form action="{{ concatenateLangToUrl('contact') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="الاسم" required
                                               value="{{ auth()->check() ? auth()->user()->name : old('name') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" required
                                               value="{{ auth()->check() ? auth()->user()->email : old('email') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" value="{{ old('phone') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" class="form-control" placeholder="الموضوع" required value="{{ old('subject') }}">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" rows="5" class="form-control" placeholder="اكتب رسالتك هنا..." required>{{ old('message') }}</textarea>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary px-4">إرسال</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- سكشن الخريطة --}}
            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="mb-3 fw-bold">🗺 موقعنا على الخريطة</h5>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6616.932670286189!2d31.944713951391243!3d30.62377602148223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f83e51263cadf3%3A0xb938dedd642d5875!2z2KfZhNmF2YbYt9mC2Kkg2KfZhNi12YbYp9i52YrYqdiMINin2YTYtdin2YTYrdmK2Kkg2KfZhNis2K_Zitiv2KnYjCDYp9mE2LjZh9mK2LEg2KfZhNi12K3Ysdin2YjZiSDYp9mE2LXYp9mE2K3ZitipINin2YTYrNiv2YrYr9ip2Iwg2YXYrdin2YHYuNipINin2YTYtNix2YLZitip!5e0!3m2!1sar!2seg!4v1756160487614!5m2!1sar!2seg" width="100%"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
