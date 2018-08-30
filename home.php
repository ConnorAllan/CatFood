<?php
include 'top.php';
$unName = "CSV/UnlimitedLocationCount_1";
$unExt = ".csv";
$unlimitedFileName = $unName . $unExt;

$unlimitedFile = fopen($unlimitedFileName, "r");
while (!feof($unlimitedFile)) {
    $unLocationArray[] = fgetcsv($unlimitedFile);
}
fclose($unlimitedFile);

$unMostVisitedNumber = 0;
$unMostVisitedIndex = 0;


for ($i = 0; $i < count($unLocationArray); $i++) {
    if ($unLocationArray[$i][1] > $unMostVisitedNumber) {
        $unMostVisited = $unLocationArray[$i][0];
        $unMostVisitedNumber = $unLocationArray[$i][1];
    }
}
//retail
$retName = "CSV/RetailLocationCount_1";
$retExt = ".csv";
$retFileName = $retName . $retExt;

$retFile = fopen($retFileName, "r");
while (!feof($retFile)) {
    $retLocationArray[] = fgetcsv($retFile);
}
fclose($retFile);

$retMostVisitedNumber = 0;
$retMostVisitedIndex = 0;


for ($i = 0; $i < count($retLocationArray); $i++) {
    if ($retLocationArray[$i][1] > $retMostVisitedNumber) {
        $retMostVisited = $retLocationArray[$i][0];
        $retMostVisitedNumber = $retLocationArray[$i][1];
    }
}
?>
<body> 
    <div id="quickaccess">
        <div id="card-container">
            <a href="retail.php" id="card"><figure><img  src="images/Shopping_cart_icon.svg.png" alt="Retail" style="width:100%;"  class="dashphoto">
                    <figcaption><p>Retail Locations</p></figcaption></figure></a>
        </div>
        <div id="card-container">
            <a href="unlimited.php" id="card"><figure><img  src="images/buffet_318-51254.png" alt="Unlimited" style="width:100%;" class="dashphoto">
                    <figcaption><p>Unlimited Dining</p></figcaption></figure></a>
        </div>
        <div id="card-container">
            <a href="stats.php" id="card"><figure><img  src="images/stats.png" alt="Statistics" style="width:100%;"  class="dashphoto">
                    <figcaption><p>Your Points & Stats</p></figcaption></figure></a>
        </div>
        <div id="card-container">
            <a href="favorites.php" id="card"><figure>
                    <?php
                    print "<figcaption><p> Favorite unlimited location: " . $unMostVisited . "</p>" .
                            "<p>Favorite retail location: " . $retMostVisited . "</p> </figcaption></figure></a>";
                    ?>
                    </div>

                    </div>
                    <div id="logo">
                        <img src="images/logo.png" alt="Logo">
                        <h1>CATFOOD</h1>
                        <p>Created by: Connor Allan, Griffin Cohen, Cam Weston, Dean Wertz, Ben Beaudin, Liv Jensen, Nicholas Lawrence, Shawn Kotch, Timmy Guyon, & Lindsay Ross</p>
                    </div>

