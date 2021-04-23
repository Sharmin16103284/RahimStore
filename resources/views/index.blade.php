<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>{{$titleLists->title}}</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    

</head>
<body>

    <!-- header -->
  
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        {{-- <h1> <img style="height:45px; width:55px" src="{{asset($titleLists->image)}}" alt=""> </h1> --}}
                        <h1><span>U</span>nitech <span>L</span>abel</h1> 
                    </a>
                </div>

                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>

                    <ul>
                        <li><a href="#hero" data-after="Home">Home</a></li>
                        <li><a href="#service" data-after="Services">Services</a></li>
                        <li><a href="#project" data-after="Projects">Projects</a></li>
                        <li><a href="#about" data-after="About">About</a></li>
                        <li><a href="#contact" data-after="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- end header -->

    <!--first section hero-->

    <section id="hero" style="background-image: url({{asset($banners->image)}})">
        <div class="hero container">
            <div>
                <h1>{{$banners->title1}} <span></span></h1>
                <h1>{{$banners->title2}} <span></span></h1>
                <h1>{{$banners->title3}} <span></span></h1>
                <a href="#project" type="button" class="cta">Projects</a>
            </div>
        </div>
    </section>

    <!--end first section hero-->

    <!--service section-->
    <section id="service">
        <div class="service container">
            <div class="service-top">
                <h1 class="section-title">Our <span>Services</span> </h1>
                <p>{{$serviceTexts->details}}</p>
            </div>

            <div class="service-bottom">

                @foreach ($serviceList as $serviceLis)


                <div class="service-item" style="background-image: url({{asset($serviceLis->image)}})">
                    <div class="icon">
                        <img src="https://img.icons8.com/bubbles/50/000000/services.png"/>
                    </div>
                    <h2>{{$serviceLis->title}}</h2>
                    <p>{{$serviceLis->description}}</p>
                </div>

                @endforeach
               
            </div>
        </div>
    </section>
    <!--end service section-->

    <!-- project section -->

    <section id="project">
        <div class="project container">
            <div class="project-header">
                <h1 class="section-title">Recent <span>Projects</span></h1>
            </div> 

            <div class="all-project">

                @foreach ($projectList as $projectLis)
                <div class="project-item">
                    <div class="project-info">
                        <h1>{{$projectLis->headline}}</h1><br>
                        <h2>{{$projectLis->title}}</h2><br>
                        <p>{{$projectLis->description}}</p>
                    </div>

                    <div class="project-image">
                        <img src="{{asset($projectLis->image)}}" alt="">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- project section -->

    <!-- about section -->

    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-image">
                    <img src="{{asset($aboutLists->image)}}" alt="">
                </div>
            </div>

            <div class="col-right">
                <h1 class="section-title">About <span>Us</span></h1>
                <h2>{{$aboutLists->name}}</h2>
                <p>{{$aboutLists->description}}</p>

                <a class="cta" href="#service">Our Services</a>
            </div>
        </div>
    </section>

    <!-- end of about section -->

    <!-- contct section -->

    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="section-title">Contact <span>info</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>{{$contactLists->phone1}}</h2>
                        <h2>{{$contactLists->phone2}}</h2>
                    </div>
                </div>
                <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/email.png"/></div>
                        <div class="contact-info">
                            <h1>Email</h1>
                            <h2>{{$contactLists->email}}</h2>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/address.png"/></div>
                        <div class="contact-info">
                            <h1>Address</h1>
                            <h2>{{$contactLists->address}}</h2>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- footer section -->

    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><span>U</span>nitch <span>L</span>abel</h1> <br>

                <div class="social-icon">
                    <div class="social-item">
                        <a href="{{$socialLists->facebook}}" target="blank"><img src="https://img.icons8.com/bubbles/200/000000/facebook-new.png"/></a>
                    </div>
                    <div class="social-item">
                        <a href="{{$socialLists->linkedin}}" target="blank"><img src="https://img.icons8.com/bubbles/200/000000/linkedin.png"/></a>
                    </div>
                    <div class="social-item">
                        <a href="{{$socialLists->twitter}}" target="blank"><img src="https://img.icons8.com/bubbles/200/000000/twitter.png"/></a>
                    </div>
                    <div class="social-item">
                        <a href="{{$socialLists->github}}" target="blank"><img src="https://img.icons8.com/bubbles/200/000000/github.png"/></a>
                    </div>
                </div>
                <p>Copyright © 2021 {{$footerLists->footer}}. All rights reserved</p>
            </div>
        </div>
    </section>

    <!-- end footer section -->

    <script src="{{asset('app.js')}}"></script>
</body>
</html>