<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title><?php wp_title('|', true, 'right'); ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen">
	<script src="https://use.fontawesome.com/7ef7fa1ffd.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

	<script>
	document.addEventListener( 'wpcf7submit', function( event ) {
	if ( '1962' == event.detail.contactFormId ) {
		var option = document.getElementById("paypal-children").value;
		var url = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3LVZZ2HMVT8AL&currency_code=CAD&os0="+option+"/";
		window.location = url;
		}
	}, false );
	
		
		$(document).ready(function () {
			
			$(window).resize(function() {
    			if(false == $('nav').hasClass('navbar-custom') && $(window).width() < 992) {
      				$('nav').addClass('navbar-custom');
    			}
   				if(true == $('nav').hasClass('navbar-custom') && $(window).width() >= 992) {
      				$('nav').removeClass('navbar-custom');
    			}	
  			});
			
			$(window).scroll(function(){
				$('.navbar').toggleClass('bg-dark', $(this).scrollTop() > 50);
			});
			
			$(function() {
   				$('.post-slide2').matchHeight();
				$('.padding-feature-box').matchHeight();
				$('.plain-box').matchHeight();
				
				if ($(window).width() < 992) {
				   $('nav').addClass("navbar-custom"); 
				}

				if( jQuery(".schema-faq-section .schema-faq-question").hasClass('active') ){
					jQuery(".schema-faq-section .schema-faq-question").closest('.schema-faq-section').find('.schema-faq-answer').show();
				}
				jQuery(".schema-faq-section .schema-faq-question").click(function(){
					if( jQuery(this).hasClass('active') ){
						jQuery(this).removeClass("active").closest('.schema-faq-section').find('.schema-faq-answer').slideUp(200);
					} else {
						jQuery(this).addClass("active").closest('.schema-faq-section').find('.schema-faq-answer').slideDown(200);
					}
				});
			});
		});
	</script>
	
	<?php wp_head(); ?>
</head>
<body>

	<header>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="padding-top: 15px;">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="http://holyrosarychurch.ca">
						   <img src="http://holyrosarychurch.ca/wp-content/uploads/2018/11/W-HRC-Name.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="175">
				</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">	
			<span class="navbar-toggler-icon"></span>
		  </button>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>   
			</div>
		</nav>
	</header>