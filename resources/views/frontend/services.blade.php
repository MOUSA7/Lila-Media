@extends('layouts.front')
<?php $web = \App\Models\Websit::first();?>
<style>
    .list-unstyled {
        padding-right: 0;
        padding-left: initial;
    }
    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }
    .ul li{
        position: relative;
    }
    .details-works li i {
        position: absolute;
        right: 0;
        top: 0px;
        font-size: 20px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        background-color: #2dbe60;
        padding: 5px 19px;
        color: #fff;
        width: 54px;
        height: 51px;
        line-height: 43px;
        text-align: center;
    }
</style>
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
            <?php $project = \App\Models\Project::first()?>

            <div class="col-lg-5 details-works">
                <h3>تطبيق زيتونة</h3>
                <ul class="list-unstyled">
                    <li class="d-flex">
                        <i class="fa fa-calendar " aria-hidden="true"></i>
                        <p>&nbsp;&nbsp;&nbsp;أغسطس 14, 2018</p>
                    </li>

                    <br>
                    <li class="d-flex">
                        <i class="fa fa-calendar d-flex" aria-hidden="true"></i>
                        <p>&nbsp;&nbsp;&nbsp;أغسطس 14, 2018</p>
                    </li>

                    <br>
                    <li class="d-flex">
                        <i class="fa fa-calendar d-flex" aria-hidden="true"></i>
                        <p>&nbsp;&nbsp;&nbsp;أغسطس 14, 2018</p>
                    </li>

                    <br>
                    <li class="d-flex">
                        <i class="fa fa-calendar d-flex" aria-hidden="true"></i>
                        <p>&nbsp;&nbsp;&nbsp;أغسطس 14, 2018</p>
                    </li>


                </ul>
            </div>
            <div class="col-lg-6">
                <div class="features-img wow fadeInLeft animated" data-wow-delay="0.5s">
                    <img class="img-thumbnail" src="{{asset('storage/'.$project->main_image)}}" style="max-width: 115% !important;"/>
                </div>

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
