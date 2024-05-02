<?php
  $name = trim(strip_tags($_POST["name"]));
  $sex = trim(strip_tags($_POST["sex"]));
  $email = trim(strip_tags($_POST["email"]));
  $country = trim(strip_tags($_POST["country"]));
  $subject = "Регистрация на сайте https://brandbook24.github.io/test5/";
  $msg = "Ваши данные формы регистрации:\n" ."Имя: $name\n" ."Пол: $sex\n" ."Ваш email: $email\n" ."Страна: $country";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Ekaterina <brandbook24@mail.ru>" . "\r\n";
  $headers .= "Bcc:brandbook24@mail.ru". "\r\n";
  if(!empty($name) && !empty($sex) && !empty($email) && !empty($country) && filter_var($email, FILTER_VALIDATE_EMAIL)){
 mail($email, $subject, $msg, $headers);
  echo "Спасибо! Вы успешно зарегистрировались.";
    }
?>
