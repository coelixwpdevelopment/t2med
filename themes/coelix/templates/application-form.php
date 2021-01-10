<?php
/**
* Template Name: Application form
*
* @package WordPress
* @subpackage Coelix
* @since Coelix 1.0
*/
get_header();

?>
<main id="primary" class="site-main" dir="rtl">

  <div class="p-app-form">
      <div class="page-header">
        <div class="container-1530 ml-auto mr-auto">
          <div class="row">
            <div class="col-12">
              <div class="page-header__title">
                טופס בקשה
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      if(wp_is_mobile()){
        get_template_part( 'template-parts/application-form-mobile' );
      } else {
        get_template_part( 'template-parts/application-form-desktop' );
      }
      ?>

  </div>

</main>

<div class="app-form-success">
  <div class="app-form-success__overlay"></div>
  <div class="app-form-success__popup">
    
    <div class="app-form-success__top-figure"></div>
    <div class="app-form-success__bottom-figure"></div>

    <div class="app-form-success__close"></div>
    <div class="app-form-success__popup-content">
      <div class="app-form-success__checks">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/pages/app-form/double-check.svg'; ?>" alt="">
      </div>
      <div class="app-form-success__title">
        הגשת המועמדות הועלתה למערכת בהצלחה!
      </div>
      <div class="app-form-success__text">
        למתקבלים יישלח מייל לגבי המשך התחרות עד ה0202.1.71- תודה על הגשת המועמדות
      </div>
    </div>
  </div>
</div>
<?php

get_footer();
?>