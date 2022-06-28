<?php
    $fileName = "log.txt";


    if (isset($_POST)) {
        $msg = "Сообщение, полученное на сервере: ".$_POST['msg'].". Записано в ".$fileName;
        echo "<script type='text/javascript'>
                alert('$msg');
                document.location.href = 'task7.html';
              </script>";

        $fd = fopen($fileName, 'a') or die("Не удалось создать файл");
        fwrite($fd, date('(e) d.m.Y H:i:s').": ".$_POST['msg']."\n");
        fclose($fd);
    }