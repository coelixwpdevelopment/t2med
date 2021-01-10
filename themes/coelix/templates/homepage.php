<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage Coelix
* @since Coelix 1.0
*/
get_header();

?>
<div class="homepage">
   <main id="primary" class="site-main">

      <?php $section = get_field('first_screen_'); ?>

      <section class="section-one" style="background: url(<?= get_template_directory_uri().'/assets/images/bg-main.png' ?>) no-repeat;">
         <div class="container">
            <div class="timers">
               <div class="timers-block">
                  <div class="timers-item">
                     <div class="timers-item__info">
                        <h3>300</h3>
                        <p>days</p>
                     </div>
                  </div>
                  <div class="timers-item">
                     <div class="timers-item__info">
                        <h3>1</h3>
                        <p>hous</p>
                     </div>
                  </div>
                  <div class="timers-item">
                     <div class="timers-item__info">
                        <h3>12</h3>
                        <p>minutes</p>
                     </div>
                  </div>
                  <div class="timers-item">
                     <div class="timers-item__info-last">
                        <h3>24</h3>
                        <p>seconds</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="main-info">
               <h1>T<span>2</span>MED</h1>
               <div class="main-info__startup">
                  <p class="main-info__startup-days"><?= $section ['day'] ?></p>
                  <p class="main-info__startup-txt"><?= $section ['startup'] ?></p>
               </div>
               <div class="main-info__dates">
                  <p class="main-info__dates-one"><?= $section ['date'] ?></p>
                  <p class="main-info__dates-two"><?= $section['text'] ?></p>
               </div>
               <div class="button">
                  <button class="button__apply"><?= __('Apply for T2MED', 'coelix') ?></button>
                  <button class="button__login"><?= __('Login', 'coelix') ?></button>
               </div>
            </div>
         </div>
      </section>

		<?php $section = get_field('medical'); ?>

      <section class="section-two">
         <div class="left-background">
            <div class="figure-background">
               <img class="left-top" src="<?= get_template_directory_uri().'/assets/images/medic__top-left.png' ?> "
                  alt="">
            </div>
            <div class="figure-background">
               <img class="left-bottom" src="<?= get_template_directory_uri().'/assets/images/medic__bottom-left.png' ?>" alt="">
            </div>
         </div>
         <div class="right-background">
            <img class="right-center" src="<?= get_template_directory_uri().'/assets/images/medic__right.png' ?>" alt="">
         </div>
         <div class="container">
            <div class="medical-info">
               <div class="medical-info__left-position">
                  <div class="medical-info__block">
                     <h2><?= $section ['title'] ?></h2>
                     <span><?= $section ['sub-title'] ?></span>
                     <p><?= $section ['text'] ?></p>
                  </div>
               </div>
               <div class="medical-info__right-position">
                  <div class="last">
                     <img src="<?= $section ['winner'] ['img'] ?>" alt="">
                     <div class="last__block">
                        <h4>Last year winners: <span> <?= $section ['winner'] ['team-name'] ?> </span></h4>
                        <p> <?= $section ['winner'] ['winner-name'] ?>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

		<?php $section = get_field('awards'); ?>
		
      <section class="section-three" style="background: url(<?= get_template_directory_uri().'/assets/images/bg-images-3.png' ?>) no-repeat;">
         <div class="container">
            <h2 class="title__awards"><?= $section ['title'] ?></h2>
            <div class="section-content">
               <div class="section-content__item-1">
                  <div class="item__info">
                     <div class="item__images">
                        <img class="images-1" src="<?= $section ['first-item'] ['img'] ?>" alt="">
                     </div>
                     <h3><?= $section ['first-item'] ['title'] ?></h3>
                     <p><?= $section ['first-item'] ['text'] ?></p>
                  </div>
                  <div class="item__price">
                     <p><?= $section ['first-item'] ['place'] ?></p>
                  </div>
               </div>
               <div class="section-content__item-2">
                  <div class="item__info-2">
                     <div class="item__images">
                        <img src="<?= $section ['center-item'] ['img'] ?>" alt="">
                     </div>
                     <h3><?= $section ['center-item'] ['title'] ?></h3>
                     <p><?= $section ['center-item'] ['text'] ?></p>
                  </div>
                  <div class="item__price-2">
                     <p><?= $section ['center-item'] ['place'] ?></p>
                  </div>
               </div>
               <div class="section-content__item-3">
                  <div class="item__info-3">
                     <div class="item__images">
                        <img src="<?= $section ['last-item'] ['img'] ?>" alt="">
                     </div>
                     <h3><?= $section ['last-item'] ['title'] ?></h3>
                     <p><?= $section ['last-item'] ['text'] ?></p>
                  </div>
                  <div class="item__price-3">
                     <p><?= $section ['last-item'] ['place'] ?></p>
                  </div>
               </div>
            </div>
         </div>
      </section>

		<?php $section = get_field('program'); ?>

      <section class="section-four">
         <div class="container">
            <h2 class="title__program"><?= $section ['title'] ?></h2>
            <div class="ticket-block">
               <div class="ticket-block__figure-background">
                  <div class="figure-background">
                     <img class="top-left" src="<?= get_template_directory_uri().'/assets/images/figure-topLeft.png' ?>" alt="">
                  </div>
                  <div class="figure-background">
                     <img class="bottom-left" src="<?= get_template_directory_uri().'/assets/images/figure-bottomLeft.png' ?>" alt="">
                  </div>
                  <div class="figure-background">
                     <img class="bottom-right" src="<?= get_template_directory_uri().'/assets/images/figure-bottomRight.png' ?>" alt="">
                  </div>
               </div>
               <div class="content">
                  <div class="slick-container">
                     <div class="slick-wrapper slick-vertical">

							<?php foreach($section ['items'] as $key => $value): ?>

								<div class="slider-item">
								 
                           <div class="slider-title">
                              <h3><?= $value ['title'] ?></h3>
                              <p><?= $value ['text'] ?>
                              </p>
                           </div>
                           <div class="slider-date">
                              <p class="d"><?= $value ['date'] ?></p>
                              <p class="m"><?= $value ['month'] ?></p>
                           </div>
                        </div>

							<?php endforeach; ?>

                     </div>
                  </div>
                  <div class="btns-container">
                     <div class="btn-next"></div>
                     <div class="btn-prev"></div>
                  </div>
               </div>

            </div>
         </div>
      </section>

		<?php $section = get_field('team'); ?>

      <section class="section-five" style="background: url(<?= get_template_directory_uri().'/assets/images/bg-images-4.png' ?>) no-repeat; background-size: cover; height: auto;">
         <div class="container">
            <h2 class="title__team"><?= $section ['title'] ?></h2>
            <div class="team">

				<?php foreach($section ['item'] as $key => $value): ?>
               
					<div class="team__item">
                  <div class="team__item-img">
                     <img src="<?= $value ['img'] ?>" alt="">
                  </div>
                  <div class="team__item-name">
                     <h3><?= $value ['name'] ?></h3>
                  </div>
                  <div class="team__item-position">
                     <p><?= $value ['information'] ?></p>
                  </div>
               </div>

				<?php endforeach; ?>

            </div>
         </div>
      </section>

		<?php $section = get_field('faq'); ?>

      <section class="section-six">
         <div class="background-figure">
            <div class="figure__background-faq">
               <img class="top-left" src="<?= get_template_directory_uri().'/assets/images/figure-faq__top-left.png' ?>" alt="">
            </div>
            <div class="figure__background-faq">
               <img class="bottom-left" src="<?= get_template_directory_uri().'/assets/images/figure-faq__bottom-left.png' ?>"
                  alt="">
            </div>
            <div class="figure__background-faq">
               <img class="bottom-right" src="<?= get_template_directory_uri().'/assets/images/figure-faq__bottom-right.png' ?>"
                  alt="">
            </div>
         </div>
         <div class="container">
            <h2 class="title__faq"><?= $section ['title'] ?></h2>
            <div class="faq-block">

				<?php foreach($section ['item'] as $key => $value): ?>
              
				   <div class="faq-block__item">
                  <div class="faq-block__svg">
							<img src="<?= $value ['icon'] ?>" alt="">
                  </div>
                  <div class="faq-block__title">
                     <h3><?= $value ['title'] ?></h3>
                  </div>
                  <div class="faq-block__text">
                     <p> <?= $value ['text'] ?>
                     </p>
                  </div>
               </div>
					
				<?php endforeach; ?>

            </div>
         </div>
      </section>

		<?php $section = get_field('sponsors'); ?>

      <section class="section-seven"  style="background: url(<?= get_template_directory_uri().'/assets/images/bg-images.png' ?>) no-repeat; background-size: cover; height: auto;" >
         <div class="container">
            <h2 class="title__sponsors"><?= $section ['title'] ?></h2>
            <div class="sponsors-ticket">
               <div class="sponsors-block js-block-info">

					<?php foreach($section ['item'] as $key => $value): ?>

                  <div class="sponsors-block__item">
                     <img src="<?= $value ['img'] ?>" alt="">
                  </div>
					
					<?php endforeach; ?>

					</div>
            </div>
         </div>
      </section>

		<?php $section = get_field('contact_us'); ?>

      <section class="section-eight">
         <div class="container">
            <h2 class="title__contact"><?= $section ['title'] ?></h2>
            <div class="contact-block">
               <div class="contact-block__left-position">
                  <div class="contact-background">
                     <div class="top-left">
                        <img src="<?= get_template_directory_uri().'/assets/images/figure-contact__top-left.png' ?>" alt="">
                     </div>
                     <div class="bottom-left">
                        <img src="<?= get_template_directory_uri().'/assets/images/figure-contact__bottom-left.png' ?>" alt="">
                     </div>
                  </div>
                  <div class="contact-block__info">
                     <ul class="contact-block__info-item">
							
							<?php foreach($section ['item'] as $key => $value): ?>
							
                        <li class="contact-block__info-mail">
									<img src="<?= $value ['icon'] ?>" alt="">
                           <a href="<?= $value ['link'] ['url'] ?>"><?= $value ['link'] ['title'] ?></a>
                        </li>

							<?php endforeach; ?>

                     </ul>
                  </div>
               </div>
               <div class="contact-block__right-position">
                  <iframe class="google-maps"
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.4149401412983!2d34.98161051567436!3d32.834263580954755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151dbbd0803422e7%3A0x4bc667f2ea55e771!2sThe%20Ruth%20and%20Bruce%20Rappaport%20Faculty%20of%20Medicine!5e0!3m2!1sru!2sua!4v1610111361652!5m2!1sru!2sua"
                     frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                  </iframe>
               </div>
            </div>
         </div>
      </section>

		<?php $section = get_field('form'); ?>

      <section class="section-nine"  style="background: url(<?= get_template_directory_uri().'/assets/images/bg-images-2.png' ?>) no-repeat; background-size: cover; height: auto;">
         <div class="container">
            <h2 class="title__form"><?= $section ['title'] ?></h2>
            <div class="forms">
               <?php echo do_shortcode('[caldera_form id="CF5ffa5c6495f42"]'); ?>
            </div>
         </div>
      </section>
   </main>


</div>



<?php

get_footer();