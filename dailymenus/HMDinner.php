<head>
<link rel="stylesheet"
      href="../CSS/menu.css"
      type="text/css"
      media="screen">
</head>

<?php
include ('menutop.php');
$myFileName="../CSV/harrismillis";

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
    
   $dinID = 'md';

print "<div class = menuPage>";  
print "<h1>Harris Millis Dining Hall : Dinner</h1>"; 
print "<h2 class = 'menuSection'>Simple Serving</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $dinID && $oneRecord[2] == 'Simple Serving') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class = 'menuSection'>Grill</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $dinID && $oneRecord[2] == 'Grill') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class = 'menuSection'>Main</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $dinID && $oneRecord[2] == 'Main') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class = 'menuSection'>Theme Cuisine</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $dinID && $oneRecord[2] == 'Theme Cuisine') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class = 'menuSection'>Salad</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $dinID && $oneRecord[2] == 'Salad') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "</ul>";
print "</div>";

?>
                    
