@extends('layouts.bsstartup')
@section('title')
    Welcome Home
@endsection

@section('content')
<div class="row bg-success">
    <marquee class="text-light">Welcome To My Kfueit Collaboration Community, The Need Of Every Student</marquee>
</div>
    <div class="container-fluid d-none d-sm-block shadow-lg p-3 bg-white "
        style="position: sticky; top:0%; background-color:rgb(253, 65, 102)">
        <div class="row">
            <div class=" col- col-sm-4 col-md-3 ">
                <div class="row h-100 d-flex p-0 ">
                    <div class="col-sm-4  p-0 ">
                        <a href="">Home</a>
                    </div>
                    <div class=" col-sm-4  p-0">
                        <a href="{{ route('user.contactus') }}">Contact</a>
                    </div>
                    <div class="col-sm-4  p-0">
                        <a href="{{ route('user.about') }}">About</a>
                    </div>
                </div>
            </div>
            <div class=" col- col-sm-5 col-md-6  p-0 m-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class=" col- col-sm-3 col-md-3  d-flex justify-content-end">
                <a class="btn btn-primary mx-2 " href="{{ route('login') }}" role="button">Login</a>
                <a class="btn btn-primary  " href="{{route('getregister')}}" role="button">SignUp</a>

            </div>
        </div>
    </div>

    <div class="container-fluid  d-block d-sm-none">
        <div class="row">
            extra small
        </div>
    </div>







    <div style="height: 20px"></div>
    <div class="container-fluid  cover-img">
        <div class="row " style="height: 100px"> </div>
        <div class="row">
            <div class="col-6  d-flex justify-content-center">
                <div class="box-left shadow"
                    style="height: 300px; background-color:rgb(255, 255, 255);width:80%; border-radius:30px   0px 30px 0px;">
                    <div class="icon-left  d-flex justify-content-center" style="height: 100px; widht:30px;">
                        <i class="bi bi-search" style="font-size:70px; color:crimson;"></i>

                    </div>
                    <div class=" d-flex justify-content-center" style="height: 80%;">
                        <p class="shadow d-flex justify-content-center align-items-center"
                            style=" background-color: whitesmoke; width: 100%;  letter-spacing: 2px; text-align: justify;  line-height: 1.6; padding:5px; border-radius:0px 0px 30px 0px; ">
                            Find The Best Answers To You Technical Questions And Help To Others With Answers Here Is The Main Goal Of KCC
                         
                        </p>
                           
                    </div>
                   
                </div>
            </div>
            <div class="col-6  d-flex justify-content-center">
                <div class="box-right shadow "
                    style="height: 300px; background-color:rgb(255, 255, 255);width:80%; border-radius:30px   0px 30px 0px;">
                    <div class="icon-left  d-flex justify-content-center" style="height: 100px; widht:30px;">
                        <i class="bi bi-lock" style="font-size:70px; color:crimson;"></i>

                    </div>
                    <div class=" d-flex justify-content-center" style="height: 80%;">
                        <p class=" shadow d-flex justify-content-center align-items-center"
                            style=" background-color:whitesmoke; width: 100%;  letter-spacing: 2px; text-align: justify;  line-height: 1.6; padding:5px; border-radius:0px 0px 30px 0px">
                            Want A Private Space For You Technical Knowledge? Kcc Will Help To Create Such Space Of Abstraction And Privacy
                        </p>
                    </div>
                </div>
            </div>
            <div class="row  m-auto" style="height: 200px"> </div>
        </div>
    </div>
