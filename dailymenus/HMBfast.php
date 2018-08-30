
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
    
   $bfastID = 'mb';

print "<div class = menuPage>";
print "<h1>Harris Millis Dining Hall : Breakfast</h1>"; 
print "<h2 class = 'menuSection'>Exhibition</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $bfastID && $oneRecord[2] == 'Exhibition') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class = 'menuSection'>Main</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $bfastID && $oneRecord[2] == 'Main') {  //the eof would be a "" 
        print "\n\t<li class = 'menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "</ul>";
print "</div>";

?>
      