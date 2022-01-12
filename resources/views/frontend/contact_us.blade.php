
@extends('layouts.front')
<?php $web = \App\Models\Websit::first();?>

@section('content')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="text-white">معلومات الأتصال</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="#">عن الشركة</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
    <link rel="stylesheet" href="{{asset('assets/front/css/contact-style.css')}}">
<section class="contactus p-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="citem">
                    <div class="citem-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="citem-text">
                        <h3>البريد الالكتروني</h3>
                        <p>info@lilamedia.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="citem">
                    <div class="citem-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="citem-text">
                        <h3>البريد الالكتروني</h3>
                        <p>info@lilamedia.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="citem">
                    <div class="citem-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="citem-text">
                        <h3>البريد الالكتروني</h3>
                        <p>info@lilamedia.com</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="contact-title text-center mb-3 mt-5 ">
                <h2>نرحب بتواصلك معنا</h2>
                <p>اذا كان لديك استفسارات عن خدماتنا يمكنك مراسلتنا من خلال تعبئة الفورم التالي وسيتم المتابعة معك من فريق عملنا</p>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="{{route('view.contact.store')}}">
                        @csrf
                        <div class="col-xs-6 wow animated fadeInup" data-wow-delay=".5s">
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="الاسم" />
                            <input type="email" name="email" id="email" required="required" class="form" placeholder="البريد الالكتروني" />
                            <input type="text" name="subject_title" id="subject_title" required="required" class="form" placeholder="عنوان الموضوع" />
                            <select class="form" name="service_id" placeholder="عنوان الموضوع">
                                @foreach($services as $service)
                                <option value="{{$service->id}}" class="oserv">{{$service->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-xs-6 wow animated fadeInup" data-wow-delay=".5s">
                            <textarea name="message" id="message" class="form textarea"  placeholder="الرسالة"></textarea>
                        </div>

                        <div class="relative fullwidth col-xs-12">

                            <button type="submit" id="submit" name="submit" class="form-btn semibold">ارسال </button>
                        </div>
                        <div class="clear"></div>
                    </form>

                    <div class="mail-message-area">
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>شكرا لتواصلك معنا</strong> تم استلام بريدك الالكتروني وسيتم المتابعة معكم من قبل فريق العمل
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
    @if(Session::has('message'))
    toastr.success("{{session()->get('message')}}", {timeOut: 5000})
    @endif

    });
</script>
@endsection

