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
      
        console.log(this);
        
        if (e.target.files && e.target.files.length) {
          let filename = e.target.files[0].name;
          $label.text(filename);
        } else {
          $label.text(placeholder);
        }
      });
    });
  }


  //application form logic
  if($('.p-app-form__application-form').length){

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


