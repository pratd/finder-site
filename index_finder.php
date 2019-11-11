<?php

$file_name="C:\Users\pratt\Documents\finder-site\countries.csv";

if (($handle=fopen($file_name,"r")) !== FALSE) {
    while (($data=fgetcsv($handle,0,",")) != FALSE) {
        echo $data[1];
    }
    $fclose($handle);
}
?>