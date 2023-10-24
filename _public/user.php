<?php
$Route->add('/seed/forms/login', function () {

  $Template = new Apps\Template;
  $Core = new Apps\Core;
  $Data = $Core->data;
  $email = $Data->email;
  $password = $Data->password;
  $user =  $Core->UserLogin($email, $password);
  if ($user) {
    $Template->store('accid', $user);
    $Template->authorize($user);
    $Template->setError("Login success", "success", "/user-panel");
    $Template->redirect("/seed/user-panel");
  }
  $Template->setError("Login error", "warning", "/login");
  $Template->redirect("/seed/login");
}, 'POST');
$Route->add('/seed/forms/register', function () {
  $Template = new Apps\Template;
  $Core = new Apps\Core;
  $Data = $Core->data;
  $name = $Data->name;
  $email = $Data->email;
  $username = $Data->username;
  $referer = $Core->GetUserInfoUserName($Data->referer);

  $password = $Data->password;
  if ($referer) {
    $referer = $referer->id;
  } else {
    $referer = '1';
  }
  $user =  $Core->UserRegister($name, $email, $username, $password, $referer);
  if ($user) {
    $Template->setError("Registration success", "success", "/user-panel");
    $Template->redirect("/seed/login");
  }
  $Template->setError("Registration error", "warning", "/login");
  $Template->redirect("/seed/registration");
}, 'POST');
