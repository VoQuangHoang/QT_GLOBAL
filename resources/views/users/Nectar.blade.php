@extends('users.master')
<title>Nectar - QT-GlobalGroup</title>
@section('content')
<div class="container-fluid" >
       
       <div class="row">
       <div class="col-12" style="padding: 0px;">
                <div id="page-header-bg" class="loaded">
                    <div class="container">
                        <div class="section-titile">
                            <div class="inner-wrap" style="transform: translateY(0px); opacity: 1; display: block;">
                                <h1 style="transform: rotateX(0deg) translate(0px, 0px);opacity: 1;">Nectar Advertisementtt</h1>
                                 <span class="subheader" style="transform: rotateX(0deg) translate(0px, 0px);opacity: 1;">Created Exclusively For Salient</span> 						
                                		</div>
                        </div>
                  

                    </div>
                </div>
                <div class="container-wrap">
                    
                    <div class="bottom-controls">
                      <ul class="nav">
                        <li>
                          <a class="nav-icon" href="{{ url('nectar-advertisement')}}" title="Back to all project">
                            <i class="icon"></i>
                          </a>
                        </li>
                          <li><a class="nav-item1" href="{{ url('summer-vaver')}}">
                            <span>Next Project</span> 
                               <i class="fa fa-angle-right"></i>
                            </a>
                          </li>
                      </ul>
                        </div>
                    </div>
                    <div class="nectar-social fixed visible" >
                      <a href="#">
                      <i class=" iconbtn fas fa-share-alt" style="color:white;"></i>
                      </a>
                      <div class="nectar-social-inner">
                           <a class="iconbtn fas fa-share-square" href="#" title="Share this">  </a>
                             <a class="iconbtn fab fa-linkedin-in" href="#" title="Pin this">   </a>
                             <a class="iconbtn fab fa-twitter" href="#" title="Tweet this"> </a>
                             <a class="iconbtn fab fa-facebook-square" href="#" title="Share this"></a>
                              </div>
                            </div>
                    

                </div>
       </div>
</div>

@endsection