require('jquery-nice-select');

$(document).ready(function() {
  $('.application-form-select').niceSelect();

  //Application form file inputs logic
  if ($('.application-form-file-input').length) {
    
    $('.application-form-file-input').each(function(){
      let $label = $(this).find('.application-form-file-input__label');
      let $input = $(this).find('.application-form-file-input__input');
      let placeholder = $(this).data('placeholder');

      $input.on('change', function(e) {
        
        if (e.target.files && e.target.files.length) {
          let filename = e.target.files[0].name;
          $label.text(filename);
        } else {
          $label.text(placeholder);
        }
      });
    });
  }

  // Texareas maxlength display
  if ($('.application-form-textarea').length) {
    $('.application-form-textarea').each(function(){
      let $input = $(this).find('.application-form-textarea__input');
      if($input[0].hasAttribute('maxlength')){
        let $symbols_count = $(this).find('.application-form-textarea__symbols-count');
        let max_symbols_count = $input.attr('maxlength');
        $symbols_count.text( max_symbols_count + '/0');
        $input.on('input', function(e){
          $symbols_count.text(max_symbols_count + '/' + this.value.length);
        });
      }
    });
  }


  //application form logic
  if($('.p-app-form__application-form').length){

    $('input[name="have_idea"]').on('change', function(){
      let $idea_desc = $('.js-idea-desc');
      if(this.value === 'Yes'){
        $idea_desc.show();
      }
      else{
        
        $idea_desc.hide();
      }
    });

    $('.p-app-form__application-form').on('submit', function(e){
      e.preventDefault();
      const data = new FormData(this);

      $.ajax({
        type: "POST",
        url: ajaxUrl,
        processData: false,
        contentType: false,
        data: data,
        success: function(response) {
          if(response === '1') {
            $('.app-form-success').addClass('app-form-success__open');
            $("body").css("overflow", "hidden");
          } else {
            alert('Something went wrong');
          }
        }
      });
    });

    function closeAppFormPopup(){
      $('.app-form-success').removeClass('app-form-success__open');
      $("body").css("overflow", '');
      location.reload();
    }

    $('.app-form-success__close, .app-form-success__overlay').on('click', closeAppFormPopup);
  }
});

$('.slick-vertical').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 1,

    speed: 700,
    autoplay: true,
    dots: true,

    prevArrow: $('.btn-next'),
    nextArrow: $('.btn-prev'),
});

/* sponsors */ 
$('.js-block-info').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  rtl: false,
  responsive: [
      {
          breakpoint: 9999,
          settings: "unslick"
      },
      {
          breakpoint: 999,
          settings: {
              dots: true,
              slidesToShow: 3,
              arrows: true,
              prevArrow: $('.spons-next'),
              nextArrow: $('.spons-prev'),
          }
      }
  ]
});