<div class="row" style="height: 50px;"></div>
<style>
    .glow {
  
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>

    <div class="row  m-auto" style="height: 200px">
        <div class="d-flex justify-content-center">
            <h1 class=" d-flex justify-content-center mt-4 w-50">KCC:: <span class="glow" id="text-switcher" value="0" style="color: yellow"></span></h1>
        </div>
    </div>
    <div class="row" style="height: 30px;">

    </div>
    <div class="container">
        <div class="row" style="height: 100px">
            <div class="col-3 bg-info" style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316425__340.jpg')">
                <div class="p-1 ">
                    <div class="col-md-3">
                        <h1 class="text-light" id="count1" class="display-4"></h1>
                    </div>
                    <h4 class="text-light d-flex justify-content-center align-items-center">Number of Answers </h4>
                    <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                </div>
            </div>
            <div class="col-3 bg-warning" style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316425__340.jpg')">
                <div class="p-1 ">
                    <div class="col-md-3">
                        <h1 class="text-light" id="count2" class="display-4"></h1>
                    </div>
                    <h4 class=" text-light d-flex justify-content-center align-items-center">Number of Questions </h4>
                    <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                </div>
            </div>
            <div class="col-3 bg-success" style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316425__340.jpg')">
                <div class="col-md-3">
                    <h1 class="text-light" id="count3" class="display-4"></h1>
                </div>
                <div class="p-1 ">
                    <h4 class=" text-light d-flex justify-content-center align-items-center">Monthly Visitors </h4>
                    <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                </div>
            </div>
            <div class="col-3 bg-danger" style="background-image: url('https://cdn.pixabay.com/photo/2014/04/05/11/38/abstract-316425__340.jpg')">
                <div class="col-md-4">
                    <h1 class="text-light" id="count4" class="display-4"></h1>
                </div>
                <div class="p-1 ">
                    <h4 class="d-flex justify-content-center align-items-center text-light" >Active Users </h4>
                    <p class="text-light d-flex justify-content-center align-items-center">To MyKcc</p>
                </div>
            </div>
        </div>
    </div>
<div class="row" style="height: 50px;"></div>

<div class="container-fluid">
    <div class="row" style="" >
        <div class="  col-12" style="height: 1280px;margin: 0px; padding:0px;">
         <img src="{{asset('/images/banner.png')}}" alt="" style="height: 100%; width:100%;">
        </div>
    </div>
</div>


    <div style="height: 300px"></div>
    <div class=" d-none d-md-block">
        <div class="row m-auto " id="footer">

            <div class="col-3 d-none d-md-block m-auto  " style="height: 400px; border: 3px solid black;">
                <div>
                    <p class="d-flex justify-content-center darkgray ">Exclusive Services </p>
                </div>
                <div style="height: 40px;">

                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 2</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
            </div>

            <div class="col-3 d-none d-md-block m-auto" style="height: 400px; border: 3px solid black;">
                <div>
                    <p class="d-flex justify-content-center darkgray">Need Help </p>
                </div>
                <!-- Spacer Started  -->
                <div style="height: 40px;">
                </div>
                <!-- Spacer Started -->
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 2</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
            </div>

            <div class="col-3 d-none d-md-block m-auto" style="height: 400px; border: 3px solid black;">
                <div>
                    <p class="d-flex justify-content-center darkgray">Find Us On</p>
                </div>
                <!-- Spacer Started  -->
                <div style="height: 40px;">
                </div>
                <!-- Spacer Started  -->
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 2</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
            </div>

            <div class="col-3 d-none d-md-block m-auto" style="height: 400px; border: 3px solid black; ">
                <div>
                    <p class="d-flex justify-content-center darkgray">The Company </p>
                </div>
                <!-- Spacer Started -->
                <div style="height: 40px;">
                </div>
                <!-- Spacer Started -->
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 2</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>
                <div>
                    <p class="d-flex justify-content-center white">Lorem ipsum sit 3</p>
                </div>

                <div>
                    <p class="d-flex justify-content-center darkgray">For Subscription</p>
                </div>
                <!-- Subscription Form  -->
                <form action="index.html" method="post" class="d-flex justify-content-end">
                    <input type="email" id="subscription-input" class="form-control w-75 "
                        aria-describedby="passwordHelpBlock" placeholder="Email Here">
                    <button id="subscription-btn"><i class="fa-solid fa-angle-right darkgray"></i></button>
                </form>
                <!-- Subscription Form ended  -->
            </div>

        </div>
    </div>
    <!-- Footer has Ended For large Devices -->


    <!--Footer Accordion for small devices with inline styling  -->

    <div class="d-block d-md-none" style="height: 300px; border: 15px solid white;">

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item bg-dark">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed bg-secondary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <p class="d-flex justify-content-center darkgray ">Exclusive Services </p>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                    <div class="accordion-body">
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                    <div class="accordion-body">
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-dark">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed bg-secondary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <p class="d-flex justify-content-center darkgray ">Need Help </p>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                    <div class="accordion-body">
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                    <div class="accordion-body">
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>>
                </div>

                <div class="accordion-item bg-dark ">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed bg-secondary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <p class="d-flex justify-content-center darkgray ">Find Us On</p>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="#">Lorem, ipsum dolor.</a>
                        </div>
                        <div class="accordion-body">
                            <a href="#">Lorem, ipsum dolor.</a>
                        </div>
                        <div class="accordion-body">
                            <a href="#">Lorem, ipsum dolor.</a>
                        </div>>
                    </div>
                </div>
                <div class="accordion-item bg-dark">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed bg-secondary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            <p class="d-flex justify-content-center darkgray ">The Company</p>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="#">Lorem, ipsum dolor.</a>
                        </div>
                        <div class="accordion-body">
                            <a href="#">Lorem, ipsum dolor.</a>
                        </div>
                        <div class="accordion-body">
                            <!-- Subscription Form  -->
                            <form action="index.html" method="post" class="d-flex justify-content-start">
                                <input type="email" id="subscription-input" class="form-control w-100"
                                    aria-describedby="passwordHelpBlock" placeholder="Email Here">
                                <button id="subscription-btn "><i class="fa-solid fa-angle-right "></i></button>
                            </form>
                            <!-- Subscription Form ended -->
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Accordion for small screen with inline styling -->

            <style>
                .cover-img {
                    background-image: url('https://cdn.pixabay.com/photo/2015/12/23/20/20/wallpaper-1106135__340.jpg');
                    background-position: center;
                    background-origin: border-box;

                }

                .box-left,
                .box-right {
                    background-image: url('https://cdn.pixabay.com/photo/2017/10/05/09/37/equalizer-2818803__340.jpg');
                    background-position: center;
                    background-origin: border-box;
                }
               
            </style>

            <script>
                $(document).ready(function() {
                    $(".flip").click(function() {
                        $(".toggle").slideToggle();
                    });
                });
            </script>
        @endsection
