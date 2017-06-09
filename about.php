<?php
$name='Елена';
$age='30';
$email='elevinogrado@yandex.ru';
$town='Сочи';
$about_me='Hey there, I"m using php!';
?>
<section>
  <h1>Страница пользователя <?=$name?></h1>
  <table>
    <tbody>
    <tr>
      <td>Имя</td>
      <td><?=$name ?></td>
    </tr>
    <tr>
      <td>Возраст</td>
      <td><?=$age ?></td>
    </tr>
    <tr>
      <td>Адрес электронной почты</td>
      <td><?=$email ?></td>
    </tr>
    <tr>
      <td>Город</td>
      <td><?=$town ?></td>
    </tr>
    <tr>
      <td>О себе</td>
      <td><?=$about_me ?></td>
    </tr>
    </tbody>
  </table>
  </section>
