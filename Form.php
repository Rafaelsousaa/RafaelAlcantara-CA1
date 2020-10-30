<!DOCTYPE html>
<html lang="pt-br">
 <!-- <?php include('Header.php');?>  -->
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

<body> 
     <div class="title">
    <table>         
         <tr><th><h1>Country</h1></th><th><h1>Capital</h1></th></tr>
        </div>
    <form action = "Form.php"></from>
   <div class="text"> 
    <?php        
        $country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
        "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
        "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
        "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ; 
        foreach($country as $x => $x_value){
        echo "<tr><td><h2>$x</h2></td><td><h2>$x_value</h2></td></tr>";          
    
    }
    ?>
    <div class="form">
    <form action="Form.php" method = "POST">
    <strong>Put a Country</strong><br>
    <input type="text" name="fristname"><br>
    <input type="submit" value ="submit">
    </form>
    </div>




<?php
    if(isset($_POST["fristname"])){
        $name = ucfirst(strtolower($_POST["fristname"]));
        if(array_key_exists($name,$country)){
            echo"<h2>The Capital of $name is $country[$name]</h2>";
        }else{
            echo"<h2>the country is not in the line</h2>";
        }

    }
    
    
    
    ?></div>