<!DOCTYPE html>
<html>
<head>
<title>Atmarkcafe Vietnam Office Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="assets/css/override.css" rel="stylesheet" media="screen">
<link href="assets/css/custom.css" rel="stylesheet" media="screen">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
<![endif]-->


</head>
<body>
    <header>
        <div class="container">
            <!-- Start Topbar -->
            <div class="topbar-header hidden-xs">
                <ul class="contact nav navbar-nav">
                    <li class="phone"><span class="glyphicon glyphicon-earphone"></span> 
                        xxx-xxx-xxxx
                    </li>
                    <li class="mail"><span class="glyphicon glyphicon-envelope"></span> 
                        contact@sample.domain
                    </li>
                    <li><span class="glyphicon glyphicon-flag"></span> 
                        <select>
                            <option>Language</option>
                            <option>English</option>
                            <option>Japan</option>
                        </select>
                    </li>
                </ul>
    
                <form class="search navbar-right">
                    <input type="text" placeholder="Search here ...">
                </form>
                <div class="clearfix"></div>
            </div>
            <!-- End Topbar -->
            
            <!-- Start Navbar -->
            <div class="topnav-header navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo navbar-brand" href="#"><img src="holder.js/190x80" class="img-responsive"></a>
                </div>
                <nav class="navbar-right navbar-collapse collapse" role="navigation">
                    <ul class="menu-header nav navbar-nav ">
                        <li class="active"><a href="#">Service</a></li>
                        <li><a href="#">Company</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sit amet</a></li>
                        <li><a href="#">Aliquam</a></li>
                        <li><a href="#">Metus</a></li>
                    </ul>
                </nav>
            </div>
            <!-- End Navbar -->

            <!-- Start main slide -->
            <div class="slider">
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img data-src="holder.js/1140x400/auto/#98dd98:#79b079/text:First slide"
                                alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">Caption 1</div>
                            </div>
                        </div>
                        <div class="item">
                            <img data-src="holder.js/1140x400/auto/#98dd98:#79b079/text:Second slide"
                                alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">Caption 2</div>
                            </div>
                        </div>
                        <div class="item">
                            <img data-src="holder.js/1140x400/auto/#98dd98:#79b079/text:Third slide"
                                alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">Caption 3</div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span
                        class="glyphicon glyphicon-chevron-left"></span>
                    </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span
                        class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                <article class="slogan">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Pellentesque luctus felis augue, scelerisque porta ligula fermentum at. Proin ultricies faucibus sapien at facilisis</p>
                </article>
            </div>
            <!-- End main slide -->
            </div>
    </header>

    <div class="main">
        <div class="service main-block container">
            <h1 class="block-title"><span>OUR SERVICES</span></h1>
            <div class="row">
                <article class="col-md-4">
                    <a href="#"><img src="holder.js/300x300/#98dd98:#79b079"></a>
                    <h2>Pellentesque luctus felis</h2>
                    <p>Pellentesque luctus felis augue, scelerisque porta ligula fermentum at. Proin ultricies faucibus sapien at facilisis. In vulputate malesuada est, at accumsan nibh. Donec ipsum tortor.</p>
                </article>
                <article class="col-md-4">
                    <a href="#"><img src="holder.js/300x300/#98dd98:#79b079"></a>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam metus urna, mattis eu augue non, ultrices lacinia risus.</p>
                </article>
                <article class="col-md-4">
                    <a href="#"><img src="holder.js/300x300/#98dd98:#79b079"></a>
                    <h2>Quisque mattis scelerisque</h2>
                    <p>Quisque mattis feugiat scelerisque. Pellentesque in lacus turpis. Morbi vehicula nisi id quam congue rutrum.</p>
                </article>
            </div>
        </div>
        <div class="latest main-block">
            <h1 class="block-title"><span>LATEST POSTS</span></h1>
            <div class="latest-content container">
                <?php for ($row = 1; $row <= 2; ++$row):?>
                    <div style="width: 5000px;">
                        <?php 
                            $totalCol = 0;
                            while ($totalCol < 12):
                                $col = rand(1, 2);
                                $totalCol += $col;
                                if ($totalCol > 12 && $col == 2) {
                                    $col = 1;
                                }
                                $height = 240;
                                $width = 356;
                                $res = $width * $col . 'x' . $height;
                        ?>
                            <article class="<?php echo ($col == 2) ? 'two' : 'one';?>">
                                <img src="holder.js/<?php echo $res?>">
                                <div class="description">
                                    <time>AAAAAA</time>
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel adipiscing nisl. 
                                        Sed ultrices, elit vitae pulvinar tincidunt, nunc odio vestibulum eros, sit amet semper felis magna id diam
                                    </p>
                                    <a href="#" class="read-more btn btn-default">Read More</a>
                                </div>
                            </article>
                        <?php endwhile;?>
                    </div>
                <?php endfor;?>
            </div>
        </div>
        <div class="popular main-block hide">
            <h1 class="block-title"><span>POPULAR POSTS</span></h1>
        </div>
        <div class="customers main-block container">
            <div class="customers-content row">
                <div class="col-md-2"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE"></a></div>
                <div class="col-md-2"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE"></a></div>
                <div class="col-md-2"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE"></a></div>
                <div class="col-md-2"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE"></a></div>
                <div class="col-md-2"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE"></a></div>
                <div class="col-md-2"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE"></a></div>
            </div>
        </div>
        <div class="contact-info main-block container">
            <h1 class="block-title"><span>Contact Us</span></h1>
            <div class="contact-info-container row">
                <div class="contact col-md-4">
                    <ul>
                        <li><a class="logo"><img src="holder.js/300x100"></a></li>
                        <li>
                            <span class="glyphicon glyphicon-map-marker"></span>
                            <p>702 Anh Minh Building, Hoang Cau Str, Dong Da Dist, Hanoi.</p>
                        </li>
                        <li class="phone">
                            <span class="glyphicon glyphicon-phone-alt"></span>
                            <p>xxx-xxx-xxxx</p>
                        </li>
                        <li class="mail">
                            <span class="glyphicon glyphicon-envelope"></span>
                            <p><a href="mailto:contact@sample.domain">contact@sample.domain</a></p>
                        </li>
                        <li class="website">
                            <span class="glyphicon glyphicon-globe"></span> 
                            <p><a href="wwwsampledomain.vn">wwwsampledomain.vn</a></p>
                        </li>
                    </ul>
                </div>
                <div class="map col-md-4">
                    <img src="holder.js/300x400">
                </div>
                <div class="fanpage col-md-4">
                    <img src="holder.js/300x400" class="pull-right">
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in nulla sapien, consectetur dictum arcu.<br>Praesent justo felis, volutpat in mi vitae</p>
            <ul class="social-link nav nav-pills">
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
            </ul>
        </div>
    </footer>


    <!-- JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
    <script src="assets/js/jquery.mousewheel.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    	$(".latest-content").niceScroll({
    		cursorcolor: "#c71c2e",
            cursorwidth:"16px",
//             cursorborder:"none",
            cursorborderradius:"0px",
            /* cursoropacitymin:"1", */
            background:"#f0f3f4",
            railpadding: {top:0,right:0,left:0,bottom:0}
    	});
        
    	$(".latest-content").mousewheel(function(event, delta, deltaX, deltaY) {
    		this.scrollLeft -= (delta * 30);
    		if (delta < 0) {
    		} else if (delta > 0) {
    		}
    		return false;
	    });
    });
    </script>
</body>
</html>