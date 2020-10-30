<!DOCTYPE html>
<html lang="pt-br">
<?php include('Header.php');?>
	<head>
		<meta charset="UTF-8">
		<title>CAWEB</title>
		<link rel="stylesheet" href="css/page1.css"> 
   <style>
         table{
            table-layout:auto;
            width:90%;
            margin :100px 20px 50px 200px;
            padding: 10px 15px;
        } 
   </style>
      
    </head>

	<body>
        
       
    
      
        <table>
            <tr><th>Country</th><th>Capital</th></tr>
     
    <?php
    $country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ; 

    foreach($country as $x => $x_value){

        echo "<tr><td>$x</td><td>$x_value</td></tr>";
    }
        
    ?>        </table>