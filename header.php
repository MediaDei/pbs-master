<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type="text/css">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
	<link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox.js/v2.2.0/mapbox.css' type="text/css">

	<script type='text/javascript' src='https://api.tiles.mapbox.com/mapbox.js/v2.2.0/mapbox.js?ver=4.3.1'></script>

	<!-- compact way of doing things; doesn't work for Home
	<title><?php wp_title( '|', true, 'right' ); ?></title>-->

	<title>
		<?php 
			if(is_home()) { 
				echo " Home | ";
				echo bloginfo("name");
				//echo bloginfo("description"); add if desired for SEO?
			} 
			else { 
				echo wp_title(" | ", false, right);
				echo bloginfo("name");
			} 
		?>
	</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">

		<header>
			<div class="title-wrap">
				<h1 class="main-title">
					<div role="img" class="floral-left"><div class="inner">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet" viewBox="0 0 300 300">
						<g transform="translate(-66.796875,-180.546875)"><path d="M361.878763 225.61908c-5.625954 -10.374564,-6.231958 -12.114263,-8.85206 -13.920955s-3.409651 0.996036,-5.214508 3.936424c0 0,-4.634812 12.161984,-12.932873 2.615819c-8.29806 -9.546471,-14.596706 -19.984664,-21.050141 -24.776407s-27.121803 -9.034687,-41.566167 8.78996c-9.248517 11.413122,-10.340608 22.528595,-6.415808 29.935851c0 0,0.000918 0.001224,0.000918 0.00153c1.387293 2.617655,3.402921 4.770329,5.905248 6.311188c2.459194 1.965153,5.607905 3.797236,9.29838 4.487364v0.000306c0 0,8.689623 2.412696,15.968704 -4.379991c-4.796637 -0.873367,-8.434189 -5.069507,-8.434189 -10.118213c0 -5.681935,4.606669 -10.288604,10.288604 -10.288604c5.184529 0,9.471829 3.835475,10.183066 8.82361c0.035791 0.029979,0.070053 0.056593,0.105844 0.086878c2.477243 10.710757,-3.924188 16.449897,-9.388011 19.317784c-1.719509 1.015003,-3.831498 1.856862,-6.442117 2.453994c-0.210771 0.050781,-0.327933 0.074336,-0.327933 0.074336l0 0c-2.239552 0.487006,-4.837017 0.79689,-7.858777 0.885604c-11.492658 0.335887,-19.825286 -5.830912,-24.981977 -12.540393l0 0c-9.563296 -13.516239,-0.540845 -31.304789,-0.540845 -31.304789c1.948328 -3.139534,4.597491 -6.979903,8.217301 -11.832216c0 0,-15.134492 1.863286,-23.08137 17.55759c0 0,0.657702 1.550342,0.325486 4.242638c-0.205264 5.000678,-2.74063 9.396882,-6.549796 12.137512c-0.968199 1.037946,-2.070691 2.110153,-3.328891 3.213258c-4.734844 4.75534,-6.709786 14.958901,-3.469609 17.664352c0 0,-6.72967 2.89909,-10.412191 -8.312744c-1.235257 -7.54002,-14.143962 -1.810669,-14.143962 -1.810669s-24.29919 15.267562,-51.581289 9.357726c-19.208575 -6.69082,-26.232223 -14.598542,-37.992244 -23.315084c-7.086971 -4.729949,-13.249487 -6.793299,-18.17583 -7.530231c-2.247812 -0.336193,-4.238355 -0.396151,-5.941957 -0.306826c-14.429069 1.96087,-18.309817 9.836778,-19.344398 14.308235c-0.205876 0.674527,-0.335887 1.318769,-0.373514 1.91376c-0.050169 0.794137,-0.043745 1.562272,0.005506 2.308076c0.011319 0.260634,0.02692 0.405634,0.02692 0.405634l0.002447 -0.000612c0.369231 4.079283,2.217221 7.329862,5.22705 9.023062c0.375043 -3.617668,3.4329 -6.438752,7.149682 -6.438752c3.97038 0,7.188838 3.218458,7.188838 7.188838s-3.218458 7.188838,-7.188838 7.188838c-0.063629 0,-0.12634 -0.003365,-0.189357 -0.004895c-0.4246 0.035791,-0.865414 0.057511,-1.334371 0.05231c-2.678225 -0.028755,-5.812864 -0.714907,-8.724802 -2.176535c-0.50536 -0.265222,-12.36113 -6.68256,-8.325898 -22.464354c0 -0.000306,0 -0.000306,0 -0.000612c1.848602 -5.06033,6.552855 -13.729457,17.700449 -17.200901c7.838281 -2.420344,16.030803 -1.407483,22.784946 -0.26614c12.065623 2.038571,23.379631 11.251296,23.379631 11.251296s-4.993642 -20.294854,12.342164 -30.864894c16.935067 -10.325925,44.258158 -5.623813,45.502285 14.348309c0.038239 0.330075,0.059652 0.665044,0.059652 1.00552c0 0.144083,-0.003977 0.286942,-0.010707 0.429495c0 0.001835,0 0.003671,0 0.005506c0 0.000306,0 0.000612,-0.000306 0.000612c-0.226984 4.591067,-4.021467 8.243915,-8.668515 8.243915c-4.793578 0,-8.679528 -3.885949,-8.679528 -8.679528c0 -4.06307,2.792022 -7.473027,6.562033 -8.418282c-7.136834 -8.015401,-20.060223 -5.124265,-20.060223 -5.124265c-3.885032 0.636289,-8.293472 2.431663,-13.204213 6.049943c-14.501875 15.633428,-2.415144 32.565436,2.021746 35.210929c4.43689 2.645492,11.867701 8.890604,31.908958 6.481579s34.128626 -18.689143,34.128626 -18.689143s-12.855784 -5.13283,-10.004721 -21.652168c0 0,3.877078 9.764583,11.419546 7.53329c0 0,0.788937 -1.165204,2.272896 -2.580334c2.88716 -3.593807,7.316096 -5.896377,12.284959 -5.896377c3.038584 0,5.874351 0.862049,8.28093 2.352127c1.170404 -2.073139,7.092477 -10.548014,28.293125 -16.739898c24.322133 -7.103184,86.815161 -13.376745,100.842878 40.438896C366.765338 225.61908,367.504411 235.993644,361.878763 225.61908z"/></g></svg>
					</div></div>
					<div role="img" class="logo"></div>
					<a href="/" class="smallcaps">Prayer
            					Book
											Society
					</a>
					<div role="img" class="floral-right"><div class="inner">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet" viewBox="0 0 300 300"><g transform="translate(-66.796875,-155.9921875)"><path d="M361.878763 183.39307c-5.625954 10.374564,-6.231958 12.114263,-8.85206 13.920955s-3.409651 -0.996036,-5.214508 -3.936424c0 0,-4.634812 -12.161984,-12.932873 -2.615513s-14.596706 19.984664,-21.050141 24.776407s-27.121803 9.034687,-41.566167 -8.78996c-9.248517 -11.413122,-10.340608 -22.528595,-6.415808 -29.935851c0 0,0.000918 -0.001224,0.000918 -0.001224c1.387293 -2.617961,3.402921 -4.770329,5.905248 -6.311188c2.459194 -1.964847,5.607905 -3.797236,9.29838 -4.487364v0c0 0,8.689623 -2.412696,15.968704 4.379685c-4.796637 0.873367,-8.434189 5.069813,-8.434189 10.118519c0 5.682241,4.606669 10.288298,10.288604 10.288298c5.184529 0,9.471829 -3.835475,10.183066 -8.823304c0.035791 -0.029979,0.070053 -0.056593,0.105844 -0.086878c2.477243 -10.710757,-3.924188 -16.449897,-9.388011 -19.317784c-1.719509 -1.015309,-3.831498 -1.857167,-6.442117 -2.4543c-0.210771 -0.050781,-0.327933 -0.074642,-0.327933 -0.074642v0c-2.239552 -0.4867,-4.837017 -0.79689,-7.858777 -0.885298c-11.492658 -0.335887,-19.825286 5.830606,-24.981977 12.540393v0c-9.563296 13.516239,-0.540845 31.304789,-0.540845 31.304789c1.948328 3.139534,4.597491 6.979903,8.217301 11.832216c0 0,-15.134492 -1.863286,-23.08137 -17.55759c0 0,0.657702 -1.550342,0.325486 -4.242638c-0.205264 -5.000678,-2.74063 -9.396882,-6.549796 -12.137512c-0.968199 -1.037946,-2.070691 -2.110153,-3.328891 -3.213258c-4.734844 -4.755034,-6.709786 -14.959207,-3.469609 -17.664657c0 0,-6.72967 -2.898784,-10.412191 8.312744c-1.235257 7.540326,-14.143962 1.810669,-14.143962 1.810669s-24.29919 -15.267868,-51.581289 -9.357726c-19.208575 6.69082,-26.232223 14.598236,-37.992244 23.314778c-7.086971 4.729949,-13.249487 6.793605,-18.17583 7.530537c-2.247812 0.336193,-4.238355 0.396151,-5.941957 0.306826c-14.429069 -1.961176,-18.309817 -9.837084,-19.344398 -14.308235c-0.205876 -0.674833,-0.335887 -1.318769,-0.373514 -1.914066c-0.050169 -0.793831,-0.043745 -1.562272,0.005506 -2.308076c0.011319 -0.260328,0.02692 -0.405634,0.02692 -0.405634l0.002447 0.000612c0.369231 -4.079283,2.217221 -7.329862,5.22705 -9.023062c0.375043 3.617668,3.4329 6.438752,7.149682 6.438752c3.97038 0,7.188838 -3.218458,7.188838 -7.188838s-3.218458 -7.188838,-7.188838 -7.188838c-0.063629 0,-0.12634 0.003059,-0.189357 0.004895c-0.4246 -0.035791,-0.865414 -0.057511,-1.334371 -0.05231c-2.678225 0.028755,-5.812864 0.714907,-8.724802 2.176535c-0.50536 0.265528,-12.36113 6.68256,-8.325898 22.464354c0 0,0 0.000306,0 0.000612c1.848602 5.06033,6.552855 13.729457,17.700449 17.200901c7.838281 2.420344,16.030803 1.407483,22.784946 0.26614c12.065623 -2.038571,23.379631 -11.251602,23.379631 -11.251602s-4.993642 20.294854,12.342164 30.864894c16.935067 10.325925,44.258158 5.623813,45.502285 -14.348309c0.038239 -0.330075,0.059652 -0.665044,0.059652 -1.00552c0 -0.144083,-0.003977 -0.286942,-0.010707 -0.429495c0 -0.001835,0 -0.003671,0 -0.005506c0 -0.000306,0 -0.000612,-0.000306 -0.000612c-0.226984 -4.591067,-4.021467 -8.243915,-8.668515 -8.243915c-4.793578 0,-8.679528 3.885949,-8.679528 8.679528c0 4.06307,2.792022 7.473027,6.562033 8.418282c-7.136834 8.015401,-20.060223 5.124265,-20.060223 5.124265c-3.885032 -0.636289,-8.293472 -2.431663,-13.204213 -6.049943c-14.501875 -15.633428,-2.415144 -32.565436,2.021746 -35.210929s11.867701 -8.890604,31.908958 -6.481273S213.375725 186.848606,213.375725 186.848606s-12.855784 5.133136,-10.004721 21.652474c0 0,3.877078 -9.764583,11.419546 -7.53329c0 0,0.788937 1.165204,2.272896 2.580334c2.88716 3.593807,7.316096 5.896377,12.284959 5.896377c3.038584 0,5.874351 -0.862049,8.28093 -2.352127c1.170404 2.073139,7.092477 10.548014,28.293125 16.739898c24.322133 7.103184,86.815161 13.376745,100.842878 -40.438896C366.765338 183.39307,367.504411 173.018506,361.878763 183.39307z"/></g></svg>
					</div></div>
				</h1>

				<div class="main-social">
				  <a class="fa fa-facebook" href="#/"></a>
				  <a class="fa fa-twitter" href="#/"></a>
				  <a class="fa fa-rss" href="/rss/"></a>
				  <a class="fa fa-envelope contact" href="#/"></a>
				</div>
			</div>

			<nav class="main-nav"><div class="container clear">
			  <a class="home" href="/">Home</a>
			  <a class="about" href="/about/">About</a>
			  <a class="ministries" href="/ministries/">Ministries</a>
			  <a class="resources" href="/resources/">Resources</a>
			  <a class="contribute" href="/contribute/">Contribute</a>
			  <a class="market" href="http://www.anglicanmarketplace.com"><span class="cart fa fa-shopping-cart"></span>Market</a>
			</div></nav>
