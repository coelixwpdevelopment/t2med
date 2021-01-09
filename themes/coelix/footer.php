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
         <img src="http://t2med/wp-content/uploads/2021/01/Medicine_Eng1-1.png" alt="">
      </div>
      <nav class="nav">
         <ul class="nav__item">
            <li class="nav__link">
               <a href="#">Home</a>
            </li>
            <li class="nav__link">
               <a href="#">Terms</a>
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
            <svg class="svg-facewhite" width="27" height="26" viewBox="0 0 27 26" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M26.2803 13C26.2803 5.81953 20.4607 0 13.2803 0C6.0998 0 0.280273 5.81953 0.280273 13C0.280273 20.1805 6.0998 26 13.2803 26C13.3564 26 13.4326 26 13.5088 25.9949V15.8793H10.7158V12.6242H13.5088V10.2273C13.5088 7.44961 15.2049 5.93633 17.683 5.93633C18.8713 5.93633 19.892 6.02266 20.1865 6.06328V8.96797H18.4803C17.1346 8.96797 16.8705 9.60781 16.8705 10.5473V12.6191H20.0951L19.6736 15.8742H16.8705V25.4973C22.3041 23.9383 26.2803 18.9363 26.2803 13Z"
                  fill="white" />
            </svg>

         </div>
         <div class="social-media__title">
            Developed & Designed in partnership by <span>Coelix & Crown</span>
         </div>
      </div>
   </div>






   <!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'coelix' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'coelix' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'coelix' ), 'coelix', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>  -->
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>