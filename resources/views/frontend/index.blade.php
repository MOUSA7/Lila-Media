
@extends('layouts.front')
<?php $web = \App\Models\Websit::first();?>
@section('content')
    @section('container')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-xs-12 offset-lg-1 of text-white mt-5 ">
                    <?php $web = \App\Models\Websit::first();?>

                    <h1 class="text-white wow fadeInUp animated" data-wow-delay="0.5s">{{$web->slider_tile}}</h1>
                    <p class="text-white mt-4 wow fadeInUp animated" data-wow-delay="0.8s">{{$web->slider_description}}</p>
                    <a href="#" class="btn btn-primary mt-4 wow fadeInDown animated" data-wow-delay="1.2s">اطلب خدمتك</a>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 mt-3 ">
                    <div class="slide-photowow wow fadeInUp animated" data-wow-delay="0.8s">

                        <img class="img-fluid" src="{{asset('assets/front/img/blog-hero.png')}}"/>

                    </div>
                </div>
            </div>
        </div>
    @endsection
    <section class="about p-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="features-img wow fadeInLeft animated" data-wow-delay="0.5s">
                        <img class=" img-fluid" src="{{asset('assets/front/img/illustration1.png')}}"/>
                    </div>

                </div>
                <div class="col-lg-5">
                    <h2 class="mt-5 wow fadeInRight animated" data-wow-delay="0.8s">{{$web->service_tile}}ً</h2>
                    <p class="mt-5 wow fadeInDown animated">{{$web->service_description}}</p>
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-12 s-title text-center wow fadeInDown animated">
                    <h6 class="color1">خدماتنا</h6>
                    <h2>ما نبدع به</h2>
                </div>
                @foreach(\App\Models\Service::all() as $service)
                    <div class="col-lg-3  mt-5">
                        <div class="service-item wow fadeInUp animated " data-wow-delay="0.2s">
                            <div class="service-icon">
                                <img src="{{asset('storage/'.$service->image)}}" height="64" width="64"/>
                            </div>
                            <h3 class="mb-2 mt-3">{{$service->name}}</h3>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="portfolio gry-bg p-70">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 s-title text-center wow fadeInDown animated" data-wow-delay="0.2s">
                    <h6 class="color1">أعمالنا</h6>
                    <h2>من ابداع فريقنا</h2>
                    <p> نص خاص للعرض نص تجريبي لتفاصيل العنوان يكتب هنا نبذة عن السكشن الخاص
                        بالعرض نص تجريبى يكتب هنا</p>
                </div>
                <div class="col-lg-12">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter" data-filter=".app, .card, .icon, .logo, .web">الكل</span></li>
                        <li><span class="filter" data-filter=".app">جرافيك ديزاين</span></li>
                        <li><span class="filter" data-filter=".card">المواقع الالكترونية</span></li>
                        <li><span class="filter" data-filter=".icon">الشعارات</span></li>
                        <li><span class="filter" data-filter=".logo">سوشيال ميديا</span></li>
                        <li><span class="filter" data-filter=".web">موشن جرافيك</span></li>
                    </ul>
                    <div id="portfoliolist">
                        @foreach(\App\Models\Project::all() as $project)
                            <div class="portfolio logo" data-cat="logo wow fadeInup animated" data-wow-delay="1.6s">
                                <div class="label">

                                    <div class="label-text">
                                        <h3>
                                            <a class="text-title">{{$project->title}}</a>
                                        </h3>
                                        <span class="text-category">{{$project->service->name}}</span>
                                    </div>
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
                <div class="view-more mt-5 wow fadeInDown animated" data-wow-delay="1s">
                    <a class="btn btn-primary fw-bold">المزيد من الاعمال</a>
                </div>
            </div>
        </div>
    </section>
    <section class="steps p-70">
        <div class="steps-s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 wow fadeInup animated" data-wow-delay="0.2s">
                        <span class="color1">خطوات العمل</span>
                        <h2 class="text-white">كيــف نعمــل لضمــان
                            نجــاح عمــلاءنا</h2>
                    </div>
                    @foreach(\App\Models\WorkStep::all() as $work)
                        <div class="col-lg-3 mb-4">
                            <div class="steps-item wow fadeInup animated" data-wow-delay="0.5s">
                                <div class="step-point-b"></div>
                                <h5 class="text-white">{{$work->title}}</h5>
                                <p class="text-white">{{$work->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr class="hr-strps">
                <div class="row">
                    @foreach(\App\Models\WorkStep::latest()->take(2) as $work)
                        <div class="col-lg-3 mt-4">
                            <div class="steps-item wow fadeInup animated" data-wow-delay="1s">
                                <div class="step-point"></div>
                                <h5 class="text-white">{{$work->title}}</h5>
                                <p class="text-white">{{$work->description}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-4 offset-lg-1 mt-4 wow fadeInup animated" data-wow-delay="1.3s">
                        <p class="text-white"> نص خاص للعرض نص تجريبي لتفاصيل العنوان يكتب هنا نبذة
                            عن السكشن  بالعرض نص تجريبى يكتب هنا</p>
                        <a class="sc_item_button" href="#">
            <span class="sr-button-icon color1">
                <i class="bi bi-arrow-left-circle-fill"></i>
            </span>
                            <span class="sr-button-text text-white">
                اطلب خدمتك الان
            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-70 blog">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 s-title mb-5">
                    <div class="title wow fadeInDown animated" data-wow-delay="0.2s">
                        <h6 class="color1">مقالات</h6>
                        <h2> مقالات قد تهمك</h2>
                        <p> نص خاص للعرض نص تجريبي لتفاصيل العنوان يكتب هنا نبذة عن السكشن الخاص
                            بالعرض نص تجريبى يكتب هنا</p>
                    </div>
                    <div class="more wow fadeInDown animated" data-wow-delay="0.3s">
                        <a class="btn btn-primary" href="#">عرض المزيد</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="article_item mb-5 wow fadeInRight animated" data-wow-delay="0.4s">
                        <div class="article_image">
                            <img class="img-fluid" src="{{asset('assets/front/img/photo1.jpg')}}" />
                        </div>
                        <div class="article_caption">
                            <div class="article_info">
                        <span class="d-flex align-items-center">
                    <time class="article_time" datetime="2021-12-10T13:24">
                    08 ديسمبر 2021
                    </time>
                  </span>

                            </div>
                            <h5 class="article_title mt-3">
                                <a href="#">
                                    عنوان المقال يكتب هنا نص تجريبي
                                    لعنوان المقال يكتب هنا
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="article_item mb-5 wow fadeInRight animated" data-wow-delay="0.6s">
                        <div class="article_image">
                            <img class="img-fluid" src="{{asset('assets/front/img/photo2.jpg')}}" />
                        </div>
                        <div class="article_caption">
                            <div class="article_info">
                        <span class="d-flex align-items-center">
                    <time class="article_time" datetime="2021-12-10T13:24">
                    08 ديسمبر 2021
                    </time>
                  </span>

                            </div>
                            <h5 class="article_title mt-3">
                                <a href="#">
                                    عنوان المقال يكتب هنا نص تجريبي
                                    لعنوان المقال يكتب هنا
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="article_item mb-5 wow fadeInRight animated" data-wow-delay="0.8s">
                        <div class="article_image">
                            <img class="img-fluid" src="{{asset('assets/front/img/photo3.jpg')}}" />
                        </div>
                        <div class="article_caption">
                            <div class="article_info">
                        <span class="d-flex align-items-center">
                    <time class="article_time" datetime="2021-12-10T13:24">
                    08 ديسمبر 2021
                    </time>
                  </span>

                            </div>
                            <h5 class="article_title mt-3">
                                <a href="#">
                                    عنوان المقال يكتب هنا نص تجريبي
                                    لعنوان المقال يكتب هنا
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-2">
                    <a href="#" class="partners wow fadeInRight animated" data-wow-delay="0.2s">
                        <img class="img-fluid" src="{{asset('assets/front/img/client-2.png')}}" height="37" width="185"/>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="partners wow fadeInRight animated" data-wow-delay="0.4s">
                        <img class="img-fluid" src="{{asset('assets/front/img/client-3.png')}}" height="37" width="185"/>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="partners wow fadeInRight animated" data-wow-delay="0.6s">
                        <img class="img-fluid" src="{{asset('assets/front/img/client-5.png')}}" height="37" width="185"/>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="partners wow fadeInRight animated" data-wow-delay="0.8s">
                        <img class="img-fluid" src="{{asset('assets/front/img/client-6.png')}}" height="37" width="185"/>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="partners wow fadeInRight animated" data-wow-delay="0.9s">
                        <img class="img-fluid" src="{{asset('assets/front/img/client-6.png')}}" height="37" width="185"/>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="partners wow fadeInRight animated" data-wow-delay="1s">
                        <img class="img-fluid" src="{{asset('assets/front/img/client-5.png')}}" height="37" width="185"/>
                    </a>
                </div>
            </div>
        </div>

    </section>
    @endsection
