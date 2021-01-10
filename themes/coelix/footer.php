<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coelix
 */

?>

<footer id="colophon" class="site-footer">

   <div class="container">
      <div class="site-footer__logo">
         <img src="http://localhost/t2med/wp-content/uploads/2021/01/Medicine_Eng1-1.png" alt="">
      </div>
      <nav class="nav">
         <ul class="nav__item">
            <li class="nav__link">
               <a href="<?= get_home_url() . '/index.php' ?>">Home</a>
            </li>
            <li class="nav__link">
               <a href="<?= get_home_url() . '/terms' ?>">Terms</a>
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
         </ul>
      </nav>
      <div class="social-media">
         <div class="social-media__facebook">
            <h4>Social media</h4>
            <a href="<?= get_home_url() . '#' ?>">
               <svg class="svg-facewhite" width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26.2803 13C26.2803 5.81953 20.4607 0 13.2803 0C6.0998 0 0.280273 5.81953 0.280273 13C0.280273 20.1805 6.0998 26 13.2803 26C13.3564 26 13.4326 26 13.5088 25.9949V15.8793H10.7158V12.6242H13.5088V10.2273C13.5088 7.44961 15.2049 5.93633 17.683 5.93633C18.8713 5.93633 19.892 6.02266 20.1865 6.06328V8.96797H18.4803C17.1346 8.96797 16.8705 9.60781 16.8705 10.5473V12.6191H20.0951L19.6736 15.8742H16.8705V25.4973C22.3041 23.9383 26.2803 18.9363 26.2803 13Z" fill="white" />
               </svg>
            </a>
            <!-- <svg class="svg-facewhite" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11.75 0.675171C17.8242 0.675171 22.75 5.60097 22.75 11.6752C22.75 17.7494 17.8242 22.6752 11.75 22.6752C5.6758 22.6752 0.75 17.7494 0.75 11.6752C0.75 5.60097 5.6758 0.675171 11.75 0.675171ZM5.47169 14.2793C5.50224 14.9517 5.60916 15.4108 5.76526 15.8126C6.0934 16.6611 6.76411 17.3318 7.61258 17.6599C8.01424 17.816 8.47346 17.9228 9.14569 17.9535C9.81926 17.9842 10.0344 17.9916 11.7498 17.9916C13.4654 17.9916 13.6804 17.9842 14.3541 17.9535C15.0264 17.9228 15.4856 17.816 15.8873 17.6599C16.3089 17.5013 16.6906 17.2527 17.0061 16.9313C17.3274 16.6159 17.576 16.2341 17.7346 15.8126C17.8907 15.4109 17.9976 14.9517 18.0281 14.2795C18.0592 13.6057 18.0664 13.3906 18.0664 11.6752C18.0664 9.95978 18.0592 9.7446 18.0283 9.07103C17.9978 8.39864 17.891 7.93958 17.7349 7.53775C17.5763 7.11629 17.3275 6.73444 17.0061 6.41905C16.6907 6.09763 16.3089 5.84904 15.8874 5.69043C15.4856 5.53433 15.0265 5.42758 14.3541 5.39687C13.6806 5.36615 13.4654 5.35876 11.75 5.35876C10.0346 5.35876 9.81943 5.36615 9.14586 5.39703C8.47346 5.42758 8.0144 5.53433 7.61258 5.69026C7.19112 5.84888 6.80927 6.09763 6.49371 6.41905C6.17245 6.7346 5.92371 7.11629 5.76526 7.53775C5.60899 7.93958 5.50224 8.39864 5.47153 9.07103C5.44081 9.7446 5.43359 9.95978 5.43359 11.6752C5.43359 13.3906 5.44081 13.6057 5.47169 14.2793Z" fill="white"/>
            </svg> -->
         </div>
         <div class="social-media__title">
            Developed & Designed in partnership by <span>Coelix & Crown</span>
         </div>
      </div>
   </div>






   <!-- <div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'coelix')); ?>">
				<?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', 'coelix'), 'WordPress');
            ?>
			</a>
			<span class="sep"> | </span>
				<?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s.', 'coelix'), 'coelix', '<a href="http://underscores.me/">Underscores.me</a>');
            ?>
		</div>  -->
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>