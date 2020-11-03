@extends('users.master')
<title>Contact - QT-GlobalGroup</title>
@section('content')
<!-- Bỏ code vừa cắt ở đây -->


<div class="row">
    <div class="col-6" style="background-color: #f4f4f4;">
        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrappers ">
                <h2><span style="color: #000000; 
                                 font-size: 46px;">Contact. </span></h2>
                <p>&nbsp;</p>
            </div>
        </div>




        <div class="wpb_text_column wpb_content_element  vc_custom_1583233172572">
            <div class="wpb_wrappers">
                <h4><span style="color: #000000;font-size: 24px;">CANADA</span></h4>
                <h5><span style="color: #000000; font-size: 12px;font-weight: 600;
                    letter-spacing: 3px;">SASKATCHEWAN OFFICE </span></h5>
                <p><span style="color: #000000;font-size: 16px;font-weight: 600;">Phone: +1 306 491 8799<br />
                        Email: info@qntdata.com</span></p>
                <h5><span style="color: #000000;font-size: 12px;font-weight: 600;
                    letter-spacing: 3px;">BRISTISH COLUMBIA OFFICE</span></h5>
                <p><span style="color: #000000;font-size: 16px;font-weight: 600;">Phone: +1 306 491 8799<br />
                        Email: info.canada@qntdata.com</span></p>
                <p>&nbsp;</p>
            </div>
        </div>




        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrappers">
                <h4><span style="color: #000000;font-size: 24px;">US </span></h4>
                <h5><span style="color: #000000;font-size: 12px;font-weight: 600;
                    letter-spacing: 3px;">US OFFICE</span></h5>
                <p><span style="color: #000000;font-size: 16px;font-weight: 600;">Phone: +1 858 258 3151<br />
                        Email: Info.us@qntdata.com</span></p>
                <p>&nbsp;</p>
            </div>
        </div>




        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrappers">
                <h4><span style="color: #000000;font-size: 24px;">VIETNAM</span></h4>
                <h5><span style="color: #000000;font-size: 12px;font-weight: 600;
                    letter-spacing: 3px;">HO CHI MINH OFFICE</span></h5>
                <p><span style="color: #000000;font-size: 16px;font-weight: 600;">Phone: +84 904 917 075<br />
                        Email: Info.vietnam@qntdata.com</span></p>
                <h5><span style="color: #000000;font-size: 12px;font-weight: 600;
                    letter-spacing: 3px;">DA NANG OFFICE</span></h5>
                <p><span style="color: #000000;font-size: 16px;font-weight: 600;">Phone: +84 904 917 075<br />
                        Email: Info.danang@qntdata.com</span></p>
            </div>
        </div>
    </div>
    <div class="col-6" style="background-color:#2c3742;">
        <div class="wpb_wrapper">
            <div class="wpb_text_colum">
                <h2 style="font-size: 46px;">Don't Be Shy.</h2>
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-group">
                        <label class="label" for="my-input">Your Name </label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label class="label" for="my-input">Your Email *</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label class="label" for="my-input">Your Message *</label>
                        <textarea id="my-input" class="form-control" cols="30" rows="10"></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
