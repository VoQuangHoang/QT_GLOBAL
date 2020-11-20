@extends('users.master')
<title>About - QT-GlobalGroup</title>
@section('content')
<style>
            * {
                margin: 0;
                padding: 0;
            }
            .top {
                width: 100%;
            }
            .right {
                width: 274px;
                background-color: azure;
                float: left;
            }
            .logo {
                padding: 30px 30px 0 30px;
            }
            .list-menu ul {
                padding: 30px 30px 30px 40px;
                overflow-y: scroll;
                height: 494px;
            }
            .list-menu ul li {
                list-style: none;
                font-weight: bold;
                line-height: 40px;
            }
            .list-menu a {
                text-decoration: none;
                color: black;
            }
            .icon {
                padding: 0 30px 0 40px;
            }
            .icon i {
                padding-right: 20px;
            }
            .left {
                width: 1245px;
                height: 652px;
                float: right;
            }
            .cont{
                width: 1124px;
                height: 330px;
                margin-left: 60px;
                margin-top: 90px;
            }
            .cont p{
                line-height: 30px;
                font-size: 18px;    
                color: #342b2ba6;
            }
            
        </style>
<div class="cont">
                    <h4> BUY BAMBOO STRAWS ONLINE – CONTACT US TODAY!</h4>
                    <p>We back ourselves here at Qtvn-betterchoice by QT-Adelinagreenhouse and believe that our product is worth showing off, so don’t wait to enquire with us if you’re interested in finding out more! Our friendly team will be more than happy to answer any questions you may have in regards to the product and/or go over any requirements you may have for business use if you are looking to buy in bulk. Don’t hesitate to get in contact with us today to learn more and discover why bamboo straws are simply great! If you have wholesale enquiries or wish to buy our bamboo straws online, please feel free to contact us . We answer every email in less than 48 hours, so if you don’t see any reply, check your spam box, thanks! We love establishing partnerships and collaborations, so please fill out this contact form for any wholesale bamboo straws enquiries or send us an email at: adelina.greenhouse@gmail.com</p>
                </div>
                <form style="margin-left: 60px;">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">First Name</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Last Name</label>
                      <input  type="password" class="form-control" id="inputPassword4">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="" style="width:615px;">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Country</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="" style="width:615px;">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">-Let us know what you are looking for?</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="" style="width:615px;">
                  </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
                </form>
@endsection
