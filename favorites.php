<!DOCTYPE HTML>
<?php
include 'top.php';
?>
<link rel="stylesheet" href="CSS/favoritescss.css" type="text/css" media="screen" title="Custom">
<body>



    <?php
    //unlimited
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
    
    print "<div id = 'retailcolumn'>";
    print "<p> Your favorite unlimited location is " . $unMostVisited . " and you have been " . $unMostVisitedNumber . " times </p>";
    print "</div>";

    print "<div id = 'retailcolumn'>";
    print "<p> Your favorite retail location is " . $retMostVisited . " and you have been " . $retMostVisitedNumber . " times </p>";
    print "</div>";
    ?>


</body>
</html>