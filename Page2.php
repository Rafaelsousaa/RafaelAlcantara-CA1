<?php include('Header.php'); ?>

<?php
$country = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"

); ?>
<form action="Page2.php" method="POST">
    <select name="x" id="">
        <option value="" disabled selected> Pick a Country</option>
        <?php

        foreach ($country as $x => $x_value) {
            echo "<option value='$x'>$x</option>";
        }
        ?>

        <input type="submit" name="submit" value="choose">
    </select>


</form>
<?php

if (isset($_POST['submit'])) {

    foreach ($country as $x => $x_value) {

        if ($_POST['x'] == $x) {
            $can = $x;
            $cap = $x_value;
        }
    }
    echo '<h1>The country choosen is : ' . $can . '</h1>';
    echo '<h2>The capital is : ' . $cap. '</h2>';
}


?>
<div class="space2"></div>
<?php include('Footer.php'); ?>