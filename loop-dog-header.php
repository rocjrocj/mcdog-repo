<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morehead-Cain Day of Giving November 21, 2016</title>
	<link rel="shortcut icon" href="http://www.moreheadcain.org/assets/themes/moreheadcain/imgs/favicon.ico">
    <!-- Bootstrap -->
	<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/css/day-of-giving.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	  <header>
		 <div class="hBak">Nov21</div>
		  <div class="container">
			<h1><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/mc_dog_logo.png" class="img-responsive" alt="Morehead-Cain Day of Giving November 21, 2016"/></h1>
			<!--<p>Os eum natios aliqui veni conse cusamenit quis adis sequasperspe dolupta posam, sam experiam, qui audi omnistis maximil igenemodic tes doluptia voluptatqui di ducipsunt late sandit aliqui comnient quid magnihi ligent conseque.</p>-->
			<?php if ( ! have_posts() ) : ?>
				<article>
					<div class="row page-content">
						<div class="<?php echo $remaining_cols; ?> columns">
							<p>The page you are looking for cannot be found.</p>
							<p><a href="/">Click here to go to the home page</a></p>
						</div>
					</div>
				</div><!-- END ROW -->
				</article>
			<?php endif; ?>
			
			<?php while ( have_posts() ) { the_post(); ?>
			
			  <article>
			
				<?php if(get_field('page-custom') != "") { ?>
					<div class="row custom-content">
						 <?php do_shortcode(get_field('page-custom')); ?>
					</div>
				<?php } ?>
			
				<?php if(get_field('page-custom-2') != "") { ?>
					<div class="row custom-content">
						 <?php do_shortcode(get_field('page-custom-2')); ?>
					</div>
				<?php } ?>
			
				<?php if(get_the_content() != "") { ?>
					<div class="row page-content">
						<div class="<?php echo $remaining_cols; ?> columns">
							<?php the_content(); ?>
						</div>
					</div>
				<?php } ?>
			
			  </article>
			
			<?php } // End the loop. ?>
			<!--<div><button>Give Now</button>-->
		  </div>
	  </header>
	  
	  <section role="banner" class="pre">
	  	<div class="save_the_date">
			<div class="ico_cal"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/ico_cal.png" alt="Calendar Icon"/></div>
			<div class="save">Save the Date</div>
			<div class="nov21">Novemer 21</div>
		</div>
	  	<div class="ico_caret"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/caret_o.png" alt=""/></div>
	  </section>
	  
	  <section role="banner" class="post">
	  	<div class="donations">
		<div class="row">
	  		<div class="col-md-6 alumni">
				<div class="ico_grad"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/grad_cap.png" alt="Graduation Cap Icon"/></div>
				<div class="don_percent">00%</div>
				<div class="don_progress"></div>
				<!--<div class="alumni_given">Of Morehead-Cain Alumni Have Given</div>-->
			</div>
	  		<div class="col-md-3 gifts">
				<div class="pipe"></div>
				<div class="present"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/present.png" alt="Gift Icon"/></div>
				<div class="gift_amount">000</div>
				<div class="gifts_today">Gifts Today</div>
			</div>
	  		<div class="col-md-3 raised">
				<div class="pipe"></div>
				<div class="heart"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/heart.png" alt="Heart Icon"/></div>
				<div class="raised_amount">$0,000</div>
				<div class="raised_today">Raised Today</div>
			</div>
			</div>
		</div>
	  	<div class="ico_caret"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/day-of-giving/images/caret_b.png" alt=""/></div>
	  </section>