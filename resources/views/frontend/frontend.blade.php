<!DOCTYPE html>

<html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,700;0,800;1,100;1,400;1,500;1,700;1,800&family=Raleway:ital,wght@0,100;0,400;0,500;0,700;0,800;1,100;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/assets/')}}/css/style.css">
	<link rel="stylesheet" href="{{asset('public/assets/')}}/css/all.min.css">
	<link rel="stylesheet" href="{{asset('public/assets/')}}/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{asset('public/assets/')}}/css/responsive.css">
	
<title>HalalBees</title>
 
 </head>
	<body>
		<!-- Header Start Here -->
		<header class="header-area">
			<div class="header boundary fix">
				<div class="logo">
					<a href="">
						<img src="{{asset('public/assets/')}}/images/company-logo-color.png"/>
					</a>
				</div>
				<div class="menu">
					<ul class="text-right">
						<li><a href="">Home</a></li>
						<li><a href="#">List <span id="list_item"></span></a></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- Header End Here -->
		
		<!--banner Start Here -->
		
		
		<section class="welcome-area cover">
			<div class="welcome boundary">
				<div class="welcome-content text-center">
					<p>This is restaurant</p>
					<h2>Best restaurant in sylhet</h2>
					<a href="" class="">details</a>
				</div>
			</div>
		</section>
		<!--banner Start Here -->
		
		<!--About satrt Here -->
		
		<section class="about-area pt-60 pb-60">
			<div class="about boundary fix">
				<div class="about-left">
					<div class="section-title">
						<p>Famous for good food</p>
						<h4>About Us</h4>
					</div>
					<p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur sint occaecat cupidatat. </p>
					<p>Lorem ipsum dolor sit amet, di dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Excepteur sint qui officia deserunt Excepteur sint occaecat cupidatat. </p>
					<a href="#" class="btn">read more</a>
				</div>
				<div class="about-right">
					<img src="{{asset('public/assets/')}}/images/about.jpg"/>
					<img src="{{asset('public/assets/')}}/images/about-1.jpg"/>
				</div>
			</div>
		</section>
		
		<!--About end Here -->
		
		<!-- menu start -->
		<section class="food-menu-area pt-60 pb-60">
			<div class="section-title boundary  fix ">
				<p>Famous for good food</p>
				<h4>Our Menu</h4>
			</div>
			
			<div class="food-menu boundary fix">
				<div class="single-menu">
                    @foreach ($table as $item)
                    
                    
					<div class="food-box">
						{{-- <img src="{{asset('public/assets/')}}/images/breakfast-1.jpg"/> --}}
						<h4>{{$item->name}} <span>Tk. {{$item->price}}</span></h4>
						<p><button type="button" data-id="{{$item->id}}" data-price="{{$item->price}}" class="add_to_list">Add to list</button></p>
					</div>
                    
					@endforeach
				</div>	
			</div>	
			
				
			</div>
			
		</section>
		<!-- menu end -->
		
		<!--galalary start -->
		
		<section class="gallery-area pt-60 pb-60">
			<div class="section-title boundary fix">
				<p>Famous for good food</p>
				<h4>our gallery</h4>
			</div>
			
			<div class="gallery fix boundary">
				<div class="single-gallery">
					<img src="{{asset('public/assets/')}}/images/dessert-1.jpg">
				</div>
				<div class="single-gallery">
					<img src="{{asset('public/assets/')}}/images/dessert-4.jpg">
				</div>
				<div class="single-gallery">
					<img src="{{asset('public/assets/')}}/images/dessert-4.jpg">
				</div>
				<div class="single-gallery">
					<img src="{{asset('public/assets/')}}/images/dessert-5.jpg">
				</div>
				<div class="single-gallery">
					<img src="{{asset('public/assets/')}}/images/dessert-1.jpg">
				</div>
				<div class="single-gallery">
					<img src="{{asset('public/assets/')}}/images/dessert-4.jpg">
				</div>
				
			</div>
			
			
			
			
		</section>
		
		<!--galalary start -->
		
		<div class="blog-area pt-60 pb-60">
			<div class="section-title boundary">
				<p>Famous for good food</p>
				<h4>Latest blog</h4>
			</div>
			
			<div class="blog boundary fix">
				<div class="single-blog">
					<div class="blog-img">
						<img src="{{asset('public/assets/')}}/images/drink-1.jpg" alt="">
					</div>
					<div class="blog-info text-center">
						<ul>
							<li><a href="">admin</a></li>
							<li><a href="">13 Dec</a></li>
							<li><a href="">2020</a></li>
						</ul>
					</div>
					<div class="blog-content">
						<h4>blog title here</h4>
						<p>But I must explain to you how all mistaken idea of denouncing pleasure and praising pain was born and I will give you a full account of the system... </p>
						<a href="" class="box-trans ">read more <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<div class="single-blog">
					<div class="blog-img">
						<img src="{{asset('public/assets/')}}/images/drink-4.jpg" alt="">
					</div>
					<div class="blog-info">
						<ul>
							<li><a href="">admin</a></li>
							<li><a href="">13 Dec</a></li>
							<li><a href="">2020</a></li>
						</ul>
					</div>
					<div class="blog-content">
						<h4>blog title here</h4>
						<p>But I must explain to you how all mistaken idea of denouncing pleasure and praising pain was born and I will give you a full account of the system... </p>
						<a href="" class="box-trans">read more <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<div class="single-blog">
					<div class="blog-img">
						<img src="{{asset('public/assets/')}}/images/drink-1.jpg" alt="">
					</div>
					<div class="blog-info">
						<ul>
							<li><a href="">admin</a></li>
							<li><a href="">13 Dec</a></li>
							<li><a href="">2020</a></li>
						</ul>
					</div>
					<div class="blog-content">
						<h4>blog title here</h4>
						<p>But I must explain to you how all mistaken idea of denouncing pleasure and praising pain was born and I will give you a full account of the system... </p>
						<a href="" class="box-trans">read more <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				
			</div>
		</div>
		
		
		<footer class="footer-area">
			<div class="footer boundary fix">
			
			 <div class="single-footer">
					<h4>Social links</h4>
					<ul>
						<li><a href=""><i class="fab fa-facebook-square"></i> Facebook</a></li>
						<li><a href=""><i class="fab fa-facebook-square"></i> Instragram</a></li>
						<li><a href=""><i class="fab fa-youtube"></i> Youtube</a></li>
						<li><a href=""><i class="fab fa-facebook-square"></i> Whats App</a></li>
						<li><a href=""><i class="fab fa-facebook-square"></i> Twitter</a></li>
					</ul>
			</div>
			<div class="single-footer">
					<h4>Quick links</h4>
					<ul>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Home</a></li>
						<li><a href=""><i class="fas fa-angle-double-right"></i> About</a></li>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Services</a></li>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Gallery</a></li>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Contact</a></li>
					</ul>
				</div>
				<div class="single-footer">
					<h4>opening hours</h4>
					<ul>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Monday - Friday : 8.00am - 9.00pm</a></li>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Saturday : 2.00pm - 9.00pm</a></li>
						<li><a href=""><i class="fas fa-angle-double-right"></i> Sunday : Close</a></li>
					</ul>
				</div>
				<div class="single-footer">
					<h4>contact us</h4>
					<ul>
						<li><a href=""><i class="fas fa-map-marker-alt"></i> 90 Low Leighton Rd, New Mills, High Peak, SK22 4JG</a></li>
						<li><a href=""><i class="fas fa-phone-alt"></i> 01663 745 885 / 308 022</a></li>
						<li><a href=""><i class="fas fa-envelope"></i> info@newmillscuisine.uk</a></li>
					</ul>
				</div>
				
			</div>
		</footer>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script type="text/javascript">
			//############################# COOKIE GENERATE #############################
			@if (!Session::has('unique_session'))
			$(function () {
				$.get( "{{action('User\HomeController@gen_session')}}" );
			});
			@endif
		//#####################################################################################

		$('.add_to_list').click(function(){
			var id = $(this).data('id');
			var price = $(this).data('price');
			add_cart(id,price);	
        });

		function add_cart(id, price) {
            $.ajax({
                url: "{{action('User\CartController@add_cart')}}",
                type: 'GET',
                data: {foodID:id, price:price},
                success:function(result){
					alert('Item Added to list successfully.');
                    console.log(result);
                    show_list();
                },
                error: function (jXHR, textStatus, errorThrown) {html("")}
            });
        }
		function show_list(){
            $.ajax({
                url : "{{action('User\CartController@show_list')}}",
                type : 'GET',
                success : function(data){
                    if(data > 0){
                        $('#list_item').html('[ '+data+' ]');
                    }else{
                        $('#list_item').html('[ 0 ]');
                    }
                }
            });
        }
        show_list();
		</script>
	
	</body>
 
</html>