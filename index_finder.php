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
////////////////////////////////////////////
//create a new csv and store requests;veryImp
///////////////////////////////////////////
$headerkeys=["Countryname", "Requests"];
$outputFileName='output.csv';
$count='1';
//create headers
if (!file_exists($outputFileName)) {
    $fp = fopen($outputFileName,'a');
    //add BOM to fix UTF-8 in Excel
    fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
    fputcsv($fp, $headerkeys, $delimiter=";");
}
else {
    $fp = fopen($outputFileName,'a');

}

//increase count

$Copyitem = copy($outputFileName,'temp.csv');
$tempfile = 'temp.csv';
if(($fp = fopen($tempfile, "r")) !== FALSE){
    while (($data= fgetcsv($fp, 1000, ";")) !== FALSE) {
        if($name==$data[0]){
            $count= $count+$data[1];
        break;
        }
    }
    fclose($fp);
}
//check if it already exists
$Temp = file($outputFileName, FILE_IGNORE_NEW_LINES);
$deleted = false;
foreach ($Temp as $index => $temp_line) {
    $split = str_getcsv($temp_line, $delimiter = ';');
    //var_dump ($split);
    if ($split[0] == $name) {
        unset ($Temp[$index]);
        $deleted=true;
        //$count+=1;
        //echo $deleted;
    }
}
//var_dump($Temp);
if ($deleted) {
    $file = fopen($outputFileName,"w");
    foreach(array($Temp) as $data){
     fputcsv($file, $data);
    } 
}
$handle = fopen($outputFileName, "a");
if (($handle = fopen($outputFileName, "a")) !== FALSE){
    $content=$name.";".$count;
    fputcsv($handle,explode(';',$content), ";");
}
fclose($handle);
/////////////////////////////////////////////////
////////////////////////////////////////////////

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


?>