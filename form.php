<meta http-equiv='refresh' content='1; url=http://kuzminova.com'>
<meta charset="UTF-8" />

<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

   if(!empty($_POST['tel']) and !empty($_POST['email'])
   and !empty($_POST['text'])){
      $tel = trim(strip_tags($_POST['tel']));
      $email = trim(strip_tags($_POST['email']));
      $text = trim(strip_tags($_POST['text']));

      mail('repz3@yandex.ru', 'Обратная связь моего фотосайта',
      'Его номер: '.$tel.'<br />Его почта: '.$email.'<br />
      Его сообщение: '.$text,"Content-type:text/html;charset=UTF-8");

      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в
      ближайшее время<Br> $back";

      exit;
   }
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>


Мой вариант

<meta http-equiv='refresh' content='1; url=http://kuzminova.com/test.html'>
<meta charset="UTF-8" />

<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

   if(!empty($_POST['phone']) and !empty($_POST['name'])
   and !empty($_POST['text']) and !empty($_POST['time']) )

   {
      $phone = trim(strip_tags($_POST['phone']));
      $name = trim(strip_tags($_POST['name']));
      $time = trim(strip_tags($_POST['time']));
      $text = trim(strip_tags($_POST['text']));

      mail('repz3@yandex.ru', 'Вова, тебе сделан заказ с сайта Молот-Торта',
      'Номер телефона: '.$phone.'<br />Имя заказчика: '.$name.'<br />
      Удобное время для звонка'.$time.'<br />
      Сообщение: '.$text,'Content-type:text/html;charset=UTF-8');

      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в
      ближайшее время<Br> $back";

      exit;
   }
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>