<?php
$the_big_array=[];
$file_name="countries.csv";
if (($handle = fopen($file_name, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
       $the_big_array[]=$data;
}
    fclose($handle);
}
/*
echo "<pre>";
var_dump($the_big_array[245][3]);
echo "</pre>";*/
$columns = $the_big_array[0];
for ($i=1; $i<count($the_big_array)-1; $i++){
    foreach ($columns as $column_index => $column){
        @$obj[$i]->$column = $the_big_array[$i][$column_index];
    }
}
$json = json_encode($obj);
/*echo $json;*/
include 'formulario.php';
?>