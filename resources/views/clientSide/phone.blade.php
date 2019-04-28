<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zeek</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.4.0.min.js"
            integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
            crossorigin="anonymous"></script>
</head>

<body>



<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Phone</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <div class="form-a">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group" style="width: 100%">
                        <label for="Type">Keyword</label>
                        <input id="search_bar" style="width: 500px" type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
            </div>

            <div>
                <div id="search_result">



                </div>
            </div>


        </div>
    </div>
</div>


<script>
    var searchResult=document.getElementById('search_result');
    document.getElementById('search_bar').addEventListener('input',function(){
        searchResult.innerHTML="";
        $.ajax({
            url:'{{url('api/getPhone')}}'+"/"+this.value,
            method:'get',
            success:function (data) {
                searchResult.innerHTML="";
                searchResult.innerHTML="";
                $.each(data,function (key,value) {
                    html='<a href="/phone/%id%" class="card my-1"><div class="card-body my-1"><div class="row my-1"><div class="col-sm-2"><img src="%image%" width="100" class="img-fluid"></div><div class="col-sm-10"><p>%name%</p><p>%brand%</p></div></div></div></a>';
                    html=html.replace('%name%',value.description);
                    html=html.replace('%brand%',value.name);
                    html=html.replace('%image%','{{asset('images')}}'+"/"+value.cover_image);
                    html=html.replace('%id%',value.id);
                    searchResult.insertAdjacentHTML('beforeend',html);
                })

            }
        })
    })
</script>
<!--/ Form Search End /-->

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="{{asset('/')}}">Zeek<span class="color-b">Labs</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{asset('/')}}">Home</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/contact')}}">Contact</a>
                </li>
                @if(!Auth::user())

                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/register')}}">Register</a>
                    </li>

                @endif

                @if(Auth::user())

                    <li class="nav-item dropdown">
                        <a class="nav-link" style="margin-right: 10px" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            {!! Auth::user()->name !!}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Account</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-envelope-o"></i> Messages
                                <span class="badge badge-success">42</span>
                            </a>
                            <div class="dropdown-header text-center">
                                <strong>Settings</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user"></i> Profile</a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-wrench"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-shield"></i> Lock Account</a>
                            <a class="dropdown-item" href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-lock"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endif

            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
    </div>
</nav>
<!--/ Nav End /-->

