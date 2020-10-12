@extends('users.master')
<title>Home - QT-GlobalGroup</title>
@section('content')
<div class="row">
    <div id="section01" class="content-head">
        <img src="{{ asset('image/homepage_header_003.jpg') }}" alt="Home Page" width="" max-height="1200px">
        <div class="center">
            <h1>QT-Group</h1><br>
            <p>
                THE GLOBAL QT-GROUP NOW HAS 1 COMPANY WITH MANY OFFICES IN VIETNAM , 2 COMPANIES IN
                CANADA AND 1 COMPANY IN THE USA. THE GROUP'S PRINCIPAL ACTIVITIES ARE IN ARTIFICIAL
                INTELLIGENCE AND FINANCIAL INVESTMENT - APPLIED IN MANY FIELDS, IN PARTICULARLY
                HOSPITALITY MANAGEMENT AND FINANCE FOR THE PAST THREE YEARS. CURRENTLY, THE GROUP IS
                IN THE PREPARATION STAGE TO OPEN MORE COMPANIES IN NORTH AMERICA BECAUSE OF
                DIFFERENT LAWS IN EACH STATE, ESPECIALLY THE INTERESTS OF CORPORATE INVESTMENT. OUR
                GROUP IS ALSO EXPANDING AND ESTABLISHING COMPANIES IN MANY REGIONS OF THE WORLD:
                NORTHERN EUROPE, JAPAN, THE UNITED KINGDOM, AUSTRALIA, GERMANY AND SINGAPORE. EACH
                COMPANY OF QT-GROUP OUTSIDE VIETNAM IS CALLING THEIR REGIONAL CAPITAL AND
                OUTSOURCING ON QT-VIETNAM TO DEVELOP AND REFINE ITS CORE PRODUCTS TO SUIT EACH
                REGION. IN THE PAST THREE YEARS THE COMPANIES IN CANADA HAVE DONE SO. WITH STRONG
                WORLD-LEADING EXPERIENCE FROM OUR FOUNDERS ON ARTIFICIAL INTELLIGENT APPLICATIONS,
                FINANCIAL MANAGING OF 150 MILLION USD INVESTMENT IN VIETNAM (2009-2014) AND JOINING
                40 BILLION USD INVESTMENT MANAGEMENT GROUP IN CANADA (2017-2018), EACH COMPANY
                OUTSIDE VIETNAM THIS YEAR IS EXPECTED TO CALL FOR INVESTMENT OF 100 MILLION USD.</p>
        </div>
        <a href="#section02"><span></span></a>

    </div>
    <!-- <script>
                            $(function () {
                                $('a[href*=#]').on('click', function (e) {
                                    e.preventDefault();
                                    $('html, body').animate({
                                        scrollTop: $($(this).attr('href')).offset().top
                                    }, 900, 'linear');
                                });
                            });
                        </script> -->

    <div id="section02" class="content-body">
        <div class="title">
            <h2>Our Latest Works</h2>
        </div>
        <div class="row content">
            <div class="col-md-3">
                <h2>Our Leadership</h2>
                <h5>
                    WHEN EACH TALENTED INDIVIDUAL GATHERS TOGETHER, IT MAKES A GREAT SUCCESS.
                </h5>
                <div class="text">
                    Learn about us
                </div>
            </div>
            <div class="col-md-9">
                <div class="info">
                    <h3>Henry Duong</h3>
                    <h5>FOUNDER</h5>
                    <p>15+ years of success in management, data analytics and investment. Being
                        (certified) member of several famous global professional communities:
                        CFA, CAIA, PRMIA, GARP, SOA, and CAS. Being a well-known scholar
                        researcher on wide range research areas: mathematics, computer science,
                        finance, risk management, insurance and economics. Postdoctoral
                        researcher at Japan Advanced Institute of Science and Technology on
                        Machine Learning, PhD in Mathematics, MS in Computer Science, MA in
                        Analysis, BA in Mathematics &amp; Computer Science.</p>
                </div>
                <div class="info">
                    <h3>Adelina Ho</h3>
                    <h5>CO-FOUNDER</h5>
                    <p>Adelina Ho has 13+ year work as Head of Programming Curriculum Committee
                        and Lecturer. Not only possessing expertise in optimization research
                        with prestigious publications and reviewing activities on high-ranked
                        journals, she also has many years experience in developing statistical
                        models, interpreting and analyzing data for driving business solutions.
                        Currently, she focuses on developing QT-Data Inc. She graduated with her
                        Master of Science in Optimization and Bachelor of Science in Mathematics
                        & Computer Science.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-last">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div>
                    <div class="text-carousel">
                        <h5>What They’re Saying</h5>
                        <hr class="rounded">
                    </div>
                    <div class="divider-wrap" data-alignment="default">
                        <div style="margin-top: 25px; width: 80px; height: 2px; margin-bottom: 25px; transform: scale(1, 1); visibility: visible;"
                            data-width="80" data-animate="yes" data-animation-delay="" data-color="accent-color"
                            class="divider-small-border completed"></div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <p class="d-block w-100 text">
                        <span>
                            "It was really fun getting to know the team during the project. They
                            were all helpful in answering my questions and made me feel at ease. The
                            design ended up being better than I could have envisioned!"
                        </span>
                    </p>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Eve Crawford</h5>
                        <p class="title">Product Designer</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="d-block w-100 text">
                        "By far the best team I've ever worked with. They truly understood the look
                        I was going for and completely nailed it! I would highly recommend them as a
                        company, you simply just won't find any better team!"
                    </p>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aura Brooks</h5>
                        <p class="title">Graphic Designer</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="d-block w-100 text">
                        "Salient is by far the most astonishing WP theme out there! I literally
                        could not be happier that I chose to buy your theme! Your regular updates
                        and superb attention to detail blows me away every time I visit my new
                        site!"
                    </p>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Zak Reid</h5>
                        <p class="title">Instructor, Skate Nao</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <p class="d-block w-100 align-middle text">
                        "I'm wondering why I never contacted these guys sooner! Seriously, they all
                        have commendable talent in their respective fields and knocked my concept
                        out of the ballpark. Thanks for an amazing experience!"
                    </p>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jack Graham</h5>
                        <p class="title">Co Founder, Coffee Inc</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br><br>
    </div>

</div>
@endsection
