<?php

if((isset($_POST['username'])&&$_POST['username']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'admin@wood05.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Message from wood05.ru'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['username'].'</p>
                        <p>Сообщение: '.$_POST['message'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        if (mail($to, $subject, $message, $headers)) echo "Send!";
        else echo "did not send";        
}else echo "error";


?>