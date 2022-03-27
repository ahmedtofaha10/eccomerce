<header class="header-v3">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45">

                <!-- Logo desktop -->
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('fronty')}}/images/icons/logo-02.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        @auth
                            <li>
                                <a href="{{url('/logout')}}">Logout</a>
                            </li>
                            <li>
                                <a href="{{url('/orders')}}">MY orders</a>
                            </li>
                        @else
                            <li>
                                <a href="{{url('/order')}}">Find My Order</a>
                            </li>
                            <li>
                                <a href="#loginModal" data-toggle="modal" data-target="#loginModal">Login</a>
                            </li>
                            <li>
                                <a href="#RegisterModal" data-toggle="modal" data-target="#RegisterModal">Register</a>
                            </li>
                        @endauth
                        <li>
                            <a href="#">{{__('front.Categories')}}</a>
                            <ul class="sub-menu">
                                @foreach(\App\Models\Category::all() as $category)
                                <li><a href="{{route('front.category.show',$category)}}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#contactModal" data-toggle="modal" data-target="#contactModal">Contact US</a>
                        </li>
                        <li>
                            <a href="{{app()->getLocale() == "ar" ? url('local?local=en'):url('local?local=ar')}}">{{app()->getLocale() == "ar" ? "English":"العربية"}}</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-r-25 bor6">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{carts()->count()}}">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>

                    <div class="flex-c-m h-full p-lr-19">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>
            </nav>
            @if($errors->any())
                <div class="alert-danger alert">
                    @foreach($errors->all() as $error=>$message)
                        <b>{{$message}}</b><br>
                    @endforeach

                </div>
            @endif
            @if(session()->has('success'))
            <div class="alert-success alert">
                <b>{!! session('success') !!}</b>
            </div>
            @endif
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="{{asset('fronty')}}/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
            <div class="flex-c-m h-full p-r-5">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="product.html">Shop</a>
            </li>

            <li>
                <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="blog.html">Blog</a>
            </li>

            <li>
                <a href="about.html">About</a>
            </li>

            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <a href="{{app()->getLocale() == "ar" ? url('local?local=en'):url('local?local=ar')}}">{{app()->getLocale() == "ar" ? "English":"العربية"}}</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04">
            <i class="zmdi zmdi-close"></i>
        </button>

        <form class="container-search-header">
            <div class="wrap-search-header">
                <input class="plh0" type="text" name="search" placeholder="Search...">

                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </form>
    </div>
</header>


<!-- Sidebar -->
<aside class="wrap-sidebar js-sidebar">
    <div class="s-full js-hide-sidebar"></div>

    <div class="sidebar flex-col-l p-t-22 p-b-25">
        <div class="flex-r w-full p-b-30 p-r-27">
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
            <ul class="sidebar-link w-full">
                <li class="p-b-13">
                    <a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
                        Home
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                        My Wishlist
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                        My Account
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                        Track Oder
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                        Refunds
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                        Help & FAQs
                    </a>
                </li>
            </ul>

            <div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						@ CozaStore
					</span>

                <div class="flex-w flex-sb p-t-36 gallery-lb">
                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-01.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-01.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-02.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-02.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-03.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-03.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-04.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-04.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-05.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-05.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-06.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-06.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-07.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-07.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-08.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-08.jpg');"></a>
                    </div>

                    <!-- item gallery sidebar -->
                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="images/gallery-09.jpg" data-lightbox="gallery"
                           style="background-image: url('{{asset('fronty')}}/images/gallery-09.jpg');"></a>
                    </div>
                </div>
            </div>

            <div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						About Us
					</span>

                <p class="stext-108 cl6 p-t-27">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis.
                </p>
            </div>
        </div>
    </div>
</aside>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="loginFrom" method="POST" action="{{url('/login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">email</label>
                        <input name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input name="password" type="password" class="form-control" >
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="loginFrom">LogIn</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="contactFrom" method="POST" action="{{url('/contact')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input name="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">subject</label>
                        <input name="subject" class="form-control" value="{{old('subject')}}">
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">message</label>
                        <textarea name="message" class="form-control" >{{old('message')}}</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="contactFrom">Send</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" method="POST" action="{{url('/register')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input name="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">phone</label>
                        <input name="phone" class="form-control" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input name="password" type="password" class="form-control" >
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="registerForm">Register</button>
            </div>
        </div>
    </div>
</div>
