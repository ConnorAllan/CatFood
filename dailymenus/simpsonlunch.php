<head>
<link rel="stylesheet"
      href="../CSS/menu.css"
      type="text/css"
      media="screen">
</head>

<?php
include ('menutop.php');
$myFileName="../CSV/redstone dining";

$fileExt=".csv";

$filename = $myFileName . $fileExt;
$file=fopen($filename, "r");

// the variable $file will be empty or false if the file does not open

    $headers[]=fgetcsv($file);
    
   
    while(!feof($file)){
        $records[]=fgetcsv($file);
    }
    
    //closes the file
    fclose($file);
    
   $lunchID = 'ml';

print "<div class = menuPage>";
print "<h1>Redstone Dining Hall: Lunch </h1>";; 
print "<h2 class='menuSection'>Comfort Corner Kitchen</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Comfort Corner Kitchen') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Grill</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Grill') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Salad</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Salad') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Comfort Corner Soups</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Comfort Corner Soups') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Vegetarian/Vegan Options</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Vegetarian/Vegan Options') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "</ul>";
print "</div>";

?>
                    