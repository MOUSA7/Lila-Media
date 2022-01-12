@extends('layouts.front')
<?php $web = \App\Models\Websit::first();?>

@section('content')

            @section('container')
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content">
                                <h1 class="text-white">معلومات عن الشركة</h1>
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


<section class="about p-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="features-img wow fadeInLeft animated" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{asset('assets/front/img/blog-hero.png')}}"/>
                </div>

            </div>
            <div class="col-lg-5">
                <h2 class="mt-5 wow fadeInRight animated" data-wow-delay="0.8s"> نحن نجعل لعملك نجاحاً</h2>
                <p class="mt-5 wow fadeInDown animated">
                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن  يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
            </div>
        </div>
        <div class="row team-row p-70">
            <div class=" col-lg-12 s-title text-center wow fadeInDown animated">
                <h6 class="color1">فريق العمل</h6>
                <h2>فريق عمل الشركة</h2>
            </div>
            <?php $teams = \App\Models\Team::all(); ?>

            @foreach($teams as $team)
            <div class="col-md-3 col-sm-6 team-wrap">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('storage/'.$team->image)}}" alt="">
                        <div class="overlay">
                            <div class="team-details text-center">
                                <p>
                                    مبدع مجال التصميم والافكار الابداعية
                                </p>
                                <div class="socials mt-20">
                                    <a href="#">
                                        <i class="bi bi-facebook"></i>
                                        </a>
                                    <a href="#">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="team-title">{{$team->name}}</h6>
                    <span>{{$team->position}}</span>
                </div>
            </div>
            <!-- end team member -->
            @endforeach
        </div>
    </div>
</section>

@endsection
