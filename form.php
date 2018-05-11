<meta http-equiv='refresh' content='1; url=молот-торта.рф'>
<meta charset="UTF-8" />

<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

   if(!empty($_POST['phone']) and !empty($_POST['name'])
   and !empty($_POST['text']) and !empty($_POST['time']))

   {
      $phone = trim(strip_tags($_POST['phone']));
      $name = trim(strip_tags($_POST['name']));
      $time = trim(strip_tags($_POST['time']));
      $text = trim(strip_tags($_POST['text']));
      $order = trim(strip_tags($_POST['order']));

      mail('berezhnoivv59@gmail.com', 'Владимир, тебе сделан заказ с сайта Молот-Торта',
      'Номер телефона: '.$phone.'<br />Имя заказчика: '.$name.'<br />
      Удобное время для звонка '.$time.'<br /> Заказ '.$order.'<br />
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