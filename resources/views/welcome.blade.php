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
<section class="banner-section banner-one">
<div class="banner-carousel owl-theme owl-carousel">
	<div class="slide-item">
		<div class="image-layer" style=""></div>
		<div class="">
			<div class="content-box">
				<div class="content clearfix">
					<div class="inner">
					    <img src="./images/background/banner1.jpg" >
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slide-item">
		<div class="image-layer" style=""></div>
		<div class="">
			<div class="content-box">
				<div class="content clearfix">
				    <img src="./images/background/banner2.jpeg">
				</div>
			</div>
		</div>
	</div>
	<div class="slide-item">
		<div class="image-layer" style=""></div>
		<div class="">
			<div class="content-box">
				<div class="content clearfix">
				    <img src="./images/background/banner3.jpg">
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="welcome-section">
<div class="auto-container">
    <div class="sec-title with-separator centered">
			<h2>Who We Are</h2>
			<div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
	</div>
	<div class="row">
	    <div class="col-md-6">
	           <div>
    		    Netatop is a specialist political advertising network, digital agency and consultancy with over two decades of experience in political management. Founded by political campaign veterans, our leadership team has extensive experience working with leading progressive organizations in the political technology space at all levels..
    		</div><br>
    		<div>
	    We’re a diverse team of smart, driven and talented marketers helping political parties and elected officials connect with voters and stay ahead of the race. We pioneer the best integration of data and technology to persuade audiences and deliver wins for progressive candidates with the most effective and affordable digital marketing campaigns in politics. 
	</div><br>
		<div>
	    Our goal at Netatop is to help our clients navigate and create change. The company designs and develops a campaign post an extensive studies and surveys of the constituency at ground level.
Depending on the client’s requirement we can produce all kinds of print, video and digital communications. Our services include political election research, live broadcasting, website and mobile application development, social media marketing and grassroot messaging, vote bank analysis through surveys and feedback. 

	</div>
	    </div>
	    <div class="col-md-6">
	        <img src="https://www.indianpac.com/wp-content/uploads/2019/03/AP19_01_01-1.jpg">
	    </div>
	</div>
</div>
</section>
<section class="services-section">
            <div class="image-left">
                <div class="image-layer" style="background-image: url(https://www.deccanherald.com/sites/dh/files/styles/article_detail/public/article_images/2015/07/28/491991.jpg?itok=uS4s6Wox);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="featured-service-block col-xl-4 col-lg-12 col-md-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="#"><img styke="height: 415px" src="https://www.deccanherald.com/sites/dh/files/styles/article_detail/public/article_images/2015/07/28/491991.jpg?itok=uS4s6Wox" alt=""></a>
                            </figure>
                            <div class="lower-box">
                                <h3><a href="./services">Explore Our Other Services</a></h3>
                                <div class="more-link"><a href="./services">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="column col-xl-8 col-lg-12 col-md-12">
                        <div class="col-inner">
                            <div class="row clearfix">
                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="icon-box"><span class="icon flaticon-chat"></span></div>
                                            <div class="content">
                                                <h4><a href="./">Social Media Management</a></h4>
                                                <div class="text">Blinded by desire, that they cannot foresee belongs which through shrinking.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="icon-box"><span class="icon flaticon-museum"></span></div>
                                            <div class="content">
                                                <h4><a href="./">Election War Room</a></h4>
                                                <div class="text">Foresee the pain and trouble that are bound to ensue; and equal blame belongs.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="icon-box"><span class="icon flaticon-support"></span></div>
                                            <div class="content">
                                                <h4><a href="./">Election Survey</a></h4>
                                                <div class="text">Trouble that are bound to ensue and equal to those city work who fail their duty.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="content-box">
                                            <div class="icon-box"><span class="icon flaticon-bar-chart-2"></span></div>
                                            <div class="content">
                                                <h4><a href="./">Live Broadcasting</a></h4>
                                                <div class="text">Our power of choice untrammelled and when nothing prevents what like best. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section class="about-section">
