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

      <section class="section-five" style="background: url(<?= get_template_directory_uri().'/assets/images/bg-images-4.png' ?>) no-repeat;">
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

               <!-- <div class="faq-block__item">
                  <div class="faq-block__svg">
                     <svg width="30" height="40" viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M4.28571 35.7895C1.92857 35.7895 0 37.6842 0 40H30C30 37.6842 28.0714 35.7895 25.7143 35.7895H17.1429V31.5789H23.5714C25.9286 31.5789 27.8571 29.6842 27.8571 27.3684H10.7143C7.15714 27.3684 4.28571 24.5474 4.28571 21.0526C4.28571 18.7579 5.55 16.7579 7.41429 15.6632C6.79286 14.8 6.42857 13.7684 6.42857 12.6316C6.42857 12.1895 6.51429 11.7474 6.62143 11.3263C4.66375 12.1243 2.9903 13.4738 1.81197 15.2047C0.633646 16.9355 0.00317132 18.9703 0 21.0526C0 26.8632 4.8 31.5789 10.7143 31.5789V35.7895H4.28571Z"
                           fill="#032954" />
                        <path
                           d="M11.9143 7.38947C14.8071 7.45263 17.1429 9.76842 17.1429 12.6316C17.1429 14.2105 16.4357 15.6 15.3214 16.5684L16.5857 19.9789L18.6 19.2632L19.3286 21.2421L23.3571 19.8105L22.6286 17.8316L24.6429 17.1158L18.7714 1.26316L16.7571 1.97895L16.0286 0L12 1.43158L12.7286 3.41053L10.7143 4.14737L11.9143 7.38947Z"
                           fill="#032954" />
                        <path
                           d="M11.7857 15.7895C13.5609 15.7895 15 14.3756 15 12.6316C15 10.8875 13.5609 9.47368 11.7857 9.47368C10.0105 9.47368 8.57143 10.8875 8.57143 12.6316C8.57143 14.3756 10.0105 15.7895 11.7857 15.7895Z"
                           fill="#032954" />
                     </svg>

                  </div>
                  <div class="faq-block__title">
                     <h3>I'm not a medical student, is there any point in applying?</h3>
                  </div>
                  <div class="faq-block__text">
                     <p>The simple answer is: Yes. In all competitions in previous years students from a variety of
                        disciplines have worked together in mixed groups. Students of electrical engineering and
                        mechanical engineering worked alongside students in biomedical engineering, architecture,
                        computer science, chemistry, psychology and medicine. As long as you have a passion for
                        technology and medical initiatives, your contribution to the conference will be meaningful.
                     </p>
                  </div>
               </div>
               <div class="faq-block__item">
                  <div class="faq-block__svg">
                     <svg width="31" height="34" viewBox="0 0 31 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M3.44444 34H27.5556C29.4552 34 31 32.4751 31 30.6V6.8C31 4.9249 29.4552 3.4 27.5556 3.4H24.1111V0H20.6667V3.4H10.3333V0H6.88889V3.4H3.44444C1.54483 3.4 0 4.9249 0 6.8V30.6C0 32.4751 1.54483 34 3.44444 34ZM3.44444 8.5H27.5556V11.9H3.44444V8.5Z"
                           fill="#032954" />
                     </svg>
                  </div>
                  <div class="faq-block__title">
                     <h3>How will we conduct the competition this year?</h3>
                  </div>
                  <div class="faq-block__text">
                     <p> <span>This year the competition will be executed solely through the use of virtual
                           collaboration
                           platforms:</span>
                        Lectures will be administered as a part of the learning process for the competition through
                        'Zoom', as well as consultations with mentors. All of the following will be done through the
                        'Discord' app: teams' group collaboration on their project, requesting consultations with
                        mentors, and any acceptance messages from the organizing team. To culminate, the final
                        projects will be demonstrated through a unique and creative video presentation, which will
                        be uploaded to the competition's Youtube Channel."
                     </p>
                  </div>
               </div>
               <div class="faq-block__item">
                  <div class="faq-block__svg">
                     <svg width="43" height="30" viewBox="0 0 43 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M15.5278 0.0478516C13.2957 0.0478516 11.4443 1.22009 10.9142 2.80403C10.8545 2.80403 10.8097 2.7926 10.75 2.7926C8.11476 2.7926 5.97222 4.43372 5.97222 6.45226C5.97222 6.72673 6.01701 6.99549 6.09913 7.25281C3.91927 7.93899 2.38889 9.5744 2.38889 11.4843C2.38889 12.2048 2.62778 12.8738 3.00851 13.4799C1.21684 14.2691 0 15.7329 0 17.4312C0 19.3354 1.52292 20.9708 3.68785 21.657C3.62066 21.92 3.58333 22.1888 3.58333 22.4633C3.58333 24.7391 5.98715 26.5804 8.95833 26.5804C9.26441 26.5804 9.56302 26.5518 9.85417 26.5118C10.5708 28.1415 12.5566 29.3251 14.9306 29.3251C17.9017 29.3251 20.3056 27.4839 20.3056 25.208V3.70751C20.3056 1.68898 18.163 0.0478516 15.5278 0.0478516ZM43 17.4312C43 15.7329 41.7832 14.2691 39.9915 13.4799C40.3797 12.8738 40.6111 12.2048 40.6111 11.4843C40.6111 9.5744 39.0807 7.93899 36.9009 7.25281C36.9755 6.99549 37.0278 6.72673 37.0278 6.45226C37.0278 4.43372 34.8852 2.7926 32.25 2.7926C32.1903 2.7926 32.138 2.80403 32.0858 2.80403C31.5557 1.22009 29.7043 0.0478516 27.4722 0.0478516C24.837 0.0478516 22.6944 1.68326 22.6944 3.70751V25.208C22.6944 27.4839 25.0983 29.3251 28.0694 29.3251C30.4434 29.3251 32.4292 28.1415 33.1458 26.5118C33.437 26.5518 33.7356 26.5804 34.0417 26.5804C37.0128 26.5804 39.4167 24.7391 39.4167 22.4633C39.4167 22.1888 39.3793 21.92 39.3121 21.657C41.4771 20.9708 43 19.3354 43 17.4312Z"
                           fill="#032954" />
                     </svg>
                  </div>
                  <div class="faq-block__title">
                     <h3>What is the advantage of T2MED over other events?</h3>
                  </div>
                  <div class="faq-block__text">
                     <p>t2med competition is an enterprise project held by the Rappaport Faculty of Medicine of the
                        Technion, which encourages entrepreneurship and innovation in the medical field. The
                        competition creates collaborations between countless students from a variety of faculties
                        across the Technion, and from institutions all around the world, giving them the opportunity
                        to think up and execute cutting edge ideas to advance the field of Medicine.
                     </p>
                  </div>
               </div>
               <div class="faq-block__item">
                  <div class="faq-block__svg">
                     <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M38.7 0H4.3C1.935 0 0.0215 1.84184 0.0215 4.09297L0 40.9297L8.6 32.7438H38.7C41.065 32.7438 43 30.9019 43 28.6508V4.09297C43 1.84184 41.065 0 38.7 0ZM23.65 24.5578H19.35V20.4648H23.65V24.5578ZM23.65 16.3719H19.35V8.18594H23.65V16.3719Z"
                           fill="#032954" />
                     </svg>
                  </div>
                  <div class="faq-block__title">
                     <h3>What can I get out of the T2MED 3DS conference?</h3>
                  </div>
                  <div class="faq-block__text">
                     <p>In the worst-case scenario, you are going to work with brilliant people from a variety of
                        fields to create a medical start-up. This is the first step where you can learn a lot about
                        the world of medical entrepreneurship. The conference is a wonderful opportunity to develop
                        relationships with greenhouses, entrepreneurs and people with experience in product
                        development. In the best case scenario, you might end up as the founders of an innovative
                        medical start-up.
                     </p>
                  </div>
               </div> -->
            </div>
         </div>
      </section>

		<?php $section = get_field('sponsors'); ?>

      <section class="section-seven"  style="background: url(<?= get_template_directory_uri().'/assets/images/bg-images.png' ?>) no-repeat; background-size: cover; height: auto;" >
         <div class="container">
            <h2 class="title__sponsors"><?= $section ['title'] ?></h2>
            <div class="sponsors-ticket">
               <div class="sponsors-block">

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

                        <!-- <li class="contact-block__info-text">
                           <p>Rappaport Faculty of Medicine of the Technion <br> 1 Efron St. Bat Galim, Haifa</p>
                        </li>
                        <li class="contact-block__info-facebook">
                           <a href="">our facebook</a>
                        </li> -->
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