<?php

    if(file_exists('count_file.txt')) {

        $fil = fopen('count_file.txt',r);
        $dat = fread($fil, filesize('count_file.txt'));
        echo "Number of hits: ".$dat;
        fclose($fil);

    } else {

        echo "No hits at all";

    }

?>