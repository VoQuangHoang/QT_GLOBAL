@extends('users.master')
<title>About - QT-GlobalGroup</title>
@section('content')

        <style>
            .right {
                width: 274px;
                background-color: #fff;
                float: left;
                border: 1px solid rgb(219, 219, 219);
                box-shadow: 0 3.7px 3.6px rgba(0, 0, 0, 0.014), 0 9.6px 10px rgba(0, 0, 0, 0.03), 0 21.7px 24.1px rgba(0, 0, 0, 0.046), 0 69px 80px rgba(0, 0, 0, 0.06);
            }
            .logo {
                padding: 30px 30px 0;
            }
            .scrollmenu ul {
                width: 150px;
                left: 0;
                overflow: auto;

            }
            .scrollmenu ul li {
                list-style: none;
                font-weight: bold;
                line-height: 40px;
            }
            .scrollmenu a {
                text-decoration: none;
                color: black;
            }
            .scrollmenu a:hover {
                color: blue;
                transition: color 0.1s linear;
            }
        
            /* content*/
            .content-f {
                position: relative;
                background: #e6e5e5;
                padding-left: 0;
                padding-right: 0;
                width: 100%;
            }
            .text-h1 {
                font-family: Roboto;
                text-transform: capitalize;
                letter-spacing: 0;
                font-size: 77px;
                line-height: 77px;
                font-weight: 300;
                color: #efefef!important;
                position: relative;
                bottom: 500px;
                z-index: 1;
            }
            .text-p1 {
                margin-left: 10px;
                color: #7a7a7a!important;
                padding: 5px;
            }
            .text-p2 {
                color: #7a7a7a!important;
                margin-bottom: 100px;
                margin-left: 50%;
            }
            .content-sl {

                color: #3b3b3b!important;
                margin-left: 5%;
                border: 1px solid #04dbbf;
            }
            .conten-sp {
                font-weight: 400;
                font-size: 15px;
                color: #7a7a7a!important;
                margin-left: 30px;
                margin-bottom: 10px;

            }
            .content-li {
                color: #8a8a8a;
            }
            /* product*/
            .card-body {
                background: #e6e5e5;
            }
            .content-b1 {
                padding: 10px;
                margin-left: 70px;
            }
            .cart {
                background: lightseagreen;
                color: #fff;
                font-size: 20px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                padding: 5px;
                width: 100%;
                text-align: center;
                overflow: hidden;
            }
            .fa-cart-plus {
                margin-right: 7px;
            }
            /* the mountains*/
            .content-header {
                height: 300px;
            }
            .content-Tm {
                font-family: sans-serif;
                font-size: 70px;
                text-transform: capitalize;
                margin-top: 100px;
            }
            .text-nho {
                font-size: 13px;
                letter-spacing: 4px;
                margin-left: 530px;
            }
            .cont {
                background: rgb(248, 248, 248);
            }
            .flex-container {
                display: flex;
                flex-direction: row;
                line-height: 30px;
            }
            .flex-item {
                padding: 20px 0 0 60px;
                flex: 50%;
                margin-bottom: 50px;
            }
            @media (max-width: 800px) {
                .flex-container {
                    flex-direction: column;
                }
            }
            .anh-ct:hover {
                cursor: pointer;
            }
            #videokhocoi {
                width: 1920px;
                height: 1080px;
                background-color: black;
                position: absolute;
                position: fixed;
                z-index: 2;
                top: 0;
                opacity: 0.9;
            }
            /* footer*/
           
        </style>
                    <div class="content-f">
                        <div class="content-header">
                            <h1 class="content-Tm text-center font-weight-light">The Mountians</h1>
                            <span class="text-nho text-center">WHERE IT ALL STARTED</span>
                        </div>
                        <div class="cont">
                            <h1 class="text-info ml-5 font-weight-light">Overview</h1>
                            <div class="flex-container">
                                <div class="flex-item">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind texts. Separated they
                                    live in Bookmarksgrove right at the coast of the Semantics, a large language
                                    ocean. A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia. It is a paradisematic country, in which roasted parts of
                                    sentences fly into your mouth. Even the all-powerful Pointing has no control
                                    about the blind texts it is an almost unorthographic life One day however a
                                    small line of blind text by the name of Lorem Ipsum decided to leave for the far
                                    World of Grammar.</div>
                                <div class="flex-item">
                                    She packed her seven versalia, put her initial into the belt and made herself on
                                    the way. When she reached the first hills of the Italic Mountains, she had a
                                    last view back on the skyline of her hometown Bookmarksgrove, the headline of
                                    Alphabet Village and the subline of her own road, the Line Lane. Pityful a
                                    rethoric question ran over her cheek, then she continued her way. On her way she
                                    met a copy.</div>
                                <div class="flex-item">
                                    <b class="text-info">Project</b><br>
                                    Mountains
                                    <br><br>

                                    <b class="text-info">Client</b><br>
                                    Good People<br><br>

                                    <b class="text-info">What We Did</b><br>
                                    UI/UX Design, Video Production
                                </div>
                            </div>
                            <div class="content-mtn  ml-5">
                                <h1 class="text-info font-weight-light">We Delivered An Advert,<br>
                                    Of Individuality, Eccentricity,<br>
                                    Abnormality, And Humors.</h1>
                                <span class="text-muted" style="font-weight: 500;">She packed her seven
                                    versalia, put her initial into the belt and made herself on the way. When she
                                    <br>
                                    reached the first hills of the Italic Mountains, she had a last view back on the
                                    skyline of her hometown<br>
                                    Bookmarksgrove,</span>
                                <img id="anhditm" src="{{asset('image/Capture.PNG')}}" class="img-fluid mt-5 mb-5 anh-ct" width="1180">
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $("#videokhocoi").hide();
                                        $("#anhditm").click(function(){
                                            $("#videokhocoi").show();
                                        });
                                        $("#videokhocoi").click(function(){
                                            $(this).remove();
                                        });
                                    });
                                </script>
                            </div>
                            <div  class="flex-container" style="font-size: 20px;
                            text-align: center;">
                                <div class="flex-item text-left"><a href=""><i class="fas fa-chevron-left mr-3"></i>Previous Project</a></div>
                                <div class="flex-item"><a href=""><i class="fas fa-bars"></i></a></div>
                                <div class="flex-item text-right mr-5"><a href="">Next Project<i class="fas fa-chevron-right ml-3"></i></a></div>
                            </div>
                            <hr>
                            
                        </div>
                    </div>
                </div>

            </div>
            <div id="videokhocoi">
                <iframe
                    style="position: absolute; top: 10%; left: 15%;"
                    width="956"
                    height="538"
                    src="https://www.youtube.com/embed/6oTurM7gESE"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="allowfullscreen"></iframe>
            </div>
            
@endsection
