<!-- header -->
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="{{url('/product')}}">Today's special Offers !</a>
    </div>
    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="#" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="View your cart" class="button" />
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="{{url('/login')}}">Login</a></li>
                            <li><a href="{{url('/signup')}}">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="{{url('/contactUs')}}">Contact Us</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="{{url('/')}}"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li><a href="{{url('/event')}}">Events</a><i>/</i></li>
                <li><a href="{{url('/aboutUs')}}">About Us</a><i>/</i></li>
                <li><a href="{{url('/product')}}">Best Deals</a><i>/</i></li>
                <li><a href="{{url('/services')}}">Services</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
@yield('menu')
<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a href="{{url('/product')}}">Branded Foods</a></li>
                    <li><a href="{{url('/households')}}">Households</a></li>
                    <li class="dropdown mega-dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <li><a href="{{url('/vegetables')}}">Vegetables</a></li>
                                    <li><a href="{{url('/vegetables')}}">Fruits</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{url('/kitchen')}}">Kitchen</a></li>
                    <li><a href="short-codes.html">Short Codes</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <li><a href="{{url('/softDrinks')}}">Soft Drinks</a></li>
                                    <li><a href="{{url('/softDrinks')}}">Juices</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{url('/petFood')}}">Pet Food</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <li><a href="{{url('/frozenSnacks')}}">Frozen Snacks</a></li>
                                    <li><a href="{{url('/frozenSnacks')}}">Frozen Nonveg</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{url('/breadBakery')}}">Bread & Bakery</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>