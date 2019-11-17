<?php
header("Content-Type: application/json; charset=UTF=8");
$the_big_array=[];
$file_name="assets/countries1.csv";
$numberofColumns=1;
//Abrimos nuestro archivo
$countriesName = [];
$columnArray=[];
if (($handle = fopen($file_name, "r")) !== FALSE) {
   while (($data= fgetcsv($handle, 1000, ";")) !== FALSE) {
       $the_big_array[]=$data;
       $country = new stdClass();
       $country->id = $data[0];
       $country->lat = $data[1];
       $country->lng = $data[2];
       $country->countryname = $data[3];
       $countriesName[] = $country;
       $columnArray[]=$data[3];
   }
   fclose($handle);
}
//echo json_encode($countriesName, JSON_PRETTY_PRINT);
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
//$json = json_encode($obj);

//include the files for html
//require_once 'formulario.php';
$name=1;
$result=NULL;
if (isset($_POST['country'])) {
    $name = $_POST['country'];
}
//var_dump($the_big_array[46]);
for($i=0; $i<count($the_big_array);$i++){
    if ($countriesName[$i]->countryname==$name){
        $result=$countriesName[$i];  
    break;
    }
}
$final_answer=[];
$final_answer['data_result'] = $result;
$final_answer['data_countryname'] = $columnArray;
if($result){
    print_r(json_encode($final_answer['data_result']));
}else{
    print_r(json_encode($final_answer['data_countryname']));
}
//print_r(json_encode($final_answer));
//echo $name
//get the search value and match with the array
//echo $json_country
/*
if($_GET['q']){
    $json;
}*/
// $_POST("country") ;

?>