<?php include('Header.php'); ?>



<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Country</th>
            <th scope="col">Capital</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $country = array(
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
            "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
            "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
            "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
            "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
        );

        foreach ($country as $x => $x_value) {

            echo "<tr><td>$x</td><td>$x_value</td></tr>";
        }

        ?>
    </tbody>
</table>
<?php include('Footer.php'); ?>