@extends('users.master')
<title>Home - QT-GlobalGroup</title>
@section('content')
<div class="container-fluid" >
       
       <div class="row">
       <div class="col-12" style="padding: 0px;">
              <div id="page-header-bg" class="loaded s2">
                <div class="container">
                    <div class="section-titile">
                        <div class="inner-wrap s2" >
                            <h1>Summer Waves</h1>
                             <span class="subheader" >THEY JUST KEEP ROLLIN'</span> 						
                                </div>
                    </div>
              

                </div>

            </div>
            <div class="row-bg-overlay" >
              <div class="inner-wraps">
                  <h6><span>Overvivew</span></h6>
              </div>
              <div class="colum-docs">
                 
                      <div class="colum">  
                           <p>Far far away, behind the word mountains, 
                         far from the countries Vokalia and Consonantia, 
                         there live the blind texts. Separated they live in 
                         Bookmarksgrove right at the coast of the Semantics, 
                         a large language ocean. A small river named Duden flows by their
                          place and supplies it with the necessary regelialia. It is a
                           paradisematic country, in which roasted parts of sentences fly into
                            your mouth. Even the all-powerful Pointing has no control about the 
                            blind texts it is an almost unorthographic life One day however a small 
                            line of blind text by the name of
                          Lorem Ipsum decided to leave for the far World of Grammar.</p>

                      </div>
                      <div class=" colum">
                       <p>
                         She packed her seven versalia, put her initial
                          into the belt and made herself on the way. When she 
                          reached the first hills of the Italic Mountains, she had a
                           last view back on the skyline of her hometown Bookmarksgrove, 
                           the headline of Alphabet Village and the subline of her own road
                           , the Line Lane. Pityful a rethoric question ran over her cheek,
                          then she continued her way. On her way she met a copy.
                       </p>
                      </div >
                      <div class=" colum">
                          <div>
                             <h6><span>Project</span></h6>
                             <p>Summer Waves Portfolio Creation</p>
                          </div>
                          <div>
                             <h6><span>Client</span></h6>
                             <p>Casey Graham</p>

                          </div>
                          <div>
                             <h6><span>What We Did</span></h6>
                             <p>Photography, Image Editing</p>
                          </div>

                      </div>
                   
                  
                  
                   
              </div>
         </div>
         <div class="row-inner" style="padding:0px;">
          <div class="plexbox1" >
             <div class="box1left aniboxk">
             </div>
             <div class="box1right" >
               <div class="textbox1 aniboxc">
                <h5>SOME TITLE TEXT</h5>
                <h2>Pityful A Rethoric Question Ran Over Her</h2>
                <p>I am text block. Click edit button to change this text. 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Ut elit tellus, luctus nec ullamcorper matti. I am text block.
                   Click edit button to change this text. Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper matti.</p>
                </div>
            </div>
          </div>
           
        </div>
         <div class="row-inner1" style="padding:0px;">
          <div class="plexbox2" >
             <div class="box2left">
              <div class="textbox2 aniboxc">
                <h5>SOME TITLE TEXT</h5>
                <h2>Pityful A Rethoric Question Ran Over Her</h2>
                <p>I am text block. Click edit button to change this text. 
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Ut elit tellus, luctus nec ullamcorper matti. I am text block.
                   Click edit button to change this text. Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper matti.</p>
                </div>
             </div>
             <div class="box2right aniboxk" >
               
            </div>
          </div>
           
        </div>
        
        <div class="column-bg-overlay-wrap">
          <div class="container" style="top: 245px;position: relative;">
                <div class="front-3d">
                  <a href="#"><span data-title="Lauch Project">Lauch Project</span></a>
                </div>
              </div>
          </div>
          <div class="container-wrap">
                    
            <div class="bottom-controlss">
              <ul class="nav">
                <li>
                  <a class="nav-icon" href="{{ url('nectar-advertisement')}}" title="Back to all project">
                    <i class="icon"></i>
                  </a>
                </li>
                  <li><a class="nav-item1" href="{{ url('the-journey')}}">
                    <span>Next Project</span> 
                       <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
              </ul>
                </div>
            </div>
   
            

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

@endsection