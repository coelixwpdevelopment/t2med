async function hello ( name ) {
  console.log(`Hello ${name}`);
}

hello('Kitus');

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
});