<?php
<<<<<<< HEAD

$file_name="finder-site\countries.csv";

if (($handle=fopen($file_name,"r")) !== FALSE) {
    while (($data=fgetcsv($handle,0,",")) != FALSE) {
        echo $data[1];
    }
    $fclose($handle);
}
=======
$the_big_array=[];
$file_name="assets/countries.csv";
$numberofColumns=1;
if (($handle = fopen($file_name, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
       $the_big_array[]=$data;
}
    fclose($handle);
}
/*
echo "<pre>";
var_dump($the_big_array);
echo "</pre>";*/
//store the variables in array for the country name;
$country_name=[];
for($i=0; $i<count($the_big_array); $i++){
    $country_name[] = $the_big_array[$i][3];
}
$json_country = json_encode($country_name);

// the next part is to convert the array to a json object
$columns = $the_big_array[0];
for ($i=1; $i<count($the_big_array)-1; $i++){
    foreach ($columns as $column_index => $column){
        @$obj[$i]->$column = $the_big_array[$i][$column_index];
    }
}
$json = json_encode($obj);

//include the files for html
include 'formulario.php';

//get the search value and match with the array
/*
if($_GET['q']){
    $json;
}*/
>>>>>>> 5afc032a87e6c397fd7c6ebc0666fa3af6386f87
?>