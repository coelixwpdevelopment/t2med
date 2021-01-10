<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coelix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"></script>

   <script type='text/javascript'>
   var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
   </script>

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <div id="page" class="site">
      <!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coelix' ); ?></a> -->
      <header id="masthead" class="site-header">
         <div class="container">
            <button type="button" class="menu-button open" aria-label="Mobile Menu Toggle" data-menu-open>
               <div class="burger"></div>
            </button>
            <div class="logo">
               <div class="logo__item-2">
                  <img src="http://t2med/wp-content/uploads/2021/01/Medicine_Eng.png" alt="">
               </div>
               <div class="logo__item-1">
                  <a href="<?= get_home_url().'/index.php'?>">
                     <svg сlass="svg-stet" width="35" height="44" viewBox="0 0 35 44" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M16.5299 23.5416C16.5299 23.5416 18.209 21.9923 19.6642 19.5739C21.1194 17.1555 20.5597 16.3242 22.2015 15.115C22.2015 15.115 24.2164 11.2607 24.5896 4.61007C24.5896 4.61007 24.0672 2.75849 22.4627 2.75849C22.4627 2.75849 21.6418 2.60734 21.2313 3.023C21.2313 3.023 20.8209 3.6276 19.403 3.6276C17.9851 3.6276 17.0149 2.7207 17.0149 2.7207C17.0149 2.7207 16.6418 1.66265 17.0522 1.2092C17.4627 0.75575 17.7985 0.340087 17.7985 0.340087C17.7985 0.340087 19.0299 0 19.4403 0C19.8507 0 20.5597 0.113362 21.2313 0.75575C21.2313 0.75575 22.7612 0.45345 24.291 0.944687C25.8209 1.43592 26.306 2.75849 26.6791 3.70317V7.59529C26.6791 7.59529 25.597 12.6966 24.4776 15.9085C24.4776 15.9085 24.7761 16.6643 24.4403 17.7223C24.0672 18.7426 21.6045 23.2771 20.6716 24.1084C19.7388 24.9397 18.209 26.6402 16.5672 28.0761C14.9254 29.512 15.2612 30.0411 15.2612 30.0411H13.7313V23.0126C13.694 23.0126 15.1119 22.8614 16.5299 23.5416Z"
                           fill="#1E335C" />
                        <path
                           d="M10.1119 23.5416C10.1119 23.5416 8.43284 21.9923 6.97761 19.5739C5.52239 17.1555 6.08209 16.3242 4.4403 15.115C4.4403 15.115 2.42537 11.2607 2.05224 4.61007C2.05224 4.61007 2.57463 2.75849 4.1791 2.75849C4.1791 2.75849 5 2.60734 5.41045 3.023C5.41045 3.023 5.8209 3.6276 7.23881 3.6276C8.65672 3.6276 9.62687 2.7207 9.62687 2.7207C9.62687 2.7207 10 1.66265 9.58955 1.2092C9.1791 0.75575 8.84328 0.340087 8.84328 0.340087C8.84328 0.340087 7.61194 0 7.20149 0C6.79104 0 6.08209 0.113362 5.41045 0.75575C5.41045 0.75575 3.8806 0.45345 2.35075 0.944687C0.820896 1.43592 0.373134 2.75849 0 3.74096V7.63307C0 7.63307 1.08209 12.7344 2.20149 15.9463C2.20149 15.9463 1.90298 16.7021 2.23881 17.7601C2.57463 18.8182 5.07463 23.3149 6.00746 24.1462C6.9403 24.9775 8.47015 26.678 10.1119 28.1139C11.7537 29.5498 11.4179 30.0788 11.4179 30.0788H12.9478V23.0126C12.9478 23.0126 12.2761 22.937 11.3806 23.1259C10.9701 23.2015 10.5224 23.3527 10.1119 23.5416Z"
                           fill="#1E335C" />
                        <path
                           d="M14.6642 23.0504C14.6642 23.0504 13.3209 22.8992 11.6791 23.0882C10.0373 23.2771 11.9776 30.0788 11.9776 30.0788H14.5522L14.6642 23.0504Z"
                           fill="#1E335C" />
                        <path
                           d="M7.46269 3.77875C8.88461 3.77875 10.0373 2.93285 10.0373 1.88937C10.0373 0.845902 8.88461 0 7.46269 0C6.04076 0 4.88806 0.845902 4.88806 1.88937C4.88806 2.93285 6.04076 3.77875 7.46269 3.77875Z"
                           fill="#1E335C" />
                        <path
                           d="M19.1045 3.77875C20.5264 3.77875 21.6791 2.93285 21.6791 1.88937C21.6791 0.845902 20.5264 0 19.1045 0C17.6826 0 16.5299 0.845902 16.5299 1.88937C16.5299 2.93285 17.6826 3.77875 19.1045 3.77875Z"
                           fill="#1E335C" />
                        <path
                           d="M8.58209 21.6522C9.96269 20.8965 11.5672 20.4808 13.2463 20.4808C14.9254 20.4808 16.5299 20.9343 17.9104 21.7278C19.0299 20.5186 19.8507 18.9315 19.8881 18.8937C17.9478 17.7601 15.6716 17.0799 13.2836 17.0799C10.8955 17.0799 8.69403 17.7223 6.75373 18.8182C7.46269 20.443 8.58209 21.6522 8.58209 21.6522Z"
                           fill="#1E335C" />
                        <path
                           d="M22.7985 21.1988C22.7985 21.2366 22.7239 21.5389 21.9776 22.6725C21.194 23.8439 20.8582 24.0706 20.8582 24.0706C22.3134 25.8089 23.1716 28.0383 23.1716 30.4945C23.1716 36.0493 18.7313 40.5082 13.2836 40.5082C12.9104 40.5082 12.5373 40.4704 12.1642 40.4326C12.1642 40.4326 12.7612 43.8713 14.0299 43.8335C14.1791 43.8335 14.3284 43.8335 14.4403 43.8335C21.2313 43.2289 26.5299 37.4852 26.5299 30.4567C26.5299 26.8669 25.1119 23.5794 22.7985 21.1988Z"
                           fill="#1E335C" />
                        <path
                           d="M11.9403 40.4326C7.08955 39.7524 3.35821 35.558 3.35821 30.4945C3.35821 28.0383 4.21642 25.8089 5.67164 24.0706C4.70149 22.8236 4.02985 21.69 3.73134 21.1988C1.45522 23.5794 0 26.8669 0 30.4945C0 37.9009 5.93284 43.9091 13.2463 43.9091C13.2836 43.9091 13.3209 43.9091 13.3209 43.9091C13.1343 43.8335 12.2388 43.3045 11.9403 40.4326Z"
                           fill="#1E335C" />
                        <path
                           d="M32.7985 23.8439H29.6269L29.7015 28.1139C29.7015 28.1139 30.0746 32.2327 27.9478 36.805C27.0896 38.6188 25.2239 39.6013 22.8731 40.0925C22.2761 40.7349 20.6716 42.322 18.3209 43.2289C18.3209 43.2289 18.2836 43.2289 18.2836 43.2667C17.6493 43.569 16.4179 43.7957 15.4104 43.9846C18.4701 44.0602 23.9925 43.9091 26.6418 42.322C30.4104 40.0925 32.1269 36.1626 32.5 32.8751C32.8358 29.701 32.7239 28.0761 32.7239 28.0761L32.7985 23.8439Z"
                           fill="#1E335C" />
                        <path
                           d="M11.4179 30.0788L11.7164 30.4945L11.8657 36.276C11.8657 36.276 11.6791 44.0602 14.1791 43.8713C16.6791 43.6823 19.403 43.0777 21.6045 40.8483C23.806 38.6188 21.6045 36.2382 21.6045 36.2382C21.6045 36.2382 21.2687 36.6539 20.1493 37.6741C19.0299 38.6944 17.7612 39.4879 16.9776 39.7524C16.2313 40.017 15.0373 41.3773 15 36.0871C14.9627 30.7968 14.8881 30.4567 14.8881 30.4567L15.2239 30.0411H11.4179V30.0788Z"
                           fill="#1E335C" />
                        <path
                           d="M30.8209 25.5443C33.1289 25.5443 35 23.6495 35 21.3121C35 18.9748 33.1289 17.0799 30.8209 17.0799C28.5128 17.0799 26.6418 18.9748 26.6418 21.3121C26.6418 23.6495 28.5128 25.5443 30.8209 25.5443Z"
                           fill="#1E335C" />
                     </svg>
                     <img src="http://t2med/wp-content/uploads/2021/01/T2MED.png" alt="">
                  </a>
               </div>
            </div>
            <nav class="nav">
               <ul class="nav__item">
                  <li class="nav__link">
                     <a href="<?= get_home_url().'/index.php'?>">Home</a>
                  </li>
                  <li class="nav__link">
                     <a href="<?= get_home_url().'/terms'?>">Terms</a>
                  </li>
                  <li class="nav__link">
                     <a href="#">Mentors</a>
                  </li>
                  <li class="nav__link">
                     <a href="#">Judges</a>
                  </li>
                  <li class="nav__link">
                     <a href="#">Pitch an idea</a>
                  </li>
                  <li class="nav__link">
                     <a href="<?= get_home_url().'/application-form'?>">Log in</a>
                  </li>
               </ul>
            </nav>
            <div class="languages">


               <div class="lang-option">

                  <?php add_action('wpml_custom_switcher', 'wpml_custom_switcher', 10, 1);
                  function wpml_custom_switcher () {
                  $languages = icl_get_languages();
                  $active_language = array_filter( $languages, function ( $var ) {
                     return ($var['active'] == 1);
                  } );
                  $active_language = reset( $active_language );
                  ?>
                  <div class="language-switcher">
                     <span>
                        <img src="<?= $active_language['country_flag_url'] ?>">
                        <?= $active_language['language_code'] ?>
                     </span>
                     <ul class="language-switcher__list">
                        <?php foreach ($languages as $lang):
                           if(!$lang['active']):?>
                              <li>
                                 <img src="<?= $lang['country_flag_url'] ?>">
                                 <a href="<?= $lang['url'] ?>"><?= $lang['language_code'] ?></a>
                              </li>
                           <?php endif;?>
                        <?php endforeach; ?>
                     </ul>
                  </div>
                  <?php } 
                  wpml_custom_switcher();
                  ?>

                  <!-- <div class="lang-items">
                     <div class="lang-us">
                        <svg class="svg-us" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                           style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256" />
                           <g>
                              <path style="fill:#D80027;"
                                 d="M244.87,256H512c0-23.106-3.08-45.49-8.819-66.783H244.87V256z" />
                              <path style="fill:#D80027;"
                                 d="M244.87,122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783H244.87V122.435z" />
                              <path style="fill:#D80027;"
                                 d="M256,512c60.249,0,115.626-20.824,159.356-55.652H96.644C140.374,491.176,195.751,512,256,512z" />
                              <path style="fill:#D80027;" d="M37.574,389.565h436.852c12.581-20.529,22.338-42.969,28.755-66.783H8.819
		                        C15.236,346.596,24.993,369.036,37.574,389.565z" />
                           </g>
                           <path style="fill:#0052B4;" d="M118.584,39.978h23.329l-21.7,15.765l8.289,25.509l-21.699-15.765L85.104,81.252l7.16-22.037
	                        C73.158,75.13,56.412,93.776,42.612,114.552h7.475l-13.813,10.035c-2.152,3.59-4.216,7.237-6.194,10.938l6.596,20.301l-12.306-8.941
	                        c-3.059,6.481-5.857,13.108-8.372,19.873l7.267,22.368h26.822l-21.7,15.765l8.289,25.509l-21.699-15.765l-12.998,9.444
	                        C0.678,234.537,0,245.189,0,256h256c0-141.384,0-158.052,0-256C205.428,0,158.285,14.67,118.584,39.978z M128.502,230.4
	                        l-21.699-15.765L85.104,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822l-21.7,15.765L128.502,230.4z
	                         M120.213,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822
	                        L120.213,130.317z M220.328,230.4l-21.699-15.765L176.93,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822
	                        l-21.7,15.765L220.328,230.4z M212.039,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822
	                        l8.288-25.509l8.288,25.509h26.822L212.039,130.317z M212.039,55.743l8.289,25.509l-21.699-15.765L176.93,81.252l8.289-25.509
	                        l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822L212.039,55.743z" />
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                        </svg>
                        <div class="en">EN</div>
                     </div>
                     <div class="lang-he">
                        <svg class="svg-isr" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                           style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256" />
                           <g>
                              <path style="fill:#0052B4;" d="M352.393,200.348H288.13L256,144.696l-32.129,55.652h-64.264L191.741,256l-32.134,55.652h64.264
		                            L256,367.304l32.13-55.652h64.263L320.259,256L352.393,200.348z M295.475,256l-19.736,34.188h-39.475L216.525,256l19.738-34.188
		                            h39.475L295.475,256z M256,187.623l7.346,12.724h-14.69L256,187.623z M196.786,221.812h14.692l-7.346,12.724L196.786,221.812z
		                            M196.786,290.188l7.347-12.724l7.346,12.724H196.786z M256,324.376l-7.345-12.724h14.691L256,324.376z M315.214,290.188h-14.692
		                            l7.347-12.724L315.214,290.188z M300.522,221.812h14.692l-7.346,12.724L300.522,221.812z" />
                              <path style="fill:#0052B4;" d="M415.357,55.652H96.643c-23.363,18.608-43.399,41.21-59.069,66.783h436.852
		                            C458.755,96.863,438.719,74.26,415.357,55.652z" />
                              <path style="fill:#0052B4;" d="M96.643,456.348h318.713c23.363-18.608,43.399-41.21,59.069-66.783H37.574
		                            C53.245,415.137,73.281,437.74,96.643,456.348z" />
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                        </svg>
                        <div class="he">HE</div>
                     </div>
                  </div> -->
                  <div class="arrow-down"></div>
               </div>
            </div>
            <div class="backdrop" data-backdrop>
               <div class="menu-container">
                  <button type="button" class="menu-button close" aria-label="Mobile Menu Toggle" data-menu-close>
                     <svg class="icon-cross" width="35" height="35" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
                           fill="#43B0EF" />
                     </svg>
                  </button>
                  <nav class="nav">
                     <ul class="nav__item">
                        <li class="nav__link">
                           <a href="<?= get_home_url().'/index.php'?>">Home</a>
                        </li>
                        <li class="nav__link">
                           <a href="<?= get_home_url().'/terms'?>">Terms</a>
                        </li>
                        <li class="nav__link">
                           <a href="#">Mentors</a>
                        </li>
                        <li class="nav__link">
                           <a href="#">Judges</a>
                        </li>
                        <li class="nav__link">
                           <a href="#">Pitch an idea</a>
                        </li>
                        <li class="nav__link">
                           <a href="#">Log in</a>
                        </li>
                     </ul>
                  </nav>
                  <div class="footer__social">
                     <!-- <a class="social" href="<?php echo get_field("facebook") ?>">
                        <svg width="11" height="22" viewBox="0 0 11 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M6.55417 7.58815V5.02059C6.55417 4.31194 7.12931 3.7368 7.83796 3.7368H9.12174V0.527344H6.55417C4.42694 0.527344 2.70282 2.25147 2.702824.3787V7.58815H0.135254V10.7976H2.70282V21.0679H6.55417V10.7976H9.12174L10.4055 7.58815H6.55417Z"
                              fill="#494949" />
                        </svg>
                     </a> -->
                  </div>
               </div>
            </div>
         </div>



         <!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$coelix_description = get_bloginfo( 'description', 'display' );
			if ( $coelix_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $coelix_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>.site-branding -->

         <!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'coelix' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>#site-navigation -->
      </header><!-- #masthead -->