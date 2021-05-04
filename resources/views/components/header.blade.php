<!-- Header -->
<header id="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container topbar-content">
            <div class="row">
                <!-- Topbar Left -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="topbar-left d-flex">
                        <div class="email">
                            <i class="fa fa-envelope" aria-hidden="true"></i>Email: tivatheme@gmail.com
                        </div>
                        <div class="skype">
                            <i class="fa fa-skype" aria-hidden="true"></i>Skype: tivatheme
                        </div>
                    </div>
                </div>

                <!-- Topbar Right -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="topbar-right d-flex justify-content-end">
                        <!-- My Account -->
                        <div class="dropdown account">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                My Account
                            </div>
                            <div class="dropdown-menu">
                                <div class="item">
                                    <a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
                                </div>
                                <div class="item">
                                    <a href="user-login.html" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                                </div>
                                <div class="item">
                                    <a href="user-register.html" title="Register Account"><i class="fa fa-user"></i>Register</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
                                </div>
                            </div>
                        </div>

                        <!-- Language -->
                        <div class="dropdown language">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('img/language-en.jpg')}}" alt="Language English">
                            </div>
                            <div class="dropdown-menu">
                                <div class="item">
                                    <a href="#" title="Language English"><img src="{{asset('img/language-en.jpg')}}" alt="Language English"> English</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="Language French"><img src="{{asset('img/language-fr.jpg')}}" alt="Language French"> French</a>
                                </div>
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="dropdown currency">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                USD
                            </div>
                            <div class="dropdown-menu">
                                <div class="item">
                                    <a href="#" title="USD">USD</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="EUR">EUR</a>
                                </div>
                                <div class="item">
                                    <a href="#" title="GBP">GBP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row margin-0">
                <div class="col-lg-2 col-md-2 col-sm-12 padding-0">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="home-2.html">
                            <img class="img-responsive" src="{{asset('img/logo.png')}}" alt="Logo">
                        </a>
                    </div>

                    <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 padding-0">
                    <!-- Main Menu -->
                    <div id="main-menu">
                        <ul class="menu">
                            <li class="dropdown">
                                <a href="home-2.html" title="Homepage">Home</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="index.html" title="Homepage 1">Homepage 1</a></li>
                                        <li><a href="home-2.html" title="Homepage 2">Homepage 2</a></li>
                                        <li><a href="home-3.html" title="Homepage 3">Homepage 3</a></li>
                                        <li><a href="home-4.html" title="Homepage 4">Homepage 4</a></li>
                                        <li><a href="home-5.html" title="Homepage 5">Homepage 5</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="product-grid-left-sidebar.html" title="Product">Product</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li class="has-image">
                                            <img src="{{asset('img/product/product-category-1.png')}}" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="{{asset('img/product/product-category-2.png')}}" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="{{asset('img/product/product-category-3.png')}}" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="{{asset('img/product/product-category-4.png')}}" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
                                        </li>
                                        <li class="has-image">
                                            <img src="{{asset('img/product/product-category-5.png')}}" alt="Product Category Image">
                                            <a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="#" title="Page">Page</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li class="dropdown-submenu">
                                            <a href="product-grid-left-sidebar.html" title="Product List">Product List</a>
                                            <div class="dropdown-menu level2">
                                                <ul>
                                                    <li><a href="product-grid-left-sidebar.html" title="Product Grid - Left Sidebar">Product Grid - Left Sidebar</a></li>
                                                    <li><a href="product-grid-right-sidebar.html" title="Product Grid - Right Sidebar">Product Grid - Right Sidebar</a></li>
                                                    <li><a href="product-grid-full-width.html" title="Product Grid - Full Width">Product Grid - Full Width</a></li>
                                                    <li><a href="product-list-left-sidebar.html" title="Product List - Left Sidebar">Product List - Left Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="product-detail-left-sidebar.html" title="Product List">Product Detail</a>
                                            <div class="dropdown-menu level2">
                                                <ul>
                                                    <li><a href="product-detail-left-sidebar.html" title="Product Detail - Left Sidebar">Product Detail - Left Sidebar</a></li>
                                                    <li><a href="product-detail-full-width-1.html" title="Product List - Full Width 1">Product Detail - Full Width 1</a></li>
                                                    <li><a href="product-detail-full-width-2.html" title="Product List - Full Width 2">Product Detail - Full Width 2</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="product-cart.html" title="Cart">Cart</a>
                                        </li>
                                        <li>
                                            <a href="product-checkout.html" title="Checkout">Checkout</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" title="User">User</a>
                                            <div class="dropdown-menu level2">
                                                <ul>
                                                    <li><a href="user-login.html" title="Login">Login</a></li>
                                                    <li><a href="user-register.html" title="Register">Register</a></li>
                                                    <li><a href="#" title="My Account">My Account</a></li>
                                                    <li><a href="#" title="My Wishlists">My Wishlists</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="page-404.html" title="Page 404">Page 404</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="blog-list-left-sidebar-1.html">Blog</a>
                                <div class="dropdown-menu">
                                    <ul class="has-sub">
                                        <li><a href="blog-list-left-sidebar-1.html" title="Blog List - Left Sidebar 1">Blog List - Left Sidebar 1</a></li>
                                        <li><a href="blog-list-left-sidebar-2.html" title="Blog List - Left Sidebar 2">Blog List - Left Sidebar 2</a></li>
                                        <li><a href="blog-grid-full-width.html" title="Blog Grid - Full Width">Blog Grid - Full Width</a></li>
                                        <li><a href="blog-detail.html" title="Blog Detail">Blog Detail</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="page-about-us.html">About Us</a>
                            </li>

                            <li>
                                <a href="page-contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 padding-0">
                    <!-- Cart -->
                    <div class="block-cart dropdown">
                        <div class="cart-title">
                            <i class="fa fa-shopping-basket"></i>
                            <span class="cart-count">2</span>
                        </div>

                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('img/product/7.jpg')}}" alt="Product">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="product-name">
                                                <a href="product-detail-left-sidebar.html">Organic Strawberry Fruits</a>
                                            </div>
                                            <div>
                                                2 x <span class="product-price">$28.98</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a class="remove" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('img/product/6.jpg')}}" alt="Product">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="product-name">
                                                <a href="product-detail-left-sidebar.html">Organic Strawberry</a>
                                            </div>
                                            <div>
                                                1 x <span class="product-price">$35.00</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a class="remove" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="total">
                                        <td>Total:</td>
                                        <td colspan="2">$92.96</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3">
                                            <div class="cart-button">
                                                <a class="btn btn-primary" href="product-cart.html" title="View Cart">View Cart</a>
                                                <a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="form-search">
                        <form action="#" method="get">
                            <input type="text" class="form-input" placeholder="Search">
                            <button type="submit" class="fa fa-search"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