<div class="image-layer" ></div>
<div class="pattern-layer" style="background-image: url(images/background/pattern-1.png);"></div>
<div class="auto-container">
	<div class="content-box">
		<div class="content">
			<div class="sec-title light">
				<h2>We are the <br>“Political Management Firm”</h2>
			</div>
			<div class="upper-text clearfix"><span class="big-letter">N</span>etatop has a professional &  skilled team to boost up your image & reputation. Our team provides a high- level election survey that can change election result.</div>
			<!--<div class="text">Netatop has a professional &  skilled team to boost up your image & reputation. Our team provides a high- level election survey that can change election result.</div>-->
			<!--<div class="signature"><img src="images/resource/signature.png" alt=""></div>-->
			<!--<div class="info">-->
			<!--	<div class="name">Brendon Garrey</div>-->
			<!--	<div class="designation">London city mayor</div>-->
			<!--</div>-->
		</div>
		<div class="quote-box">
			<div class="round-point">+</div>
			<div class="inner">
				<div class="icon-one"><span class="flaticon-left-quote"></span></div>
				<div class="icon-two"><span class="flaticon-left-quote"></span></div>
				<div class="text">Reshaping Participatory Democracy.</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="team-section">
	<div class="auto-container">
		<div class="sec-title with-separator centered">
			<h2>Meet Our Clients</h2>
			<div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
		</div>
		<div class="team-carousel owl-theme owl-carousel owl-loaded owl-drag">
			<div class="owl-stage-outer">
			    <div class="owl-stage" style="transform: translate3d(-2047px, 0px, 0px); transition: all 0.5s ease 0s; width: 3510px;">
    			    <div class="owl-item" style="width: 292.5px;">
    			        <div class="team-block">
            				<div class="inner-box">
            					<div class="image-box">
            						<figure class="image"><img src="https://www.searchpng.com/wp-content/uploads/2019/01/Bharatiya-Janata-Party-Logo-PNG.png" alt=""></figure>
            					</div>
            				</div>
    			        </div>
    		        </div>
        			<div class="owl-item" style="width: 292.5px;">
        		        <div class="team-block">
            				<div class="inner-box">
            					<div class="image-box">
            						<figure class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7nQIwRO6TmDIV2E8nELqqbzZ5zvZVDR0Yuw&usqp=CAU" alt=""></figure>
            					</div>
            				</div>
        			    </div>
        		    </div>
        		    <div class="owl-item" style="width: 292.5px;">
        		        <div class="team-block">
            				<div class="inner-box">
            					<div class="image-box">
            						<figure class="image"><img src="https://iconape.com/wp-content/png_logo_vector/aap-aam-aadami-party-logo.png" alt=""></figure>
            					</div>
            				</div>
        			    </div>
        		    </div>
        		    <div class="owl-item" style="width: 292.5px;">
        		        <div class="team-block">
            				<div class="inner-box">
            					<div class="image-box">
            						<figure class="image" ><img src="https://www.jagranimages.com/images/newimg/18022021/18_02_2021-ljp_21382611.jpg" alt=""></figure>
            					</div>
            				</div>
        			    </div>
        		    </div>
        		    <div class="owl-item" style="width: 292.5px;">
        		        <div class="team-block">
            				<div class="inner-box">
            					<div class="image-box">
            						<figure class="image" ><img src="https://bsmedia.business-standard.com/media-handler.php?mediaPath=http://bsmedia.business-standard.com/_media/bs/img/article/2016-08/30/full/1472555473-3624.jpg&width=1200" alt=""></figure>
            					</div>
            				</div>
        			    </div>
        		    </div>
        		    <div class="owl-item" style="width: 292.5px;">
        		        <div class="team-block">
            				<div class="inner-box">
            					<div class="image-box">
            						<figure class="image" ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Elephant_Bahujan_Samaj_Party.svg/1200px-Elephant_Bahujan_Samaj_Party.svg.png" alt=""></figure>
            					</div>
            				</div>
        			    </div>
        		    </div>
		        </div>
	        </div>
        </div>
	</div>
</section>
<section class="get-info-section">
	<div class="auto-container">
		<div class="sec-title with-separator centered">
			<h2>For change. For impact. For making a difference.<br> Get in touch with our team!</h2>
			<div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>
		</div>
		<div class="row clearfix">
			<div class="left-col col-lg-6 col-md-12 col-sm-12">
				<div class="inner">
					<div class="accordion-box">
						<!--Block-->
						<div class="accordion block current">
							<div class="acc-btn">Top Election Management Company In India?
								<div class="icon flaticon-cross"></div>
							</div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">Netatop is a Top Election Management Company In India. We are working with Political leaders and parties to make election management easier. We help the leaders to win elections through their services.</div>
								</div>
							</div>
						</div>
						<!--Block-->
						<div class="accordion block">
							<div class="acc-btn">When to Start Your Election Management Service Campaign For Upcoming elections?
								<div class="icon flaticon-cross"></div>
							</div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">We all know that the Vidhan Sabha election phase is going to start soon and before that all the political parties and leaders are going to start their election campaign. Therefore, you can start your election management service campaign without wasting all your time.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-col col-lg-6 col-md-12 col-sm-12">
				<div class="inner">
					<div class="default-form form-box">
						<form method="GET" action="{{url('/contact/create')}}">
							<div class="row clearfix">
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<div class="field-inner">
										<input type="text" name="name" placeholder="Name" required="" value="">
									</div>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<div class="field-inner">
										<input type="email" name="email" placeholder="Email" required="" value="">
									</div>
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<div class="field-inner">
										<textarea name="message" placeholder="Enter your question..." required=""></textarea>
									</div>
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Submit Now</span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection