@extends('users.master')
<title>About - QT-GlobalGroup</title>
@section('content')

        <style>
            
        
            /* Slideshow container */
            .slideshow-container {
                width: 1124px;
                position: relative;
                margin: 70px auto auto;

            }
            /* Ẩn các slider */
            .mySlides {
                display: none;
            }
            /* Định dạng nội dung Caption */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* định dạng các chấm chuyển đổi các slide */
            .dot {
                cursor: pointer;
                height: 13px;
                width: 13px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }
            /* khi được hover, active đổi màu nền */
            .active,
            .dot:hover {
                background-color: #717171;
            }

            /* Thêm hiệu ứng khi chuyển đổi các slide */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 3s;
                animation-name: fade;
                animation-duration: 3s;
            }

            @-webkit-keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }

            @keyframes fade {
                from {
                    opacity: 0.4;
                }
                to {
                    opacity: 1;
                }
            }
            .ctt {
                width: 100%;
                height: 1000px;
            }
            .middd {
                width: 1124px;
                height: 1000px;
                background-color: #fff;
                margin-left: 60px;

            }
            .midrr {
                width: 682px;
                height: 293px;
                float: left;
            }
            .midll {
                width: 349px;
                height: 293px;
                margin-left: 693px;
                padding-left: 60px;
            }
            .whyr {
                width: 365px;
                height: 345px;
                float: left;
                padding-top: 25px;
            }
            .whyl {
                width: 736px;
                height: 345px;
                margin-left: 386px;
                padding-top: 25px;

            }
            .whyl p {
                font-size: 20px;
            }

            .footer {
                width: 100%;
                display: inline-block;
                height: 184px;
                padding-top: 50px;
                padding-left: 60px;
            }
            .fr {
                width: 393px;
            }
            .fr img {
                padding-bottom: 30px;
            }
            .fr p {
                padding-bottom: 10px;

            }
            .fl {
                width: 219px;
                float: right;
                margin-top: -165px;
                margin-right: 100px;
            }
            .fl p {
                padding-top: 10px;
                padding-bottom: 10px;
                color: #574d4dd1;
                line-height: 25px;
            }
            /*phần slide*/
            body,
            html,
            main {
                width: 100%;
                height: 30%;
                margin: 0;
                padding: 0;
            }

            #carousel {
                position: relative;
                height: 400px;
                top: 50%;
                transform: translateY(-50%);
                overflow: hidden;
            }

            #carousel > div.slideImg {
                position: absolute;
                opacity: 0;
            }

            #carousel > div > img {
                width: 400px;
                transition: width 1s;
            }

            #carousel > div.hideLeft {
                left: 0;
                opacity: 0;
                transition: transform 1s, left 1s, opacity 1s;
                transform: translateY(50%) translateX(-50%);
            }

            #carousel > div.hideLeft > img {
                width: 200px;
            }

            #carousel > div.hideRight {
                left: 100%;
                transition: transform 1s, left 1s, opacity 1s;
                opacity: 0;
                transform: translateY(50%) translateX(-50%);
            }

            #carousel > div.hideRight > img {
                width: 200px;
            }

            #carousel > div.prev {
                z-index: 5;
                left: 30%;
                transform: translateY(50px) translateX(-50%);
                opacity: 1;
                transition: transform 1s, left 1s, opacity 1s;
            }

            #carousel > div.prev > img {
                width: 300px;
            }

            #carousel > div.prevLeftSecond {
                z-index: 4;
                left: 15%;
                transform: translateY(50%) translateX(-50%);
                opacity: 0.7;
                transition: transform 1s, left 1s, opacity 1s;
            }

            #carousel > div.prevLeftSecond > img {
                width: 200px;
            }

            #carousel > div.selected {
                z-index: 10;
                left: 50%;
                transition: transform 1s, left 1s, opacity 1s;
                opacity: 1;
                transform: translateY(0px) translateX(-50%);
            }

            #carousel > div.next {
                z-index: 5;
                left: 70%;
                transition: transform 1s, left 1s, opacity 1s;
                opacity: 1;
                transform: translateY(50px) translateX(-50%);
            }

            #carousel > div.next > img {
                width: 300px;
            }

            #carousel > div.nextRightSecond {
                z-index: 4;
                left: 85%;
                transition: transform 1s, left 1s, opacity 1s;
                transform: translateY(50%) translateX(-50%);
                opacity: 0.7;
            }

            #carousel > div.nextRightSecond > img {
                width: 200px;
            }

            div.positionBtn {
                position: absolute;
                left: 50%;
                top:65%;
                transform: translateX(-50%);
                bottom: 10px;
            }

            #next,
            #prev {
                background: #272727;
                color: #ffffff;
                border: 0;
                font-weight: bold;
                font-size: 22px;
                margin: 0;
                opacity: 0.6;
            }

            #next > span,
            #prev > span {
                width: 100px;
                padding: 15px;
                display: block;
            }

            #prev {
                text-align: right;
                border-radius: 100% 0 0 100%!important;
            }

            #next {
                text-align: left;
                border-radius: 0 100% 100% 0px!important;
            }

            #next:hover,
            #prev:hover {
                opacity: 1;
            }

            #next:focus,
            #prev:focus {
                border: 0;
            }
            .content-text {
                position: relative;
                top: 0;
            }
            .text {
                position: relative;
                text-align: justify;
                font-size: 30px;
                font-weight: 500;
                color: rgb(153, 153, 153);
                font: inherit;
                margin-top: 20px;
            }
            .swiper-container {
                width: 300px;
                height: 300px;
            }

            .swiper-slide {
                background-position: center;
                background-size: cover;
                width: 200px;
                height: 200px;
            }
            .swiper-slide img {
                width: 100%;
                height: 100%;
            }
            .text1 {
                color: #ccffff;
                font-weight: 500;
                padding: 10px;
            }
            /* footer*/
            
        </style>
        <!----js slide-->
        <script>
            const slide = {
                main: null,
                elementImg: null,
                imgSelected: 0,
                nextSlide: function () {
                    if (this.imgSelected != null) {
                        if (this.imgSelected < (this.elementImg.length - 1)) {
                            this.imgSelected++;
                            this.normalizeSlide();
                        }
                    }
                },
                prevSlide: function () {
                    if (this.imgSelected != null) {
                        if (this.imgSelected > 0) {
                            this.imgSelected--;
                            this.normalizeSlide();
                        }
                    }
                },
                normalizeSlide: function () {

                    for (num = 0; num < this.elementImg.length; num++) {
                        this
                            .elementImg[num]
                            .classList
                            .remove(
                                "hideLeft",
                                "prevLeftSecond",
                                "prev",
                                "selected",
                                "next",
                                "nextRightSecond",
                                "hideRight"
                            );
                    }

                    this
                        .elementImg[this.imgSelected]
                        .classList
                        .add("selected");

                    if (this.imgSelected > 2) {
                        this
                            .elementImg[this.imgSelected - 2]
                            .classList
                            .add("hideLeft");
                        this
                            .elementImg[this.imgSelected - 2]
                            .classList
                            .add("prevLeftSecond");
                        this
                            .elementImg[this.imgSelected - 1]
                            .classList
                            .add("prev");
                    } else if (this.imgSelected > 1) {
                        this
                            .elementImg[this.imgSelected - 2]
                            .classList
                            .add("prevLeftSecond");
                        this
                            .elementImg[this.imgSelected - 1]
                            .classList
                            .add("prev");
                    } else if (this.imgSelected > 0) {
                        this
                            .elementImg[this.imgSelected - 1]
                            .classList
                            .add("prev");
                    }

                    if ((this.imgSelected + 3) < this.elementImg.length) {
                        this
                            .elementImg[this.imgSelected + 3]
                            .classList
                            .add("hideRight");
                        this
                            .elementImg[this.imgSelected + 2]
                            .classList
                            .add("nextRightSecond");
                        this
                            .elementImg[this.imgSelected + 1]
                            .classList
                            .add("next");
                    } else if ((this.imgSelected + 2) < this.elementImg.length) {
                        this
                            .elementImg[this.imgSelected + 2]
                            .classList
                            .add("nextRightSecond");
                        this
                            .elementImg[this.imgSelected + 1]
                            .classList
                            .add("next");
                    } else if ((this.imgSelected + 1) < this.elementImg.length) {
                        this
                            .elementImg[this.imgSelected + 1]
                            .classList
                            .add("next");
                    }
                }
            }

            window.onload = () => {

                slide.main = document.getElementById("carousel");
                slide.elementImg = slide
                    .main
                    .getElementsByClassName("slideImg");

                for (num = 0; num < slide.elementImg.length; num++) {
                    slide
                        .elementImg[num]
                        .setAttribute("img-number", num);

                    slide
                        .elementImg[num]
                        .addEventListener("click", (event) => {
                            slide.imgSelected = parseInt(
                                event.target.parentElement.getAttribute("img-number")
                            );
                            slide.normalizeSlide();
                        });

                    if (slide.elementImg[num].classList.contains("selected")) {
                        slide.imgSelected = num;
                    }
                }

                document
                    .getElementById("prev")
                    .addEventListener("click", () => {
                        slide.prevSlide()
                    });
                document
                    .getElementById("next")
                    .addEventListener("click", () => {
                        slide.nextSlide()
                    });

            }
        </script>

    </head>
        
           
                <div class="left">
                    <div class="slideshow-container">
                        <div class="mySlides fade" style="padding-left: 60px;">
                            <img src="{{asset('image/g1.jpeg')}}" style="width:1100px; height: 470px;">
                        </div>
                        <div class="mySlides fade" style="padding-left: 60px;">
                            <img src="{{asset('image/g2.jpg')}}" style="width:1100px; height: 470px;">
                        </div>
                        <div class="mySlides fade" style="padding-left: 60px;">
                            <img src="{{asset('image/g3.jpg')}}" style="width:1100px; height: 470px;">
                        </div>
                    </div>
                    <h2
                        style="position: absolute;top: 38%; left: 25%; color: #6ec1e4; font-size: 27px;">"Let's
                        Join Hands To Protect The Environment Today With The Most Meaningful Actions"</h2>
                    <br>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(0)"></span>
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                    </div>
                    <script>
                        //khai báo biến slideIndex đại diện cho slide hiện tại
                        var slideIndex;
                        // KHai bào hàm hiển thị slide
                        function showSlides() {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i]
                                    .className
                                    .replace(" active", "");
                            }

                            slides[slideIndex].style.display = "block";
                            dots[slideIndex].className += " active";
                            //chuyển đến slide tiếp theo
                            slideIndex++;
                            //nếu đang ở slide cuối cùng thì chuyển về slide đầu
                            if (slideIndex > slides.length - 1) {
                                slideIndex = 0
                            }
                            //tự động chuyển đổi slide sau 5s
                            setTimeout(showSlides, 3000);
                        }
                        //mặc định hiển thị slide đầu tiên
                        showSlides(slideIndex = 0);
                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }
                    </script>

                    <div class="ctt">
                        <div class="middd">
                            <div class="midrr">
                                <h3 style="padding-left: 250px;padding-top: 20px;padding-bottom: 30px;">ECO FRIENDLY PRODUCTS:</h3>
                                <p style="font-size: 20px; line-height: 25px;">“It is estimated that nearly 500
                                    million disposable plastic straws are tossed into landfill sites every year –
                                    that’s enough to fill 127 school busses with plastic straws every single day of
                                    the year.”Our Straws are not only a smart, green alternative for consumers, but
                                    can also be a solution for responsible business owners that want to be
                                    ambassadors for real change. What impact is your plastic usage having on the
                                    environment and are you doing enough?</p>

                            </div>
                            <div class="midll">
                                <img width="370" height="293" src="{{asset('image/abc.png')}}">
                            </div>
                            <div class="whyr">
                                <img src="{{asset('image/abcc.png')}}">
                            </div>

                            <div class="whyl">
                                <h2 style="text-align: center;padding-bottom: 15px;">WHY WORK WITH US:</h2>
                                <p>We have shipped our reusable bamboo drinking straws to customers all over the
                                    world. We offer international shipping at a competitive rate and would love to
                                    work with you.</p>
                                <br><br>
                                <p>No matter where you are in the world, we’ll get your order to you fast and
                                    climate friendly. All orders are sent fully carbon-neutral and plastic-free.</p>
                                <br><br>
                                <p>We use 100% recycled wrapping paper or other post-consumer products. We have
                                    a strict plastic-free policy and we ask that you kindly reuse or repurpose our
                                    packaging. All our shipping materials are recyclable and/or compostable.</p>
                            </div>

                        </div>

                    </div>
                    <main>
                        <div id="carousel">
                            <div class="slideImg hideLeft">
                                <img src="{{asset('image/c1.jpg')}}">
                            </div>
                            <div class="slideImg prevLeftSecond">
                                <img src="{{asset('image/c2.jpg')}}">
                            </div>
                            <div class="slideImg prev">
                                <img src="{{asset('image/c3.jpg')}}">
                            </div>
                            <div class="slideImg selected">
                                <img src="https://i1.sndcdn.com/artworks-000062423439-lf7ll2-t500x500.jpg">
                            </div>
                            <div class="slideImg next">
                                <img src="https://i1.sndcdn.com/artworks-000028787381-1vad7y-t500x500.jpg">
                            </div>
                            <div class="slideImg nextRightSecond">
                                <img src="https://i1.sndcdn.com/artworks-000108468163-dp0b6y-t500x500.jpg">
                            </div>
                            <div class="slideImg hideRight">
                                <img src="https://i1.sndcdn.com/artworks-000064920701-xrez5z-t500x500.jpg">
                            </div>
                        </div>
                        <div class="positionBtn">
                            <button id="prev">
                                <span>PREV</span></button>
                            <button id="next">
                                <span>NEXT</span></button>
                        </div>
                    </main>
                    <div class="content-text">
                        <h3 style="text-align:center;margin-top:0px;font-weight: 500;">CUSTOMIZED BAMBOO STRAWS:</h3>
                        <div class="text">We would love to partner with your business and customize our
                            straws to suit your branding and messaging. We have worked with international
                            Universities, hotels, restaurants, retail stores, event companies, festivals and
                            many more.</div>
                        <div class="text">Customized straws are a great addition to your next event and
                            allows you to incorporate your branding as well.</div>
                        <div class="text">We can be tailored to your needs. Choose a size, opt-in to
                            have your logo engraved or even add a personalized message! Our bamboo straws
                            are made from real whole bamboo stalks and come in different sizes to suit your
                            needs.</div>
                        <div class="text">If you are interested in taking the lead in the
                            eco-revolution, get onto our reusable bamboo drinking straws!</div>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <h6 style="text-align: center;">HOW DO YOU CLEAN YOUR BAMBOO STRAWS?</h6>
                                <div class="text">So you’ve got yourself a bunch of straws,<br>
                                    drunk your first smoothie, posted your pic on Instagram… now you’ve got a straw
                                    to clean!</div>

                                <div class="text">
                                    Our straws are made from whole bamboo stalks – which makes them easy to clean
                                    and maintain.<br>
                                    A well made bamboo straw is long-lasting, and cleaning is easy!</div>
                            </td>

                            <td>
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('image/c1.jpg')}}">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('image/c2.jpg')}}">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('image/c3.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                            </td><br>
                            <td>
                                <h6 style="text-align: center;">Important tips:</h6>
                                <div class="text">1. Always let your bamboo straws dry fully. They dry very quickly!</div>
                                <div class="text">2. Dry them flat – not standing up – so that water does not
                                    collect at the bottom.</div>
                                <div class="text">3. Store your straws in a well-ventilated place, and never in
                                    air-tight containers or jars.</div>
                            </td>
                        </tr>

                    </table>
                    <div class="text">All you need is to rinse them out under the tap after everyday
                        use or shake in a jar of warm soapy water if you like. Every month or so, you
                        can boil a pot of vinegar water mix and soak the straws for a few mins if you
                        want a super thorough clean! We use an electric kettle, so we just pour boiling
                        water into a pan or pot and add a spoonful of vinegar for the soak. (Vinegar is
                        optional!)</div>
                    <div class="text">Easy peasy, we told you so!</div>
                    <div class="content-text1">
                        <h6 style="text-align: center;">MANUFACTURING THAT CONSIDERS THE ENVIRONMENT</h6>
                        <p class="text">QT-AdelinaGreenhouse bamboo straws use only high quality bamboo
                            harvested in the planned logging area of Viet Nam. In Viet Nam, bamboo has long
                            been used as a building material. It is thick and strong, making it an ideal
                            material for straws that can be washed and used over and over.<br></p>
                        <p class="text">
                            Bamboo is a material that grows faster than wood and has little environmental
                            impact even when harvested. Even if the environmental impact is small,
                            QT-AdelinaGreenhouse is not only for product development, but for bamboo
                            Management is also performed. After felling, it will be available again in
                            normal 2-3 years.</p>
                    </div>
                    <div style="position: static; height: 15%;">
                        <div
                            style="position: absolute; width: 80%;"
                            id="carouselExampleSlidesOnly"
                            class="carousel slide pl-5 pr-5 pb-2 pt-2"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('image/k9.jpg')}}" class="img-fluid" style="height: 500px;width:100%;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('image/h6.jpg')}}" class="d-block w-100" style="height: 500px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('image/h7.jpg')}}" class="d-block w-100" style="height: 500px;">
                                </div>
                            </div>
                        </div>
                        <div class="p-5" style="position: absolute; z-index: 1;">
                            <h6 style="text-align: center;" class="text1">MAKE BY HAND ONE BY ONE:</h6>
                            <p class="text1">Work begins with the selection of bamboo thickness that matches
                                the size of the product.</p>
                            <p class="text1">However, the size of each one is slightly different due to the
                                fact that it is made from 100% natural materials. Production with a fully
                                automatic processing machine is fast, but there is a problem that quality
                                variations tend to occur.</p>
                            <p class="text1">In order to produce high quality straws, everything from
                                cutting the bamboo, which is the raw material, to filing the surface and cross
                                section, is done carefully one by one by hand.</p>
                            <p class="text1">The inside is brushed with a special brush, and after cleaning
                                and drying, the final inspection is completed.Although it takes time and effort,
                                this manufacturing method is adopted based on the desire to make use of the
                                warmth peculiar to nature and high quality products.</p>
                        </div>

                    </div>
                    <div>
                        <img
                            style="margin-left:38%"
                            src="https://secureservercdn.net/198.71.233.68/3xf.d8b.myftpupload.com/wp-content/uploads/2020/08/6.png?time=1601556307"
                            alt="">
                        <p class="text-center">FINALLY, IT WILL RETURN TO THE SOIL:</p>
                        <p class="text">When you have finished using it, bury it in the soil instead of
                            throwing it away as burning garbage.
                            <br><br>
                            This product has made it possible to make things based on a recycle cycle. When
                            Bamboo Straw is buried in the soil, it will eventually return to the soil and
                            become fertilizer for growing plants.</p>
                    </div>
                </div>
                <script type="module">
                                    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'
                                    var swiper = new Swiper('.swiper-container', {
                                        effect: 'cube',
                                        autoplay: {
                                            delay: 3000
                                        },
                                        loop: true
                                    });
                                </script>
@endsection