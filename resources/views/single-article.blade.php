@extends('layouts.app')

@section('header')
<title>{{$recipe[0]->title}} - {{env('APP_NAME')}}</title>
<style>
	.pattern-overlay-4::before {
		background: url('https://foodhub.modeltheme.com/wp-content/uploads/2018/01/blogpost01-1400x500.jpg');
		filter: brightness(0.2);
	}

	.info-recipe {
		border-bottom: 2px dotted #EEEEEE;
		padding-bottom: 15px;
		font-weight: 600;
		color: #3A3A3A;
		margin-bottom: 15px;
	}

	recipe-info.single-recipe-information {
		background: #FFFFFF;
		box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.07);
		border-radius: 12px;
		padding: 20px 45px;
	}

	.recipe-top {
		border-top: 1px solid #EEEEEE;
		padding-top: 15px;
	}

	.recipe-info i {
		color: #3A3A3A;
		margin-right: 10px;
	}
	.info-aditional {
		float: right;
		letter-spacing: normal;
		color: #3A3A3A;
		font-weight: 400;
	}

	.recipe-info.single-recipe-information {
		background: #FFFFFF;
		box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.07);
		border-radius: 12px;
		padding: 20px 45px;
	}
	.single-recipe-information a {
		color: #151515;
	}
	.ico-info {
		margin: 0px;
    	margin-bottom: 30px;
	}

	.listing-thumbnail {
		position: relative;
		overflow: hidden;
		border-radius: 10px;
	}

	.post-name-listings {
		font-size: 18px;
		font-weight: 700;
		color: #242424;
		margin: 16px;
	}
</style>
@endsection

@section('content')
    <!-- =======================
	Main Banner -->
	<section class="p-0 bg-grad pattern-overlay-4 center py-7" 
	style="height: 350px;">
		<div class="container h-100">
			<div class="row d-flex h-100">
				<div class="col-sm-10 col-md-8 justify-content-center align-self-center align-items-start mx-auto all-text-white mt-5 mt-md-0">
					<div class="text-center">
						<h1 class="innerpage-title">{{$recipe[0]->title}}</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
    Main banner -->
    
    <section class="blog-page">
		<div class="container">
			<div class="row">
				<!-- blog start -->
				<div class="col-md-12 mx-auto">
					<!-- Post item  with image-->
					<div class="post-item">
						<div class="single-listing-info-section">
							<div class="container">
							  <div class="row">
								<div class="col-md-8 left-info-section mt-3">
									<h3 class="mt_listing_content_heading ">Description</h3>
								  	<div class="mt_listing_content_description">
										  <p>{!!$recipe[0]->desc!!}</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-12 col-md-12">
										<h5 class="mb-4"></h5>
										<ul class="nav nav-tabs tab-with-center-icon justify-content-center nav-justified">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#tab-8-1"> <i class="ti-panel"></i> Ingredients </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#tab-8-2"> <i class="ti-palette"></i> Steps </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#tab-8-3"> <i class="ti-gift"></i> Media </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#tab-8-2"> <i class="ti-palette"></i> Author </a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane show active" id="tab-8-1">
											{!!$recipe[0]->ingredients!!}
											</div>
											<div class="tab-pane" id="tab-8-2">
											{!!$recipe[0]->instructions!!}
											</div>
											<div class="tab-pane text-center" id="tab-8-3" >
											<iframe width="600" height="300" src="https://www.youtube.com/embed/{{$recipe[0]->video_link}}?modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 right-info-section">
								  <div class="col-md-12 recipe-info single-recipe-information">
									<p class="info-recipe recipe-top"><i class="fa fa-folder"></i>Category<span class="info-aditional"><a href="https://foodhub.modeltheme.com/categories/burgers/" rel="tag">{{$recipe[0]->category}}</a></span></p>
									<p class="info-recipe"><i class="fa fa-hourglass-half"></i>Total Time<span class="info-aditional"><a href="https://foodhub.modeltheme.com/cooking-time/60-min/" rel="tag">{{$recipe[0]->time}}</a></span></p>
									<p class="info-recipe"><i class="fa fa-tachometer"></i>Difficulty<span class="info-aditional"><a href="https://foodhub.modeltheme.com/difficulty/advanced/" rel="tag">{{$recipe[0]->difficulty}}</a></span></p>
									<p class="info-recipe"><i class="fa fa-cutlery"></i>Yields<span class="info-aditional"><a href="https://foodhub.modeltheme.com/yields/2-servings/" rel="tag">{{$recipe[0]->yield}}</a></span></p>
									<p class="info-recipe"><i class="fa fa-globe"></i>Cuisine<span class="info-aditional"><a href="https://foodhub.modeltheme.com/cuisines/american/" rel="tag">Indian</a></span></p>
									</div>
								</div>
							  </div>
							</div>
						  </div>
					</div>
					<!-- blog End -->
				</div>

				<div class="col-12 col-lg-12 mx-auto mt-6">
					<div class="title text-center">
						<span class="pre-title">Check out our services</span>
						<h2>Premium and royal service</h2>
						<p class="mb-0">We are an insight and behavior driven creative marketing agency. A Full Service Digital Creative Agency Specializing in: Video Production, Web Design, Branding, Brand Strategy</p>
					</div>
				</div>
				<div class=" col-md-3">
					<div class="ico-info">
						<div class="blog_custom_listings">
  						<div class="listing-thumbnail">
							<a href="#" class="relative">
									<img src="https://foodhub.modeltheme.com/wp-content/uploads/2019/12/homemade-chocolate-cake-1-360x360.jpg" 
									class="img-responsive" alt="Chocolate Cake Cookies in Glaze">
							</a>
						</div>
													
						<h4 class="post-name-listings">Chocolate Cake Cookies</h4>
						
						</div>
					  </div>
				</div>
				<div class=" col-md-3">
					<div class="ico-info">
						<div class="blog_custom_listings">
  						<div class="listing-thumbnail">
							<a href="#" class="relative">
									<img src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_massaman_soup-1-360x360.jpg" 
									class="img-responsive" alt="Chocolate Cake Cookies in Glaze">
							</a>
						</div>
													
						<h4 class="post-name-listings">Chocolate Cake Cookies</h4>
						
						</div>
					  </div>
				</div>
				<div class=" col-md-3">
					<div class="ico-info">
						<div class="blog_custom_listings">
  						<div class="listing-thumbnail">
							<a href="#" class="relative">
									<img src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_lobster_author-1-360x360.jpg" 
									class="img-responsive" alt="Chocolate Cake Cookies in Glaze">
							</a>
						</div>
													
						<h4 class="post-name-listings">Chocolate Cake Cookies</h4>
						
						</div>
					  </div>
				</div>
				<div class=" col-md-3">
					<div class="ico-info">
						<div class="blog_custom_listings">
  						<div class="listing-thumbnail">
							<a href="#" class="relative">
							<img src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/red-sea-perch-or-red-grouper-baked-with-potatoes-G6YVSLE-360x360.jpg" 
							class="img-responsive" alt="Chocolate Cake Cookies in Glaze">
							</a>
						</div>
													
						<h4 class="post-name-listings">Chocolate Cake Cookies</h4>
						
						</div>
					  </div>
				</div>
			</div>
		</div>
		
		<!-- blog End -->
	</section>
@endsection