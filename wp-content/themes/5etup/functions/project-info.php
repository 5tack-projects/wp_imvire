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

      global $adres;
      global $postcode;   
      global $city;
      global $location;

      global $kvk;
      global $linkedin;

      global $copyright;

      $mobile_number = "27826672";
      $email = "info@5uraj.nl";

      $email_send = "mailto:$email";

      $phone = "+316 - 53421172";
      $phone_wha = "https://wa.me/316$mobile_number";
      $phone_display = "+316-$mobile_number";
      $phone_call = "";

      $kvk = "57589232";
      $adres = "Vedelring 65";
      $postcode = "4876 EK";
      $city = "Etten-Leur";
      $location = "$adres </br> $postcode, $city";

      $linkedin = "https://www.linkedin.com/in/suraj-mohunlol-30596a32/";

      $copyright = "2003 - " . date('Y');
  }
  add_action( 'init', 'set_global_nav_var' );

?>