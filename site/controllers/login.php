<?php

use Uniform\Form;

return function ($kirby) {

  // don't show the login screen to already logged in users
  if ($kirby->user()) {
    go(param('prevloc'));
  }

  $error = false;

  // handle the form submission
  if ($kirby->request()->is('POST') && get('login')) {

    // fetch the user by username
    if ($user = $kirby->user(get('email'))) {
      // if the user exists, try to log them in
      try {
        $user->login(get('password'));
        // redirect to the homepage
        // if the login was successful
        go(param('prevloc'));
      } catch (Exception $e) {
        $error = true;
      }

    } else {
      // make sure the alert is
      // displayed in the template
      $error = true;
    }

  }

  return [
    'error' => $error
  ];

};