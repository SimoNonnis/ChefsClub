<?php
	$telephone 							 = '2129411100'; 
	$telephone_visible       = '212 941 1100'; 
	$address1                = '275 Mulberry Street';
	$address2                = 'New York, NY 10012';
	$logoImg                 = 'x-images/cc-logo.svg';
	$facebook								 = 'https://www.facebook.com/ChefsClubNY';
	$twitter 								 = 'https://twitter.com/chefsclubny';
	$instagram							 = 'http://instagram.com/chefsclubny';
	$google									 = 'https://plus.google.com/b/100503648092544138947/'
?>

<header  class="header" role="banner">
	<div class="header-wrapper [ u-margin-lr-auto u-cf ]">


		


		<div class="nav-toggle-div [ u-textLeft ]"><!-- Mobile Navigation toggle -->
			<span class="nav-toggle__btn [ RespNav-Open ]">
				<i class="nav-toggle__i [ u-textNormal ] [ icon-hamburger ]"></i>
			</span>
		</div><!-- End Mobile Navigation toggle -->

		<div class="[ Modal ]" id="modal"><!-- Modal Responsive Navigation -->
  		<div class="[ RespNav ] [ u-position-rel ]">
    
    	<div class="[ RespNav-close ] [ nav-toggle__btn ]" >
      	<i class="u-textNormal">X</i>
    	</div>
    
	    <nav class="[ RespNav-menu ]">
	      
				<?php include 'x-partials/menu-navigation.php'; ?>		

	    </nav>
    
    	<div class="[ RespNav-SocialNav ] [ u-textCenter ]">
				<a href="<?php echo $facebook; ?>" class="social-links__a [ icon-facebook ]" target="_blank"></a>
				<a href="<?php echo $twitter; ?>" class="social-links__a [ icon-twitter ]" target="_blank"></a>
				<a href="<?php echo $instagram; ?>" class="social-links__a [ icon-instagram ]" target="_blank"></a>
				<a href="<?php echo $google; ?>" class="social-links__a [ icon-google ]" target="_blank"></a>
      </div>
    
  		</div>
		</div><!-- End Modal Responsive Navigation -->
		
		
		










		<div class="location-select-div"><!-- Location Select -->
			<span class="select-wrapper">
				<select class="select-wrapper__select [ u-textUpperCase ]" onChange="window.location.href=this.options[this.selectedIndex].value;">
					<option value="index.php">New York</option>
					<option value="http://www.chefsclub.com/aspen">Aspen</option>
					<option value="http://www.chefsclub.com/">Chefs Club Group</option>
				</select>
			</span>
		</div><!-- End Location Select -->

		










		<div class="logo-div-desktop [ u-textCenter ]"><!-- Logo Desktop -->	
			<h1 class="[ u-margin-t-flush ]">
				<a href="/new-york/" class="[ u-inlineBlock ]">
					<img class="logo-svg-desktop" src="<?php echo $logoImg; ?>" alt="Chefs Club Logo">	
				</a>
				<span class="visuallyhidden">Chefs Club Logo</span>
			</h1>
		</div><!-- End Logo Desktop-->


		<div class="logo-div"><!-- Logo Mobile -->	
			<h1 class="[ u-margin-t-flush ]">
				<a href="/new-york/" class="[ u-inlineBlock ]">
					<img class="logo-svg" src="<?php echo $logoImg; ?>" alt="Chefs Club Logo">	
				</a>
				<span class="visuallyhidden">Chefs Club Logo</span>
			</h1>
		</div><!-- End Logo Mobile -->

		
		



		




		

		<nav class="main-nav" id="nav-collapse" role="navigation"><!-- Navigation -->

		  <?php include 'x-partials/menu-navigation.php'; ?>

		</nav><!-- End Navigation -->

		




			
		
		



		<div class="contact-details-social-div [ u-textUpperCase ]"><!-- Contact Section -->
				<div class="contact-details">
					<a class="[ btn btn--tel-active ] tel-active" href="tel://<?php echo $telephone; ?>"><?php echo $telephone_visible; ?></a><!-- Mobile Telephone Number -->	
					<p class="btn tel-read-only [ u-margin-t-flush ]"><?php echo $telephone_visible; ?></p>
					<p class="contact-details__address [ u-margin-t-flush ]"><?php echo $address1; ?><br><?php echo $address2; ?></p>
				</div>

				<div class="social-links">
					<a href="<?php echo $facebook; ?>" class="social-links__a [ icon-facebook ]" target="_blank"></a>
					<a href="<?php echo $twitter; ?>" class="social-links__a [ icon-twitter ]" target="_blank"></a>
					<a href="<?php echo $instagram; ?>" class="social-links__a [ icon-instagram ]" target="_blank"></a>
					<a href="<?php echo $google; ?>" class="social-links__a [ icon-google ]" target="_blank"></a>
				</div>
		</div><!-- End Contact Section -->







	
	</div>
</header>