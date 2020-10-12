@extends('users.master')
<title>About - QT-GlobalGroup</title>
@section('content')
<div class="row">
    <div class="container">
        <div class="ab-title">
            <h1>About</h1>
        </div>
    </div>

    <div style="width: -webkit-fill-available; height: 50%;">
        <div class="ab-content">
            <div class="content">
                <h1 uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true" class="">We Make Amazing Things Every Day.</h1>
            </div>
        </div>
    </div>


    <div class="ab-content1">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('image/homepage_team_001.jpg') }}" alt="" width="40%" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" class="img1">
                <img src="{{ asset('image/about-003.jpeg') }}" alt="" width="40%" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" class="img3">

                <img src="{{ asset('image/about-002.jpeg') }}" alt="" width="40%" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" class="img2">
            </div>
            <div class="col-md-6">
                <div class="text">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">CONNECTING BRANDS AND IDEAS</h6>
                        <h2 class="card-title">Vision</h2>
                        <p class="card-text">“To be a respected solutions company focused on
                            combining state-of-the-art of Machine Learning, AI algorithms and
                            delivering world-class quality big data solutions.”</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row box2">
            <div class="col-md-6">
                <div class="text">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">EVERYONE STAYS HAPPY</h6>
                        <h2 class="card-title">Mission</h2>
                        <p class="card-text">“Simplifying delivery of complex big data with our
                            innovative services and continuously optimizing our every product to
                            improve customers’ experience.”</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('image/about-004.jpeg') }}" alt="" width="40%" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" class="img4">
                <img src="{{ asset('image/about-005.jpeg') }}" alt="" width="40%" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" class="img6">

                <img src="{{ asset('image/about-006.jpeg') }}" alt="" width="40%" uk-scrollspy="cls: uk-animation-scale-up; repeat: true" class="img5">
            </div>
        </div>
    </div>

    <div class="ab-content2">
        <div class="title">
            <h5>WE’RE QUITE MULTI-DISCIPLINED</h5>
            <h2>Core Values</h2>
        </div>
        <div class="content1">
            <div class="row">

                <div class="col-md-4">
                    <div class="wrap">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <i class="fas fa-binoculars"></i>
                                    <h3 class="">Simplicity</h3>
                                </div>
                                <div class="flip-box-back">
                                    <span style="font-weight: 400;">Turning complex process into
                                        simple
                                        solution.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <i class="fas fa-balance-scale"></i>
                                <h3>Integtity</h3>
                                <h5>Honest</h5>
                            </div>
                            <div class="flip-box-back">
                                <span style="font-weight: 400;">
                                    We’re honest and forthright in every
                                    dealings, our commitment is to always do the right thing with
                                    our clients, partners, and members. Building trust through
                                    transparency lifts us all higher than we could rise&nbsp;<br>We
                                    always act morally, treating everyone with honesty and respect,
                                    and we follow through on commitments we make.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <i class="fas fa-dumbbell"></i>
                                <h3>Boldness</h3>
                            </div>
                            <div class="flip-box-back">
                                <span style="font-weight: 400;">Opportunity could be seen as another
                                    form of risk.<br>
                                    Do amazing things means taking risks. We move fast and we’re not
                                    afraid to make mistakes. Don’t avoid challenges that make you
                                    think insurmountable. QT Group makes you feel empowered to make
                                    decisions, build confidence and motivation to move
                                    forward.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <i class="far fa-laugh-squint"></i>
                                <h3>Inovation</h3>
                            </div>
                            <div class="flip-box-back">
                                <span style="font-weight: 400;">We create a workplace where you can
                                    be assured to try new things, which we can overcome these
                                    limitations and learn from the things that do not always go
                                    according to plan.
                                    We are building a culture of innovation and continuous
                                    improvement, constantly seeking personal and professional
                                    growth.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <i class="fas fa-users"></i>
                                <h3>Teamwork</h3>
                            </div>
                            <div class="flip-box-back">
                                <span style="font-weight: 400;">All members in QT group work
                                    together with mutual respect, cooperation, and appreciation for
                                    all of our points of view and different personality.
                                    Relationships deliver results because we can’t do our jobs
                                    without each other. We work openly, inclusive and
                                    multi-functional because it allows us to build relationships,
                                    find out the potential competencies, and bring the best
                                    results.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ab-content3">
        <div class="title">
            <h5>ONE SPIRIT, ONE TEAM, ONE WIN</h5>
            <h2>Human Resources</h2>
        </div>
        <div class="team-section text-center my-5 content">
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                        <img src="{{ asset('image/HenryDuong_avatar.jpg') }}" width="100%" class="rounded-circle z-depth-1"
                            alt="HenryDuong avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Founder</h5>
                    <p class="text-uppercase blue-text"><strong>Henry Duong</strong></p>
                    <p class="grey-text text-left">15+ years of success in management, data
                        analytics and investment. Being (certified) member of several famous global
                        professional communities: CFA, CAIA, PRMIA, GARP, SOA, and CAS. Being a
                        well-known scholar researcher on wide range research areas: mathematics,
                        computer science, finance, risk management, insurance and economics.
                        Postdoctoral researcher at Japan Advanced Institute of Science and
                        Technology on Machine Learning, PhD in Mathematics, MS in Computer Science,
                        MA in Analysis, BA in Mathematics & Computer Science.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fab fa-linkedin blue-text"> </i>
                        </a>
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-square blue-text"> </i>
                        </a>
                        <!-- Skype -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-skype blue-text"> </i>
                        </a>
                        <!-- Mail -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fas fa-envelope-square blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                        <img src="{{ asset('image/AdelinaHo_avtar.jpg') }}" class="rounded-circle z-depth-1" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Co-Founder</h5>
                    <p class="text-uppercase blue-text"><strong>Adelina Ho</strong></p>
                    <p class="grey-text text-left">Adelina Ho has 13+ year work as Head of
                        Programming
                        Curriculum Committee and Lecturer. Not only possessing expertise in
                        optimization research with prestigious publications and reviewing activities
                        on high-ranked journals, she also has many years experience in developing
                        statistical models, interpreting and analyzing data for driving business
                        solutions. Currently, she focuses on developing QT-Data Inc. She graduated
                        with her Master of Science in Optimization and Bachelor of Science in
                        Mathematics & Computer Science.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Skype -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-skype blue-text"> </i>
                        </a>
                        <!-- Mail -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fas fa-envelope-square blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
                    <div class="avatar mx-auto">
                        <img src="{{ asset('image/team-photo-MinhTran.jpg') }}" class="rounded-circle z-depth-1" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">CTO</h5>
                    <p class="text-uppercase blue-text"><strong>Minh Tran</strong></p>
                    <p class="grey-text text-left">Minh Tran joined QT-Group in 2016. He brings more
                        than 5
                        years of experience working on applying deep learning, data mining and other
                        analysis techniques in real data. Tran's key responsibilities are for
                        driving overall business strategy and research in collaboration with all
                        functional groups at QT-Data. He graduated from the University of Science -
                        VNU HCM, Vietnam with his M.Sc in Quantitative & Computational Finance and
                        B.S in Mathematics & Computer Science.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Skype -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-skype blue-text"> </i>
                        </a>
                        <!-- Mail -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fas fa-envelope-square blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6">
                    <div class="avatar mx-auto">
                        <img src="{{ asset('image/team-photo-ChauTran.jpg') }}" class="rounded-circle z-depth-1" alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">COO</h5>
                    <p class="text-uppercase blue-text"><strong>Chau tran</strong></p>
                    <p class="grey-text text-left">Chau Tran joined QT-Team in 2016. She has 3+
                        years of
                        finance Product Development Specialist experience and market research.
                        Currently she is promoting Fundraising for QT-Data. She is willing to work
                        in a creative and challenging working environment. She graduated from the
                        University of Science - VNU HCM, Vietnam with B.S in Mathematics & Computer
                        Science. She then studied for her M.Sc in Quantitative & Computational
                        Finance at John Von Neumann Institute.</p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Skype -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-skype blue-text"> </i>
                        </a>
                        <!-- Mail -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fas fa-envelope-square blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
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
                        <div class="title">
                            <h5>WE BUILD LASTING RELATIONSHIPS</h5>
                            <h2>Customer Relations</h2>
                        </div>
                        <hr class="rounded">
                    </div>
                </div>
                <div class="carousel-item active">
                    <p class="d-block w-100 text">
                        <span>
                            "QT group strive to provide great products & service to our partners,
                            our
                            customers, our community and each other – and we go further every day to
                            prove it."
                        </span>
                    </p>
                </div>
                <div class="carousel-item">
                    <p class="d-block w-100 text">
                        "QT group nỗ lực để cung cấp sản phẩm và dịch vụ tuyệt vời cho các đối tác,
                        cho
                        khách hàng và cho cộng đồng - và chúng tôi tiến xa hơn mỗi ngày để chứng
                        minh
                        điều đó."
                    </p>

                </div>
                <div class="carousel-item">
                    <p class="d-block w-100 text">
                        "Partners and customers are our top priority. We’re hyper-focused on making
                        them
                        more satisfied every day. And we have never stopped trying to find ways to
                        understand our customers and give them the best."
                    </p>

                </div>
                <div class="carousel-item">
                    <p class="d-block w-100 align-middle text">
                        "Các đối tác, khách hàng là ưu tiên hàng đầu của chúng tôi. Chúng tôi tập
                        trung
                        làm cho họ hài lòng hơn mỗi ngày và chúng tôi chưa từng ngừng cố gắng tìm ra
                        cách để hiểu khách hàng của mình và cung cấp cho họ những điều tốt nhất."
                    </p>

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

    <div class="ab-content4">
        <div class="title">
            <h2>member BRANDS</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="bg1">
                    <i class="fab fa-firefox-browser"></i>
                    <h3>QT-AI</h3>
                    <p>
                        Revolutionize your business with Big data advantages and our AI solutions
                        for
                        customer segmentation, fraud detection, risk management and personalized.
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bg2">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>QT- INVEST</h3>
                    <p></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bg3">
                    <i class="far fa-chart-bar"></i>
                    <h3>QT- ANALYTICS</h3>
                    <p>
                        Our advanced analytics solutions are infused with the innovative algorithms
                        that can help to unlock the potential opportunities hidden in data.
                        Resolving problems with less time and costs.
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bg4">
                    <i class="far fa-hospital"></i>
                    <h3>QT- HOSPITALITY</h3>
                    <p>
                        Driving your hotel revenue, reducing operation costs, creating labor
                        productivity and optimizing quality service with our explainable AI-powered
                        system.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