<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">

        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset('img/slide-2.jpg')}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">2019 </span> Samsung
                                        <br>S10</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">Starting From | $ 400</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset('img/slide-1.jpg')}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">2019 </span> Apple
                                        <br> Iphone X</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">Starting From | $ 300</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset('img/slide-3.jpg')}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">2019 </span> Samsung
                                        <br>Galaxy Fold</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">Starting From | $ 400</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-10">
            <div class="Heading1" style="text-align:left; width:604px; margin-top:12px">
                <h2 class="display-4" >{{$device[0]->description}}</h2>

                <table class="specs" class="table table-bordered" border="0" cellpadding="0" cellspacing="0">
                    <tbody>


                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="6" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Build</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">OS</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->os}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">UI</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->ui}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Dimensions</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->dimensions}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Weight</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->weight}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">SIM</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->weight}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Colors</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">{{$device[0]->color}}&nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="3" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Frequency</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">2G Band</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->twog}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">3G Band</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->threeg}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">4G Band</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">{{$device[0]->forurg}}&nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="3" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Processor</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">CPU</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->cpu}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Chipset</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->chipset}}&nbsp;</td>
                    </tr>


                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="4" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Display</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Technology</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->display_technology}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border text-info">Size</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->screen_szie}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border text-info">Resolution</th>
                        <td colspan="2" class="fasla specs-value bottom-border">QHD display&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section text-info">Extra Features</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">
                            {{$device[0]->extra_feature}}
                            &nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="2" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Memory</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Built-in</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->built_in_memory}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Card</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">{{$device[0]->sd_card}}&nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="3" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Camera</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Main</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border"> {{$device[0]->main_camera}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Features</th>
                        <td colspan="2" class="fasla specs-value bottom-border">auto focus face detecttion &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Front</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">{{$device[0]->secondary_camera}}&nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="7" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Connectivity</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">WLAN</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->wlan}}                                                  &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Bluetooth</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->bluetooth}}                                &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">GPS</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->gps}}   &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Radio</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->radio}}    &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">USB</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->usb}} &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">NFC</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->nfc}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Data</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">
                            <font color="#000077"><b>GPRS</b></font>,{{$device[0]->data}}&nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="7" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Features</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Sensors</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->sensor}}                                                &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Audio</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            32-bit/384kHz audio, 3.5mm Audio Jack, MP3/eAAC+/WAV/Flac player, XviD/MP4/H.265 player, Speaker Phone                                                &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Browser</th>
                        <td colspan="2" class="fasla specs-value bottom-border">{{$device[0]->browser}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Messaging</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->message}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Games</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            {{$device[0]->game}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Torch</th>
                        <td colspan="2" class="fasla specs-value bottom-border">
                            Yes                                                &nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Extra</th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">
                            {{$device[0]->extra_feature}} &nbsp;</td>
                    </tr>

                    <!--Main Category-->
                    <tr class="RowBG2">
                        <td rowspan="2" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section text-info">Battery</td>
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Capacity</th>
                        <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$device[0]->battery_capacity}}&nbsp;</td>
                    </tr>


                    <tr class="RowBG1">
                        <th align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section"></th>
                        <td colspan="2" class="fasla specs-value bottom-border-section">
                            {{$device[0]->battery_detail}}
                            &nbsp;</td>
                    </tr>
                    </tbody>
                </table>

                <table border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid #abc4e8; border-top:none;">
                    <colgroup span="3"></colgroup>
                    <tbody>
                    <tr class="RowBG2">
                        <th rowspan="1" align="left" class="hdngArial bottom-border-section specs-mainHeading text-info" style="width:101px"><h4 class="hdngArial" style="padding:0px; margin:0px; display:inline;">Price</h4></th>
                        <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">{{$device[0]->price}}</strong>
                            &nbsp;</td>
                    </tr>
                    <tr class="RowBG2">
                        <th rowspan="1" align="left" class="hdngArial bottom-border-section specs-mainHeading" style="width:101px">Ratings </th>
                        <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Average Rating is <strong>4.5 stars</strong> - based on <strong>15</strong> user reviews.
                            &nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-2 mt-3">
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->cover_image}}" class="img-fluid" alt="">
            </div>
            <br>
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->image_1}}" class="img-fluid" alt="">
            </div>
            <br>
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->image_2}}" class="img-fluid" alt="">
            </div>
            <br>
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->image_3}}" class="img-fluid" alt="">
            </div>
            <br>
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->image_4}}" class="img-fluid" alt="">
            </div>
            <br>
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->image_5}}" class="img-fluid" alt="">
            </div>
            <br>
            <div class="div">
                <img src="{{url('images/')}}/{{$device[0]->image_6}}" class="img-fluid" alt="">
            </div>


        </div>
    </div>

</div>



<!--/ Agents Star /-->
<section class="section-agents section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Team</h2>
                    </div>
                    <div class="title-link">
                        <a href="agents-grid.html">
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d">
                        <img src="{{asset('img/sohail.jpg')}}" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a class="link-two">Sohail Khan
                                        <br>Lead Developer</a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a">
                                Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                            </p>
                            <div class="info-agents color-a">
                                <p>
                                    <strong>Phone: </strong> +54 356 945234</p>
                                <p>
                                    <strong>Email: </strong> agents@example.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d">
                        <img src="{{asset('img/bilal.jpg')}}" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a class="link-two">Bilal Bin Zahid
                                        <br>Front-End Developer</a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a">
                                Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                            </p>
                            <div class="info-agents color-a">
                                <p>
                                    <strong>Phone: </strong> +54 356 945234</p>
                                <p>
                                    <strong>Email: </strong> agents@example.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d">
                        <img src="{{asset('img/sana.jpg')}}" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a class="link-two">Sana Masood
                                        <br>FullStack Developer</a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a">
                                Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                            </p>
                            <div class="info-agents color-a">
                                <p>
                                    <strong>Phone: </strong> +54 356 945234</p>
                                <p>
                                    <strong>Email: </strong> agents@example.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Agents End /-->


<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">EstateAgency</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                            sed aute irure.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> contact@example.com</li>
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> +54 356 945234</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">The Company</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">International sites</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">China</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Property</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Blog</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; Copyright
                        <span class="color-a">EstateAgency</span> All Rights Reserved.
                    </p>
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/popper/popper.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
