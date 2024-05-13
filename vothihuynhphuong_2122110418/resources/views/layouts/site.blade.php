<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="{{ asset('js/layoutsite.js')}}">
@yield('header')
</head>

<body>
    <header class="section_header bg-white">
        <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-3 col-md-2 order-1 order-md-1 pt-1">
                <a href="index.html">
                    <img src="{{ asset('images/logo.webp')}}" class="img-fluid" alt="">
                </a>
            </div>

            <!-- Navbar -->
            <div class="col-12 col-md-8 order-3 order-md-2">
                <nav class="navbar navbar-expand-lg bg-white pt-2" data-bs-theme="light">
                    <div class="container-fluid">
                        <a class="navbar-brand d-none" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Navbar Links -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">SHOP ALL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TOPS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ACCESSORIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">SALE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">RECRUITMENT</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        CATEGORY
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">BOTTOMS</a></li>
                                        <li><a class="dropdown-item" href="#">OUTERWEAR</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">BAGS</a></li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Icons -->
            <div class="col-9 col-md-2 order-2 order-md-3 text-end imgheader">
                <ul class="nav justify-content-end py-3">
                    <li class="nav-item" style="margin-left: 15px; margin-right: 20px;">
                        <i class="fa-regular fa-user" style="font-size: 20px;"></i>
                    </li>
                    <li class="nav-item position-relative" style="margin-right: 15px;">
                        <i class="fa-solid fa-cart-plus" style="font-size: 20px;"></i>
                        <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">10+</span>
                    </li>
                    <li class="nav-item position-relative" style="margin-right: 15px;">
                        <i class="fa-regular fa-heart" style="font-size: 20px;"></i>
                        <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">9</span>
                    </li>
                    <li class="nav-item" style="margin-right: 15px;">
                        <i class="fa-solid fa-headset" style="font-size: 20px;"></i>
                    </li>
                    <li class="nav-item" style="margin-right: 15px;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 20px;"></i>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>   <footer class="section_footer bg-dark text-white py-1">      
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-left"><h4 style="margin-left: 10px;">HỆ THỐNG CỬA HÀNG HADES</h4>
                    <ul class="list-menu toggle-mn hidden-mob list-social">
                        
                        <li >
                            <a >HADES STUDIO FLAGSHIP STORE: 69 QUANG TRUNG STREET, GO VAP DISTRICT, HOCHIMINH.</a>
                        </li>
                        
                        <li class="li_menu">
                            <a>Store 2: 26 LY TU TRONG STREET, DISTRICT 1, HOCHIMINH (THE NEW PLAYGROUND).</a>
                        </li>
                        
                        <li class="li_menu">
                            <a>Store 3: 140 NGUYEN HY QUANG, DONG DA DISTRICT, HANOI.</a>
                        </li>
                        
                        <li class="li_menu">
                            <a>Store 4: 4 PHAM NGU LAO STREET, DISTRICT 1, HOCHIMINH.</a>
                        </li>
                        
                        <li class="li_menu">
                            <a>Store 5: 136 NGUYEN HONG DAO STREET, TAN BINH DISTRICT, HOCHIMINH.</a>
                        </li>
                        
                        <li class="li_menu">
                            <a>Store 6: 56 MAU THAN, NINH KIEU DISTRICT, CANTHO.</a>
                        </li>
                        
                    </ul>
                </div>
                    <div class="col-md-4 text-left"><h4 style="margin-left: 10px;">CHÍNH SÁCH</h4>
                        <ul class="list-menu toggle-mn hidden-mob list-social">
                            
                            <li >
                                <a >Chính sách sử dụng website</a>
                            </li>
                            
                            <li class="li_menu">
                                <a>Phương thức thanh toán</a>
                            </li>
                            
                            <li class="li_menu">
                                <a>Chính sách đổi trả</a>
                            </li>
                            
                            <li class="li_menu">
                                <a>Chính sách giao nhận - vận chuyển</a>
                            </li>
                            
                            <li class="li_menu">
                                <a>Chính sách thẻ thành viên VIP</a>
                            </li>
                            
                            <li class="li_menu">
                                <a>Điều khoản và dịch vụ</a>
                            </li>
                            
                        </ul>
                    </div>
                <div class="col-md-4 text-left"><h4>THÔNG TIN LIÊN HỆ</h4>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix">
                            <span class="list_footer">  
                                CÔNG TY TNHH HADES         
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Điện thoại: </b>
                                <a>
                                    1900 988 903
                                </a>
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Ngày cấp: </b>
                                <a>
                                    20/07/2020
                                </a>
                            </span>
                        </div>
                        
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Email: </b>
                                <a>
                                    hr@hades.vn
                                </a>
                            </span>
                        </div>
                    </div></div>
             
            </div>
            <hr class="m-0 p-0">
            <div class="row">
                <div class="col-12 text-center">
                    <small>&copy; 2024 Huynh Phuong</small>
                </div> 
            </div>
        </div>
    </footer></footer>
    @yield('footer')
</body>

</html>