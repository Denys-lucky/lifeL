<?php
// <!-- получим данные с элементов формы -->


    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    //обработаем полученные данные

    $name = htmlspecialchars($name);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);

    $name = urldecode($name);
    $tel = urldecode($tel);
    $email = urldecode($email);

    $name = trim($name);
    $tel = trim($tel);
    $email = trim($email);

    if(mail("info@lifelink.ru",
    "Новое прсиьмо с сайта",
    "Логин: ".$name."\n".
    "Телефон: ".$tel."\n ".
    "Email: ".$email."\n ",
    "From no-reply@damain.ru \r\n")
    ) {
        echo ('Письмо успешно отправлено!');
    }
     else {
         echo("Есть ошибкИ! проверьте данные...");
     }






     $street = $_POST['street'];
     $name = $_POST['name'];
     $tel = $_POST['tel'];
 
     //обработаем полученные данные
 
     $street = htmlspecialchars($street);
     $name = htmlspecialchars($name);
     $tel = htmlspecialchars($tel);
 
     $street = urldecode($street);
     $name = urldecode($name);
     $tel = urldecode($tel);
 
     $street = trim($street);
     $name = trim($name);
     $tel = trim($tel);
 
     if(mail("info@lifelink.ru",
     "Новое прсиьмо с сайта",
     "Улица: ".$street."\n".
     "Имя: ".$name."\n ".
     "Телефон: ".$tel."\n ",
     "From no-reply@damain.ru \r\n")
     ) {
         echo ('Письмо успешно отправлено!');
     }
      else {
          echo("Есть ошибкИ! проверьте данные...");
      }

      $pay = $_POST['pay'];
      $summa = $_POST['summa'];
  
      //обработаем полученные данные
  
      $pay = htmlspecialchars($pay);
      $summa = htmlspecialchars($summa);
  
      $pay = urldecode($pay);
      $summa = urldecode($summa);
  
      $pay = trim($pay);
      $summa = trim($summa);
  
      if(mail("info@lifelink.ru",
      "Новое прсиьмо с сайта",
      "№ ПЛАТЕЖНЫЙ: ".$pay."\n".
      "СУММА: ".$summa."\n ",
      "From no-reply@damain.ru \r\n")
      ) {
          echo ('Письмо успешно отправлено!');
      }
       else {
           echo("Есть ошибкИ! проверьте данные...");
       }

    $street = $_POST['street'];
    $your_name = $_POST['your_name'];
    $your_tel = $_POST['your_tel'];

    //обработаем полученные данные

    $street = htmlspecialchars($street);
    $your_name = htmlspecialchars($your_name);
    $your_tel = htmlspecialchars($your_tel);

    $street = urldecode($street);
    $your_name = urldecode($your_name);
    $your_tel = urldecode($your_tel);

    $street = trim($street);
    $your_name = trim($your_name);
    $your_tel = trim($your_tel);

    if(mail("info@lifelink.ru",
    "Новое прсиьмо с сайта",
    "Улица: ".$street."\n".
    "Имя: ".$your_name."\n ".
    "Телефон: ".$your_tel."\n ",
    "From no-reply@damain.ru \r\n")
    ) {
        echo ('Письмо успешно отправлено!');
    }
     else {
         echo("Есть ошибкИ! проверьте данные...");
     }



     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $tel = $_POST['tel'];
     $address = $_POST['address'];
     $email = $_POST['email'];

 
     //обработаем полученные данные
 
     $name = htmlspecialchars($name);
     $surname = htmlspecialchars($surname);
     $tel = htmlspecialchars($tel);
     $address = htmlspecialchars($address);
     $email = htmlspecialchars($email);
 
     $name = urldecode($name);
     $surname = urldecode($surname);
     $tel = urldecode($tel);
     $address = urldecode($address);
     $email = urldecode($email);

 
     $name = trim($name);
     $surname = trim($surname);
     $tel = trim($tel);
     $address = trim($address);
     $email = trim($email);
 
     if(mail("info@lifelink.ru",
     "Новое прсиьмо с сайта",
     "Имя: ".$name."\n".
     "Фамилия: ".$surname."\n ".
     "Телефон: ".$tel."\n ".
     "Адрес: ".$address."\n ".
     "Email: ".$email."\n ",

     "From no-reply@damain.ru \r\n")
     ) {
         echo ('Письмо успешно отправлено!');
     }
      else {
          echo("Есть ошибкИ! проверьте данные...");
      }

?>