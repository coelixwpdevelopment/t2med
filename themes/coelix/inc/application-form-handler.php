<?php

add_action( 'wp_ajax_application-form-submit', 'application_form_handle' );
add_action( 'wp_ajax_nopriv_application-form-submit', 'application_form_handle' );
function application_form_handle() {
  //var_dump($_FILES);

  $to = 'a.shkuropatov.workbox@gmail.com';
  $subject = 'Application form has been submitted';
  $message = '';
  $headers = [
    'content-type: text/html',
  ];
  $attachments = [];

  $message .= 'שם פרטי בעברית' . '<br>' . $_POST['fname'] . '<br>';
  $message .= 'שם פרטי באנגלית' . '<br>' . $_POST['eng_fname'] . '<br>';
  $message .= 'שם משפחה בעברית' . '<br>' . $_POST['lname'] . '<br>';
  $message .= 'שם משפחה באנגלית' . '<br>' . $_POST['eng_lname'] . '<br>';
  $message .= 'מספר תעודת זהות' . '<br>' . $_POST['id'] . '<br>';
  $message .= 'מספר טלפון נייד' . '<br>' . $_POST['phone'] . '<br>';

  $message .= 'מייל טכניוני' . '<br>' . $_POST['tech_email'] . '<br>';

  if(isset($_POST['other_email'])){
    $message .= 'מייל נוסף' . '<br>' . $_POST['other_email'] . '<br>';
  }

  $message .= 'סיסמא' . '<br>' . $_POST['password'] . '<br>';

  if(isset($_POST['faculty'])){
    $message .= 'פקולטה' . '<br>' . $_POST['faculty'] . '<br>';
  }

  if(isset($_POST['school_year'])){
    $message .= 'שנת לימודים' . '<br>' . $_POST['school_year'] . '<br>';
  }
  if(isset($_POST['motivation'])){
    $message .= 'מה המוטיבציה שלך להשתתפות בכנס?' . '<br>' . $_POST['motivation'] . '<br>';
  }

  if(isset($_POST['experience'])){
    $message .= 'רקע וניסיון מקצועי' . '<br>' . $_POST['experience'] . '<br>';
  }
  if(isset($_POST['have_idea'])){
    $message .= 'האם יש לך רעיון למיזם?' . '<br>' . $_POST['have_idea'] . '<br>';
  }
  if(isset($_POST['idea_description'])){
    $message .= ' במידה ויש לך רעיון למיזם, כתוב אותו בקצרה.' . '<br>' . $_POST['idea_description'] . '<br>';
  }


  $message = '<html><head></head><body>' . $message . '</body></html>';


  $filekeys = ['profile_picture', 'resume'];
  $target_dir = $_SERVER['DOCUMENT_ROOT']. "/uploads/";

  foreach($filekeys as $filekey){
    $image_name = $_FILES[$filekey]['name'];
    $target_file = $target_dir . basename($_FILES[$filekey]['name']);
    if (move_uploaded_file($_FILES[$filekey]["tmp_name"], $target_file)) {
      $attachments[] = $target_file;
    }
    //TODO: handle errors on file uploads
  }

  echo wp_mail( $to, $subject, $message, $headers, $attachments );
  die();



}