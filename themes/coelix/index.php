<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

get_header();
?>

<main id="primary" class="site-main">

   <section class="section-one">
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
               <p class="main-info__startup-days">3 day</p>
               <p class="main-info__startup-txt">startup</p>
            </div>
            <div class="main-info__dates">
               <p class="main-info__dates-one">24-26 march, 2021</p>
               <p class="main-info__dates-two">FACULTY OF MEDICINE, TECHNION</p>
            </div>
            <div class="button">
               <button class="button__apply">Apply for T2MED</button>
               <button class="button__login">Login</button>
            </div>
         </div>
      </div>
   </section>

   <section class="section-two">
      <div class="left-background">
         <div class="figure-background">
            <img class="left-top" src="http://t2med/wp-content/uploads/2021/01/medic__top-left.png" alt="">
         </div>
         <div class="figure-background">
            <img class="left-bottom" src="http://t2med/wp-content/uploads/2021/01/medic__bottom-left.png" alt="">
         </div>
      </div>
      <div class="right-background">
         <img class="right-center" src="http://t2med/wp-content/uploads/2021/01/medic__right.png" alt="">
      </div>
      <div class="container">
         <div class="medical-info">
            <div class="medical-info__left-position">
               <div class="medical-info__block">
                  <h2>Medical Entrepreneurship Hackathon</h2>
                  <span>For students of all degrees and all Technion faculties</span>
                  <p>The T2MED conference will bring together students from the various faculties in order to find
                     a technological and business solution to medical problems. The students will learn to build
                     a business plan, work on an initial prototype, interview potential customers and users, and
                     ultimately present their products to leading industry and health care providers in Israel.
                     The students' work at the conference will be conducted in small, multidisciplinary groups;
                     Each group will focus on a different medical problem that will be chosen by the group
                     members and will receive personal mentoring from leading mentors in the field of medical
                     entrepreneurship in Israel.
                  </p>
               </div>
            </div>
            <div class="medical-info__right-position">
               <div class="last">
                  <img src="http://t2med/wp-content/uploads/2021/01/medic-img.png" alt="">
                  <div class="last__block">
                     <h4>Last year winners: <span>ALARMI</span></h4>
                     <p>Hadas Braude‎‏ | sean Heilbronn-Doron | Noa Goldberg | Valentina d'Empaire | Cameron Guernsey
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section-three">
      <div class="container">
         <h2 class="title__awards">Awards</h2>
         <div class="section-content">
            <div class="section-content__item-1">
               <div class="item__info">
                  <div class="item__images">
                     <img class="images-1" src="http://t2med/wp-content/uploads/2021/01/3-2.png" alt="">
                  </div>
                  <h3>HEADPHONES + ₪3,000 grant</h3>
                  <p>JBL LIVE 500BT +<br>3,000 ILS grant per team to use in the 'BizTEC'' program</p>
               </div>
               <div class="item__price">
                  <p>3 place</p>
               </div>
            </div>
            <div class="section-content__item-2">
               <div class="item__info-2">
                  <div class="item__images">
                     <img src="http://t2med/wp-content/uploads/2021/01/1-2.png" alt="">
                  </div>
                  <h3>ipad + ₪7,000 grant </h3>
                  <p>ipad 8th generation + 7,000 ILS grant per team to use in the 'BizTEC'' program</p>
               </div>
               <div class="item__price-2">
                  <p>1 place</p>
               </div>
            </div>
            <div class="section-content__item-3">
               <div class="item__info-3">
                  <div class="item__images">
                     <img src="http://t2med/wp-content/uploads/2021/01/2-2.png" alt="">
                  </div>
                  <h3>Vacation in Israel + ₪5,000 grant</h3>
                  <p>Voucher for a night in a B&B or hotel +<br>5,000 ILS grant per team to use in the 'BizTEC''
                     program</p>
               </div>
               <div class="item__price-3">
                  <p>1 place</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section-four">
      <div class="container">
         <h2 class="title__program">program</h2>
         <div class="ticket-block">
            <div class="ticket-block__figure-background">
               <div class="figure-background">
                  <img class="top-left" src="http://t2med/wp-content/uploads/2021/01/figure-topLeft.png" alt="">
               </div>
               <div class="figure-background">
                  <img class="bottom-left" src="http://t2med/wp-content/uploads/2021/01/figure-bottomLeft.png" alt="">
               </div>
               <div class="figure-background">
                  <img class="bottom-right" src="http://t2med/wp-content/uploads/2021/01/figure-bottomRight.png" alt="">
               </div>
            </div>
            <div class="content">
               <div class="slick-container">
                  <div class="slick-wrapper slick-vertical">
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Applying</h3>
                           <p>On Sunday, January 3rd, 2021 the registration for the competition begins!
                              As a first step on your way to join the team and develop an idea for an entrepreneurial
                              project that might become a high-tech company, Interested students will be able to
                              introduce themselves and their desire to take part in the competition through applying.
                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">3<span>th</span></p>
                           <p class="m">January</p>
                        </div>
                     </div>
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Submitting ideas</h3>
                           <p>From Sunday February 14th, all accepted applicants can start submitting their project
                              ideas for the competition! At this stage, participants will be given the chance to offer
                              up the project they would like to develop in the competition, and possibly to become the
                              leader of the group responsible for promoting that project.
                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">14<span>th</span></p>
                           <p class="m">February</p>
                        </div>
                     </div>
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Ideas Rating</h3>
                           <p>From Thursday March 4th-10th competition participants will be presented with all potential
                              project ideas, and asked to rate the ideas according to personal degree of interest and
                              desire to take part in the development of these ideas.
                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">4<span>th</span></p>
                           <p class="m">March</p>
                        </div>
                     </div>
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Zoom metings</h3>
                           <p>On Wednesday March 17th, preparatory meetings will take place on Zoom! We will
                              continue the planning discussions through our Facebook group.
                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">17<span>th</span></p>
                           <p class="m">March</p>
                        </div>
                     </div>
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Hackathon begins!</h3>
                           <p>On Wednesday March 24 th , presentations of the chosen project ideas will begin... the
                              Hackathon goes live!

                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">24<span>th</span></p>
                           <p class="m">March</p>
                        </div>
                     </div>
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Keep working!</h3>
                           <p>we will dive into how to build a business model - what is the product?
                              Who are the customers? We will do field research, asking doctors, potential clients, and
                              anyone willing to help us! After this research, we will learn how to summarize our whole
                              big project idea into a winning video, and we will begin working on the presentation
                              video.
                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">25<span>th</span></p>
                           <p class="m">March</p>
                        </div>
                     </div>
                     <div class="slider-item">
                        <div class="slider-title">
                           <h3>Developing your project</h3>
                           <p>Finally, the long-awaited day has arrived! After two consecutive days of work (and weeks
                              of pre-planning), it’s time to close corners, tie everything up, and make those final
                              tweaks before submitting final project videos.After submission and review of the videos,
                              the best teams will move to the final round of
                              judging! Those selected will present their project ideas in front of a panel of judges
                              over
                              Zoom, and answer questions about their projects.
                           </p>
                        </div>
                        <div class="slider-date">
                           <p class="d">26<span>th</span></p>
                           <p class="m">March</p>
                        </div>
                     </div>
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

   <section class="section-five">
      <div class="container">
         <h2 class="title__team">Organizing team</h2>
         <div class="team">
            <div class="team__item">
               <div class="team__item-img">
                  <img src="http://t2med/wp-content/uploads/2021/01/4H3A2322-1-1.png" alt="">
               </div>
               <div class="team__item-name">
                  <h3>Sean Heilbronn-Doron</h3>
               </div>
               <div class="team__item-position">
                  <p>M.D student</p>
               </div>
            </div>
            <div class="team__item">
               <div class="team__item-img">
                  <img src="http://t2med/wp-content/uploads/2021/01/Ellipse-11-2.png" alt="">
               </div>
               <div class="team__item-name">
                  <h3>Lihi Blumen</h3>
               </div>
               <div class="team__item-position">
                  <p>M.D student</p>
               </div>
            </div>
            <div class="team__item">
               <div class="team__item-img">
                  <img src="http://t2med/wp-content/uploads/2021/01/Ellipse-11-1-1.png" alt="">
               </div>
               <div class="team__item-name">
                  <h3>Omer Bachar</h3>
               </div>
               <div class="team__item-position">
                  <p>B.Sc student information systems engineering</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section-six">
      <div class="background-figure">
         <div class="figure__background-faq">
            <img class="top-left" src="http://t2med/wp-content/uploads/2021/01/figure-faq__top-left.png" alt="">
         </div>
         <div class="figure__background-faq">
            <img class="bottom-left" src="http://t2med/wp-content/uploads/2021/01/figure-faq__bottom-left.png" alt="">
         </div>
         <div class="figure__background-faq">
            <img class="bottom-right" src="http://t2med/wp-content/uploads/2021/01/figure-faq__bottom-right.png" alt="">
         </div>
      </div>
      <div class="container">
         <h2 class="title__faq">faq</h2>
         <div class="faq-block">
            <div class="faq-block__item">
               <div class="faq-block__svg">
                  <svg width="51" height="26" viewBox="0 0 51 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M25.5 14.625C28.9638 14.625 32.0238 15.47 34.51 16.575C36.805 17.615 38.25 19.955 38.25 22.49V26H12.75V22.5117C12.75 19.955 14.195 17.615 16.49 16.5967C18.9763 15.47 22.0363 14.625 25.5 14.625ZM8.5 15.1667C10.8375 15.1667 12.75 13.2167 12.75 10.8333C12.75 8.45 10.8375 6.5 8.5 6.5C6.1625 6.5 4.25 8.45 4.25 10.8333C4.25 13.2167 6.1625 15.1667 8.5 15.1667ZM10.9013 17.55C10.115 17.42 9.32875 17.3333 8.5 17.3333C6.39625 17.3333 4.39875 17.7883 2.5925 18.59C1.82264 18.9255 1.16646 19.4843 0.705539 20.197C0.244615 20.9096 -0.000730333 21.7447 1.63305e-06 22.5983V26H9.5625V22.5117C9.5625 20.7133 10.0513 19.0233 10.9013 17.55ZM42.5 15.1667C44.8375 15.1667 46.75 13.2167 46.75 10.8333C46.75 8.45 44.8375 6.5 42.5 6.5C40.1625 6.5 38.25 8.45 38.25 10.8333C38.25 13.2167 40.1625 15.1667 42.5 15.1667ZM51 22.5983C51 20.8433 49.98 19.2833 48.4075 18.59C46.5442 17.761 44.533 17.3332 42.5 17.3333C41.6712 17.3333 40.885 17.42 40.0988 17.55C40.9487 19.0233 41.4375 20.7133 41.4375 22.5117V26H51V22.5983ZM25.5 0C29.0275 0 31.875 2.90333 31.875 6.5C31.875 10.0967 29.0275 13 25.5 13C21.9725 13 19.125 10.0967 19.125 6.5C19.125 2.90333 21.9725 0 25.5 0Z"
                        fill="#032954" />
                  </svg>
               </div>
               <div class="faq-block__title-first">
                  <h3>Who are we?</h3>
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
            </div>
         </div>
      </div>
   </section>

   <section class="section-seven">
      <div class="container">
         <h2 class="title__sponsors">sponsors</h2>
         <div class="sponsors-ticket">
            <div class="sponsors-block">
               <div class="sponsors-block__item">
                  <img src="http://t2med/wp-content/uploads/2021/01/1-1.png" alt="">
               </div>
               <div class="sponsors-block__item">
                  <img src="http://t2med/wp-content/uploads/2021/01/2-1.png" alt="">
               </div>
               <div class="sponsors-block__item">
                  <img src="http://t2med/wp-content/uploads/2021/01/3-1.png" alt="">
               </div>
               <div class="sponsors-block__item">
                  <img src="http://t2med/wp-content/uploads/2021/01/4.png" alt="">
               </div>
               <div class="sponsors-block__item">
                  <img src="http://t2med/wp-content/uploads/2021/01/5.png" alt="">
               </div>
               <div class="sponsors-block__item">
                  <img src="http://t2med/wp-content/uploads/2021/01/6.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section-eight">
      <div class="container">
         <h2 class="title__contact">contact us</h2>
         <div class="contact-block">
            <div class="contact-block__left-position">
               <div class="contact-background">
                  <div class="top-left">
                     <img src="http://t2med/wp-content/uploads/2021/01/figure-contact__top-left.png" alt="">
                  </div>
                  <div class="bottom-left">
                     <img src="http://t2med/wp-content/uploads/2021/01/figure-contact__bottom-left.png" alt="">
                  </div>
               </div>
               <div class="contact-block__info">
                  <ul class="contact-block__info-item">
                     <li class="contact-block__info-mail">
                        <a href="mailto:team@t2med.co.il">team@t2med.co.il</a>
                     </li>
                     <li class="contact-block__info-text">
                        <p>Rappaport Faculty of Medicine of the Technion <br> 1 Efron St. Bat Galim, Haifa</p>
                     </li>
                     <li class="contact-block__info-facebook">
                        <a href="">our facebook</a>
                     </li>
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
</main>

<?php
get_sidebar();
get_footer();