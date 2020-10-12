@extends('users.master')
<title>Into the trees - QT-GlobalGroup</title>
@section('content')
<div class="row">
    <div class="tree-section1">
        <div class="text">
            <h1>Into The Trees</h1>
            <span>Deeper we shall travel</span>
        </div>

    </div>
</div>
<div class="row">
    <div class="tree-section2">
        <h5><span style="color: #3f59ff;">OVERVIEW</span></h5>
        <h2>How We Approached</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
            ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It
            is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
            all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day
            however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of
            Grammar.</p>
    </div>
</div>
<div class="row">
    <div class="tree-section3">
        <div class="col-md-6" style="padding:0px">
            <div class="text1">
                <i class="fas fa-tree"></i>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px">
            <div class="text2">
                <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h2>It's Important</h2>
                </div>
                <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h2>To Not Stop</h2>
                </div>
                <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h2>Questioning</h2>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="tree-section4">
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Body-->
                    <div class="modal-body mb-0 p-0">
                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6oTurM7gESE"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <span class="mr-4">Spread the word!</span>
                        <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                        <!--Twitter-->
                        <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                        <!--Google +-->
                        <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                        <!--Linkedin-->
                        <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: Name-->
        <div class="iconplay">
            <a><i class="far fa-play-circle" alt="video" data-toggle="modal" data-target="#modal4"></i></a>
        </div>


    </div>
    <!-- Grid column -->

</div>
<script>
    $('#modal4').on('hidden.bs.modal', function (e) {
        // do something...
        $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
    });

</script>

<div class="row">
    <div class="tree-section5">
        <div class="content-last">
            <div class="carousel-inner">
                <div>
                    <div class="text-carousel">
                        <h5>HOW THE PROJECT WAS RECEIVED</h5>
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
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="tree-section6">
        <!-- <div class="textbox">
                <p class="">View Website</p>
              </div> -->
        <div class="container">
            <div class="box">
                <div class="icon">
                    <p class="text" aria-hidden="true">View Website</p>
                </div>
                <div class="details">
                    <h3>View Website</h3>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
