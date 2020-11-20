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
                padding-left: 5px;
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
                color: #a7a7a7!important;
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
            .content-li{
                color:#8a8a8a;
            }
            /* product*/
            .card-body {
                background: #e6e5e5;
            }
            .content-b1 {
                padding: 10px;
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
            .pr{
    width: 200px;
    height: 0px;
}
            .fa-cart-plus {
                margin-right: 7px;
            }
            /* footer*/
            
        </style>
    
    </head>
    
      
                    <div class="content-f">
                        <img src="{{asset('image/pen.jpeg')}}" class="img-fluid">
                        <h1 class="text-h1">Pen</h1>
                        <div>
                            <span class="text-p1">Home > Pen</span>
                            <span class="text-p2 text-center">Showing all 3 results</span>

                            <span>
                                <select class="content-sl">
                                    <option value="0">Deflault sorting</option>
                                    <option value="1">Sort by popularity</option>
                                    <option value="2">Sort by latest</option>
                                    <option value="3">Sort by price: low to high</option>
                                    <option value="4">Sort by price: high to low</option>
                                </select>
                            </span>
                        </div>
                        <hr>
                        <div>
                            <p class="text-center">
                                <b>Reasons to Use Bamboo pen:</b>
                            </p>
                            <ul style="margin-left: 10px;">
                                <li class="content-li">
                                    <span class="conten-sp">Smoothly Writing: No blotching, skipping or bleeding ensures quality writing every time you pick up this Dryden Bamboo pen.</span>
                                </li>
                                <li class="content-li">
                                    <span class="conten-sp">Amazing Gift: This vintage pen will delight friends, family and colleagues, and is sure to be really appreciated by whoever receives it.</span>
                                </li>
                                <li class="content-li">
                                    <span class="conten-sp">100% Satisfaction Guarntee: Comes with 100% no-hassle satisfaction guarantee. We are confidence with the quality of our products.</span>
                                </li>
                            </ul>
                        </div>
                        <table>
                            <th>
                                <td class="content-b1">
                                    <div class="card" style="width: 18rem; ">
                                        <img src="{{asset('image/hhhh-350x350.png')}}" class="card-img-top">
                                        <div class="card-body">
                                            <p class="card-text font-weight-bold">Bamboo Pen set</p>
                                            <p class="pr font-weight-bold text-info">$1.19</p>
                                            <div class="cart">
                                                <i class="fas fa-cart-plus"></i>
                                                <span>Add to cart</span>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </th>
                        </table>
                        <hr>

                     </div>
        
            

@endsection
