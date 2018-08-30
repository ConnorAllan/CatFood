<head>
<link rel="stylesheet"
      href="../CSS/menu.css"
      type="text/css"
      media="screen">
</head>

<?php
include ('menutop.php');
$myFileName="../CSV/Cook-Dining-Monday";

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
print "<h1>Cook Dining Hall:Lunch </h1>"; 
print "<h2 class='menuSection'>Stacks</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Stacks') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Pizza</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Pizza') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Planet Healthy</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Planet Healthy') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "<h2 class='menuSection'>Basil</h2>";
foreach ($records as $oneRecord) {   
    if ($oneRecord[0] == $lunchID && $oneRecord[2] == 'Basil') {  //the eof would be a "" 
        print "\n\t<li class='menuItem'>";
        print "<td>".$oneRecord[3]."</td>";
        print "\n\t</li>";
    }
}
print "</ul>";
print "</div>";

?>
                    