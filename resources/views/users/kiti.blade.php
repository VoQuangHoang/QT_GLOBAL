@extends('users.master')
<title>QT-KITI - QT-GlobalGroup</title>
@section('content')
<!-- Bỏ code vừa cắt ở đây -->
<div class="mainkiti">
    <div class="slogan">
                    <h1>Ordering on Amazon, easier than ever!</h1>
                    <h2>Send Us Your Products?</h2>
    </div>
                <div class="form">
                    <div class="form-x">
                        <h1>Quote Form</h1>
                         <div class="form-xx">
                            <label for="fname">Link or name of your products*
                            </label><br>
                            <input style=" width:45%;height: 25px;" type="text" id="name" name="name" placeholder=""><br>
                            <label for="fname">Amount of your products
                            </label><br>
                            <input style=" width:45%;height: 25px;" type="text" id="name" name="name" placeholder=""><br>
                            <label for="fname">Product Description
                            </label><br>
                            <input style=" width:100%;height: 120px;" type="text" id="name" name="name" placeholder=""><br>
                            <label for="fname">Your Email*
                            </label><br>
                            <input style=" width:45%;height: 25px;" type="text" id="name" name="name" placeholder=""><br>
                            <label for="fname">Your Phone number
                            </label><br>    
                            <input style=" width:45%;height: 25px;" type="text" id="name" name="name" placeholder=""><br>
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
                <img  style="filter:brightness(50%);position: absolute;margin-top: -525px;width: 1245px; height: 900px; z-index: -1" src="{{ asset('image/bg2.jpg') }}" class="img-fluid">
                <div class="r1" style="margin-top: 10px;">
                    <img style="position:relative;z-index: 1;  padding-left: 50px;" height="200px" width="350px" src="{{asset('image/a1.jpg') }}">
                    <img style="position:absolute;left: 150px; top: 40px" height="200px" width="300px" src="{{ asset('image/a1.jpg') }}">
                    <img  style="position: absolute;left: 220px;top:100px;z-index: 0;" height="200px" width="250px" src="{{ asset('image/a2.jpg') }}">
                </div>get
                <div class="l1" style="margin-left: 500px;">
                    <h2 style="color: white;font-weight: 600; font-size: 70px; text-align: center;">QT-KiTi</h2><br>
                    <h4 style="padding-left: 150px;color: white;">We purchase Amazon Items on your<br> behalf.</h4>
                    <h4 style="padding-left: 150px;color: white;">Simplicity for customers is our priority.<Br> You can use our service without leaving<Br> your couch.</h2>
                </div>
                <div class="bautroi">
                   <div class="bt1">
                        <div class="btt1">
                            <i style="font-size: 30px;padding-top: 40px;padding-bottom: 30px;" class="fas fa-bahai"></i>
                            <h1>WHO WE ARE</h1>
                            <p>We are the most reliable service in the business of shopping and shipping on Amazon. We’re well known for our instant customer support. We understand customers' needs and always try to suggest the best options.</p>     
                        </div>
                        <div class="btt1">
                            <i style="font-size: 30px;padding-top: 40px;padding-bottom: 30px;" class="fas fa-bahai"></i>
                            <h1>WHAT WE DO</h1>
                            <p>We buy products from Amazon, consolidate them to save shipping cost, ship them to our customers, deal with the customs clearance procedure, and most importantly, we protect customers with our policy.</p>           
                        </div>
                        <div class="btt1">
                            <i style="font-size: 30px;padding-top: 40px;padding-bottom: 30px;" class="fas fa-bahai"></i>
                            <h1>HOW WE WORK</h1>
                            <p>Tell us what you want, by either sending us the URLs or the names, or even a photo of the products. We will find them, give quote, buy and ship them to you without you having to pay the slightest worry about payment, or shipping, or hassle customs clearance.</p>
                        </div>
                   </div> 
                </div>
                <div class="phodem">
                    <div class="pr">
                        <h1 style="margin-left: 60px; font-size: 40px;padding-top: 70px; color: white;">We Strive To Create A<br> Service That Will Satisfy<br> All Our Customers.</h1>
                        <p style="margin-left: 60px; font-size: 20px;padding-top: 40px; line-height: 30px;color: white;">With our experience in the field of international freight, QT-KiTi is the choice of many customers to buy goods on Amazon. We want to connect suppliers and buyers, help customers solve the problems of ordering, payment as well as shipping procedures when buying on Amazon.</p>
                    </div>
                    <div class="pl">
                        <img style="   padding-left: 77px;   padding-top: 75px;" width="550" height="364" src="{{ asset('image/p1.jpg') }}">
                    </div>
                </div>
                <div class="sixanh">
                    <h1 style="text-align: center; font-size: 40px;">Why Should You Choose Us</h1>
                    <div class="cot1">
                        <div class="cot11">
                            
                            <img height="291" width="324" src="{{ asset('image/a11.jpg') }}">
                            <h3>instan quote</h3>
                            <p>Add the items you want to buy<Br> for an instant quote. It’s so fast<br> and simple.</p>
                        </div>
                        <div class="cot12">
                            <img height="291" width="324" src="{{ asset('image/a11.jpg') }}">
                            <h3>instan quote</h3>
                            <p>Add the items you want to buy<Br> for an instant quote. It’s so fast<br> and simple.</p>
                        </div>
                    </div>
                    <div class="cot2">
                        <div class="cot13">
                            <img height="335" width="324" src="{{ asset('image/a11.jpg') }}">
                            <h3>instan quote</h3>
                            <p>Add the items you want to buy<Br> for an instant quote. It’s so fast<br> and simple.</p>
                        </div>
                        <div class="cot14">
                            <img height="291" width="324" src="{{ asset('image/a11.jpg') }}">
                            <h3>instan quote</h3>
                            <p>Add the items you want to buy<Br> for an instant quote. It’s so fast<br> and simple.</p>
                        </div>
                    </div>
                    <div class="cot3">
                        <div class="cot15">
                            <img height="291" width="324" src="{{ asset('image/a11.jpg') }}">
                            <h3>instan quote</h3>
                            <p>Add the items you want to buy<Br> for an instant quote. It’s so fast<br> and simple.</p>
                        </div>
                        <div class="cot16">
                            <img height="291" width="324" src="{{ asset('image/a11.jpg') }}">
                            <h3>instan quote</h3>
                            <p>Add the items you want to buy<Br> for an instant quote. It’s so fast<br> and simple.</p>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <div class="botr">
                        <img width="550" height="717" src="{{ asset('image/am.jpeg') }}">
                        <h1>Our Process</h1>
                    </div>
                    <div class="botl">
                        <div class="b1">
                        <h1>Add items</h1>
                        <p>Send us links.</p>
                        </div>
                        <div class="b2">
                        <h1>Get a quote</h1>
                        <p>QT-KiTi will confirm items prices and their<Br> availability.</p>
                        </div>
                        <div class="b3">
                        <h1>Pay for items</h1>
                        <p>Once prices are confirmed, you can pay for<br> your items for 70% - 100%.</p>
                        </div>
                        <div class="b4">
                        <h1>We purchase and ship your items</h1>
                        <p>We will quickly ship the parcel to you. Please<br> wait for the parcel arrival.</p>
                        </div>
                    </div>
                </div>
</div>
    
@endsection