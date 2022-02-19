@extends('layouts.app')

@section('header')
<title>Recipes- {{env('APP_NAME')}}</title>
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
<style>
	 .masonry-column {
        padding: 0 1px;
        }

        .masonry-column .block {
        margin: 5px 1px;
        }

        .masonry-column .block .thumbnail {
            padding: 4px;
        }
        .masonry-column .block .thumbnail .image {
            margin-bottom: 5px !important;
            width: 100% !important;
            border-radius: 15px;
        }
        .block-heading {
            padding: 7px 19px 16px;
		}
		
		.item-bg {
			visibility: visible; 
			animation-duration: 0.8s; 
			animation-delay: 0s; 
			animation-name: fadeInLeft; 
			height: 240px; 
			border-radius: 10px; 
			background: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_massaman_soup-1-500x300.jpg');
		}
		.item-heading {
			position: fixed;
			bottom: 30px	
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
						<h1 class="innerpage-title">Category: Sweets</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
    Main banner -->
    
    <section>
        <div class="container">
		<div class="row masonry-grid">
              <div class="col-md-6 col-lg-4 masonry-column">
                  <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                      <div class="thumbnail">
                          <img class="image" src="{{asset('images/blog-pic01-625x375.jpg')}}">
                      </div>
                      <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p> -->
                      </a>
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/homemade-chocolate-cake-1-360x360.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p> -->
                    </a>
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/recipe_massaman_soup-1-500x350.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p> -->
                    </a>
              </div>
              <div class="col-md-6 col-lg-4 masonry-column">
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/homemade-chocolate-cake-1-360x360.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p>     -->
                </a>
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/recipe_lobster_author-1-700x600.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p>     -->
                </a>
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/red-sea-perch-or-red-grouper-baked-with-potatoes-G6YVSLE-600x600.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p>     -->
                </a>
              </div>
              <div class="col-md-6 col-lg-4 masonry-column">
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/recipes-24-500x350.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p>     -->
                </a>
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/recipes-23-500x350.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p>     -->
                </a>
                <a href="{{url('./recipe/no-more-dry-skin-this-winter-with-these-simple-tips')}}" class="block">
                    <div class="thumbnail">
                        <img class="image" src="{{asset('images/recipes-17-700x600.jpg')}}">
                    </div>
                    <h5 class="block-heading">Chocolate Cake Cookies</h5>
                      <!-- <p>{{substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus repellat, totam, soluta ratione veniam, exercitationem sunt quibusdam corrupti qui quisquam voluptate non? Nam dolore iste rem culpa provident ullam?', 0, rand(130, 290))}}</p>     -->
                </a>
              </div>
            </div>
		</div>
	</section>
	<section class="pt-0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<nav>
						<ul class="pagination justify-content-center">
							<li class="page-item disabled"> <span class="page-link">Prev</span> </li>
							<li class="page-item active"> <span class="page-link bg-grad"> 1 </span> </li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a> </li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>	
@endsection