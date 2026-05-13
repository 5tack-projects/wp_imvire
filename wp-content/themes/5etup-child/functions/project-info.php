<?php

  // Global Vars
  function set_global_nav_var()
  {
      global $phone;
      global $mobile_number;
      global $phone_display;
      global $phone_wha;
      global $phone_call;

      global $email;
      global $email_send;

      global $kvk;
      global $linkedin;

      $mobile_number = "27826672";
      $email = "info@imvire.nl";

      $email_send = "mailto:$email";

      $phone = "+316 - 53421172";
      $phone_wha = "https://wa.me/316$mobile_number";
      $phone_display = "+316-$mobile_number";
      $phone_call = "";

      $kvk = "57589232";
      // $adres = "Adress 12";
      // $postcode = "1234 PS";
      // $city = "City";

      $linkedin = "https://www.linkedin.com/in/suraj-mohunlol-30596a32/";
  }
  add_action( 'init', 'set_global_nav_var' );

?>