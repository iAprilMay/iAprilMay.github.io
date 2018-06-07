<?php

$result = mail("test@test.ru", "Письмо с сайта",
    "Пользователь заполнил форму в которой указал следующую информацию:
 \nИмя - $_POST[form_name];
  \nТелефон - $_POST[form_phone_number];
   \nЭлектронный адрес - $_POST[form_email];
    \nОставил сообщение: $_POST[name_form_datetime_beta]");

if ($result) {
    echo "<p>Ваша форма успешно передана на обработку</p>";
} else {

    echo "<p>Ваша форма НЕ передана на обработку</p>";
};