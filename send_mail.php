<?php
    $txt = "Поступил новый заказ\n";
    $txt .= "Лук севок: " . $_POST['prod_1'] . "\n";
    $txt .= "Лук порей: " . $_POST['prod_2'] . "\n";
    $txt .= "Шпинат: "    . $_POST['prod_3'] . "\n";
    $txt .= "Укроп: "     . $_POST['prod_4'] . "\n";
    $txt .= "Петрушка: "  . $_POST['prod_5'] . "\n\n";
    
    $txt .= "Данные заказчика\n";
    $txt .= "ФИО: "    . $_POST['full_name'] . "\n";
    $txt .= "E-mail: " . $_POST['email']     . "\n";
    
    $to = "scytherclaw@gmail.com";
    
    $subject = "Новый заказ";
    
    $headers = "From: webmaster@example.com";

    mail($to,$subject,$txt,$headers);
?>