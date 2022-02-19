<header class="main-header header-style-one">
	<!-- Header Upper -->
	<div class="header-upper">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<div class="logo-box clearfix">
					<div class="logo" style="    padding: 0px 16px;">
						<a href="{{url('./')}}" title=""><img src="{{asset('storage/app/public')}}/{{setting('site.logo')}}" alt=""></a>
					</div>
				</div>
				<!--Nav-->
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md navbar-light">
						<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class=""><a href="{{url('./')}}">Home</a>
								<li class="dropdown"><a href="{{url('./')}}">Services</a>
									<ul>
									<li><a href="{{url('./social-media-management')}}">Social Media</a></li>
                                    <li><a href="{{url('./web-app-developement')}}">Web/App Development</a></li>
                                    <li><a href="{{url('./documentary')}}">Documentary</a></li>
                                    <!--<li><a href="{{url('./digital')}}">Digital Services</a></li>-->
                                    <li><a href="{{url('./election-management')}}">Election Management</a></li>
                                    <li><a href="{{url('./election-war-room')}}">Election War Room</a></li>
                                    <li><a href="{{url('./live-broadcasting')}}">Live Broadcasting</a></li>
                                    <li><a href="{{url('./political-research')}}">Political Research</a></li>
                                    <li><a href="{{url('./political-call-center')}}">Political Call Center</a></li>
                                    <!--<li><a href="{{url('./website-app-email')}}">Website/App/Email</a></li>-->
                                    
									</ul>
								</li>
								<li class="dropdown"><a href="./list-parliament-member">Politicians</a>
									<ul>
                                        <li><a href="{{url('./list-legislative-assembly-member')}}">MLAs</a></li>
                                        <li><a href="{{url('./list-parliament-member')}}">MPs</a></li>
									</ul>
								</li>
								
								<li class="dropdown"><a href="./image-gallery">Gallery</a>
									<ul>
                                        <li><a href="{{url('./image-gallery')}}">Image Gallery</a></li>
                                        <li><a href="{{url('./video-gallery')}}">Video Gallery</a></li>
									</ul>
								</li>
                                <li><a href="{{url('./news')}}">News</a></li>
                                <li><a href="{{url('./about')}}">About Us</a></li>
                                <li><a href="{{url('./contact')}}">Contact</a></li>
							</ul>
						</div>
					</nav>
				</div>
				<!--Other Links-->
				<div class="other-links clearfix">
					<!--Social Links-->
					<div class="social-links-one">
						<ul class="clearfix">
							<li><a href="#" class="has-tooltip" style="display: inherit;"><span class="fab fa-facebook-f"></span>
									<div class="c-tooltip">
										<div class="tooltip-inner">Facebook</div>
									</div></a></li>
							<li><a href="#" class="has-tooltip"  style="display: inherit;"><span class="fab fa-twitter"></span>
									<div class="c-tooltip">
										<div class="tooltip-inner">Twitter</div>
									</div></a></li>
							<li><a href="#" class="has-tooltip"  style="display: inherit;"><span class="fab fa-linkedin-in"></span>
									<div class="c-tooltip">
										<div class="tooltip-inner">Linkedin</div>
									</div></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Header Upper-->
	<!-- Sticky Header  -->
	<div class="sticky-header">
		<div class="auto-container clearfix">
			<!--Logo-->
			<div class="logo pull-left">
				<a href="{{url('./')}}" title=""><img src="{{asset('storage/app/public')}}/{{setting('site.logo')}}"></a>
			</div>
			<!--Right Col-->
			<div class="pull-right">
				<!-- Main Menu -->
				<nav class="main-menu clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</nav>
				<!-- Main Menu End-->
			</div>
		</div>
	</div>
	<!-- End Sticky Menu -->
	<!-- Mobile Menu  -->
	<div class="mobile-menu">
		<div class="menu-backdrop"></div>
		<div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
		<nav class="menu-box">
			<div class="nav-logo">
				<a href="{{url('./')}}" style="font-size: 24px"><img src="{{asset('storage/app/public')}}/{{setting('site.logo')}}" style="width: 120px"></a>
			</div>
			<div class="menu-outer">
				<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			</div>
			<!--Social Links-->
			<div class="social-links">
				<ul class="clearfix">
					<li><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
					<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
					<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					<li><a href="#"><span class="fab fa-youtube"></span></a></li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- End Mobile Menu -->
</header>