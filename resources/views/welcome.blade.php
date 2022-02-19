@extends('layouts.app')
@section('header')
    <title>Homepage - {{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keyword" content="{{setting('site.keyword')}}">
    <style>
        .team-block .image, .team-block .image img {
                padding: 6px 40px;
        }
        .banner-carousel .content-box .content {
            display: contents;
        }
        .banner-carousel .slide-item {
            padding: 0px;
        }
        .banner-carousel .content-box {
            padding: 0px;
        }
        .banner-carousel .content-box .inner {
            max-width: 100%;
        }
        
        .banner-carousel .content-box {
            height: auto;
        }
        
        .banner-carousel .content-box .content img {
            height: 450px;
        }
        @media only screen and (max-width: 599px) {
            .banner-carousel .content-box, .banner-carousel-two .content-box {
                height: auto;
            }    
        }
        
    </style>
@endsection

@section('content')
<!-- Home Design -->
<section class="home-three bg-img3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="home3_home_content">
						<h1>Your Property, Our Priority.</h1>
						<h4>From as low as $10 per day with limited time offer discounts</h4>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="home3_home_content">
						<a class="popup_video_btn popup-iframe popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y"><i class="flaticon-play"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="home_adv_srch_opt home3">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
							</li>
						</ul>
						<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="home1-advnc-search home3">
									<ul class="h1ads_1st_list mb0">
										<li class="list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
										    </div>
										</li>
										<li class="list-inline-item">
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li class="list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li class="list-inline-item">
											<div class="small_dropdown2 home3">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
												    	<span id="slider-range-value1"></span>
														<span id="slider-range-value2"></span>
													    <div id="slider"></div>
														<!-- <input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div> -->
												    </div>
											  	</div>
											</div>
										</li>
										<li class="custome_fields_520 list-inline-item">
											<div class="navbered">
											  	<div class="mega-dropdown home3">
												    <span id="show_advbtn" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
												    <div class="dropdown-content">
												      	<div class="row p15">
												      		<div class="col-lg-12">
												      			<h4 class="text-thm3">Amenities</h4>
												      		</div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck2">
																			<label class="custom-control-label" for="customCheck2">Lawn</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3">
																			<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label" for="customCheck4">Barbeque</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5">
																			<label class="custom-control-label" for="customCheck5">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6">
																			<label class="custom-control-label" for="customCheck6">TV Cable</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck7">
																			<label class="custom-control-label" for="customCheck7">Dryer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck8">
																			<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck9">
																			<label class="custom-control-label" for="customCheck9">Washer</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck10">
																			<label class="custom-control-label" for="customCheck10">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck11">
																			<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12">
																			<label class="custom-control-label" for="customCheck12">WiFi</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck13">
																			<label class="custom-control-label" for="customCheck13">Laundry</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck14">
																			<label class="custom-control-label" for="customCheck14">Sauna</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck15">
																			<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												      	</div>
												      	<div class="row p15 pt0-xsd">
												      		<div class="col-lg-11 col-xl-10">
												      			<ul class="apeartment_area_list mb0">
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Bathrooms</option>
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																				<option>6</option>
																				<option>7</option>
																				<option>8</option>
																			</select>
																		</div>
												      				</li>
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Bedrooms</option>
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																				<option>6</option>
																				<option>7</option>
																				<option>8</option>
																			</select>
																		</div>
												      				</li>
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Year built</option>
																				<option>2013</option>
																				<option>2014</option>
																				<option>2015</option>
																				<option>2016</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																			</select>
																		</div>
												      				</li>
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Built-up Area</option>
																				<option>Adana</option>
																				<option>Ankara</option>
																				<option>Antalya</option>
																				<option>Bursa</option>
																				<option>Bodrum</option>
																				<option>Gaziantep</option>
																				<option>İstanbul</option>
																				<option>İzmir</option>
																				<option>Konya</option>
																			</select>
																		</div>
												      				</li>
												      			</ul>
												      		</div>
												      		<div class="col-lg-1 col-xl-2">
												      			<div class="mega_dropdown_content_closer">
													      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp">Hide</span></h5>
												      			</div>
												      		</div>
												      	</div>
												    </div>
												</div>
											</div>
										</li>
										<li class="list-inline-item">
											<div class="search_option_button">
											    <button type="submit" class="btn btn-thm3">Search</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<div class="home1-advnc-search home3">
									<ul class="h1ads_1st_list mb0">
										<li class="list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter keyword...">
										    </div>
										</li>
										<li class="list-inline-item">
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li class="list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Location">
										    	<label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li class="list-inline-item">
											<div class="small_dropdown2 home3">
											    <div id="prncgs2" class="btn dd_btn">
											    	<span>Price</span>
											    	<label><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div>
												    </div>
											  	</div>
											</div>
										</li>
										<li class="custome_fields_520 list-inline-item">
											<div class="navbered">
											  	<div class="mega-dropdown home3">
												    <span id="show_advbtn2" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
												    <div class="dropdown-content">
												      	<div class="row p15">
												      		<div class="col-lg-12">
												      			<h4 class="text-thm3">Amenities</h4>
												      		</div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck16">
																			<label class="custom-control-label" for="customCheck16">Air Conditioning</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck17">
																			<label class="custom-control-label" for="customCheck17">Lawn</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck18">
																			<label class="custom-control-label" for="customCheck18">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck19">
																			<label class="custom-control-label" for="customCheck19">Barbeque</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck20">
																			<label class="custom-control-label" for="customCheck20">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck21">
																			<label class="custom-control-label" for="customCheck21">TV Cable</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck22">
																			<label class="custom-control-label" for="customCheck22">Dryer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck23">
																			<label class="custom-control-label" for="customCheck23">Outdoor Shower</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck24">
																			<label class="custom-control-label" for="customCheck24">Washer</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck25">
																			<label class="custom-control-label" for="customCheck25">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck26">
																			<label class="custom-control-label" for="customCheck26">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck27">
																			<label class="custom-control-label" for="customCheck27">WiFi</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
													        <div class="col-xxs-6 col-sm col-lg col-xl">
												                <ul class="ui_kit_checkbox selectable-list">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck28">
																			<label class="custom-control-label" for="customCheck28">Laundry</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck29">
																			<label class="custom-control-label" for="customCheck29">Sauna</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck30">
																			<label class="custom-control-label" for="customCheck30">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												      	</div>
												      	<div class="row p15 pt0-xsd">
												      		<div class="col-lg-11 col-xl-10">
												      			<ul class="apeartment_area_list mb0">
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Bathrooms</option>
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																				<option>6</option>
																				<option>7</option>
																				<option>8</option>
																			</select>
																		</div>
												      				</li>
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Bedrooms</option>
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																				<option>6</option>
																				<option>7</option>
																				<option>8</option>
																			</select>
																		</div>
												      				</li>
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Year built</option>
																				<option>2013</option>
																				<option>2014</option>
																				<option>2015</option>
																				<option>2016</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																			</select>
																		</div>
												      				</li>
												      				<li class="list-inline-item">
																		<div class="candidate_revew_select">
																			<select class="selectpicker w100 show-tick">
																				<option>Built-up Area</option>
																				<option>Adana</option>
																				<option>Ankara</option>
																				<option>Antalya</option>
																				<option>Bursa</option>
																				<option>Bodrum</option>
																				<option>Gaziantep</option>
																				<option>İstanbul</option>
																				<option>İzmir</option>
																				<option>Konya</option>
																			</select>
																		</div>
												      				</li>
												      			</ul>
												      		</div>
												      		<div class="col-lg-1 col-xl-2">
												      			<div class="mega_dropdown_content_closer">
													      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn2" class="curp">Hide</span></h5>
												      			</div>
												      		</div>
												      	</div>
												    </div>
												</div>
											</div>
										</li>
										<li class="list-inline-item">
											<div class="search_option_button">
											    <button type="submit" class="btn btn-thm3">Search</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property mt80 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title mb40">
						<h2>Featured Properties</h2>
						<p>Handpicked properties by our team. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_home3_slider">
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="property-city" class="property-city pt0 pb30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title">
						<h2>Find Properties in These Cities</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc7.jpg" alt="pc7.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Miami</h4>
								<p>24 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc8.jpg" alt="pc8.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Los Angeles</h4>
								<p>18 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc9.jpg" alt="pc9.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>New York</h4>
								<p>89 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc10.jpg" alt="pc10.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Florida</h4>
								<p>47 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc11.jpg" alt="pc11.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Orlando</h4>
								<p>89 Properties</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Search -->
	<section id="property-search" class="property-search bg-img4">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="search_smart_property text-center">
						<h2>Search Smarter, From Anywhere</h2>
						<p>Power your search with our Resideo real estate platform, for timely listings and a seamless experience.</p>
						<button class="btn ssp_btn">Search Now</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="best-property" class="best-property pt100 pb0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title">
						<h2>Best Property Value</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="feat_property home3">
						<div class="thumb">
							<img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
							<div class="thmb_cntnt">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">$13,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Villa</p>
								<h4>Gorgeous Villa Bay View</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feat_property home3">
						<div class="thumb">
							<img class="img-whp" src="images/property/fp5.jpg" alt="fp5.jpg">
							<div class="thmb_cntnt">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item"><a href="#">Featured</a></li>
								</ul>
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">$13,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Villa</p>
								<h4>Gorgeous Villa Bay View</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feat_property home3">
						<div class="thumb">
							<img class="img-whp" src="images/property/fp6.jpg" alt="fp6.jpg">
							<div class="thmb_cntnt">
								<ul class="tag mb0">
									<li class="list-inline-item"><a href="#">For Rent</a></li>
									<li class="list-inline-item dn"></li>
								</ul>
								<ul class="icon mb0">
									<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								</ul>
								<a class="fp_price" href="#">$13,000<small>/mo</small></a>
							</div>
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Villa</p>
								<h4>Luxury Family Home</h4>
								<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
								<ul class="prop_details mb0">
									<li class="list-inline-item"><a href="#">Beds: 4</a></li>
									<li class="list-inline-item"><a href="#">Baths: 2</a></li>
									<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Agents -->
	<section id="our-agents" class="our-agents pt40 pb30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title">
						<h2>Our Agents</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
					<div class="our_agent">
						<div class="thumb">
							<img class="img-fluid w100" src="images/team/5.jpg" alt="5.jpg">
							<div class="overylay">
								<ul class="social_icon">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="details">
							<h4>Jennifer Barton</h4>
							<p>Broker <a class="float-right" href="#">4.5 <i class="fa fa-star color-golden"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
					<div class="our_agent">
						<div class="thumb">
							<img class="img-fluid w100" src="images/team/6.jpg" alt="6.jpg">
							<div class="overylay">
								<ul class="social_icon">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="details">
							<h4>Kathleen Myers</h4>
							<p>Agent <a class="float-right" href="#">5 <i class="fa fa-star color-golden"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
					<div class="our_agent">
						<div class="thumb">
							<img class="img-fluid w100" src="images/team/7.jpg" alt="7.jpg">
							<div class="overylay">
								<ul class="social_icon">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="details">
							<h4>Mariusz Ciesla</h4>
							<p>Broker <a class="float-right" href="#">3.5 <i class="fa fa-star color-golden"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
					<div class="our_agent">
						<div class="thumb">
							<img class="img-fluid w100" src="images/team/8.jpg" alt="8.jpg">
							<div class="overylay">
								<ul class="social_icon">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="details">
							<h4>Helene Powers</h4>
							<p>Broker <a class="float-right" href="#">4.5 <i class="fa fa-star color-golden"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
					<div class="our_agent">
						<div class="thumb">
							<img class="img-fluid w100" src="images/team/9.jpg" alt="9.jpg">
							<div class="overylay">
								<ul class="social_icon">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="details">
							<h4>Jade Northon</h4>
							<p>Agent <a class="float-right" href="#">1.5 <i class="fa fa-star color-golden"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
					<div class="our_agent">
						<div class="thumb">
							<img class="img-fluid w100" src="images/team/10.jpg" alt="10.jpg">
							<div class="overylay">
								<ul class="social_icon">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="details">
							<h4>Kevin Harris</h4>
							<p>Agent <a class="float-right" href="#">3.5 <i class="fa fa-star color-golden"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
@endsection