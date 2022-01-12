@extends('layouts.front')
<?php $web = \App\Models\Websit::first();?>

@section('content')

            @section('container')
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-content">
                                <h1 class="text-white">الأعمال التي تقدمها الشركة</h1>
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

<section class="portfolio gry-bg p-70">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 s-title text-center wow fadeInDown animated animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <h6 class="color1">أعمالنا</h6>
                <h2>من ابداع فريقنا</h2>
                <p> نص خاص للعرض نص تجريبي لتفاصيل العنوان يكتب هنا نبذة عن السكشن الخاص
                    بالعرض نص تجريبى يكتب هنا</p>
            </div>
            <div class="col-lg-12">
                <ul id="filters" class="clearfix">
                    <li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">الكل</span></li>
                    <li><span class="filter" data-filter=".app">جرافيك ديزاين</span></li>
                    <li><span class="filter" data-filter=".card">المواقع الالكترونية</span></li>
                    <li><span class="filter" data-filter=".icon">الشعارات</span></li>
                    <li><span class="filter" data-filter=".logo">سوشيال ميديا</span></li>
                    <li><span class="filter" data-filter=".web">موشن جرافيك</span></li>
                </ul>
                <div id="portfoliolist">
                    @foreach(\App\Models\Project::all() as $project)
                    <div class="portfolio logo" data-cat="logo wow fadeInup animated" data-wow-delay="0.2s" style="display: inline-block;" data-bound="">
                        <div class="label">
                            <div class="label-text">
                                <h3>
                                    <a class="text-title">{{$project->title}}</a>
                                </h3>

                                <span class="text-category">{{$project->service->name}}</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                        <div class="portfolio-wrapper">
                            <div class="category-icon">
                                <img src="{{asset('assets/front/img/icon2.png')}}" height="72" width="72"/>
                            </div>
                            <div class="portfolio-thumb">
                                <img class="img-fluid" src="{{asset('storage/'.$project->main_image)}}"/>

                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>

@endsection
