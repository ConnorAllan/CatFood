<?php
include "top.php";
include "header.php";

if (isset($_POST["btnSubmit"])) {
    $planAmount = htmlentities($_POST['radPlan'], ENT_QUOTES, "UTF-8");
    print($planAmount);
    $daysLeft = htmlentities($_POST['txtDaysLeft'], ENT_QUOTES, "UTF-8");
    print($daysLeft);
}

$myFileName="TestUser";

$fileExt=".csv";

$filename = $myFileName . $fileExt;

$file=fopen($filename, "r");
while(!feof($file)){
        $records[]=fgetcsv($file);
    }
 
    fclose($file);
    
foreach ($records as $oneRecord) {
    $x=0;
    if ($oneRecord[$x] != "") {  
       
        print $oneRecord[$x];
        $x++;
    
print "\n\t</li>";
}}
   
$old_average;
$new_average;
$daysLeft = " ";
$spent = 299.51;
print $oneRecord[$x];
$planAmount = 325;
$remaining = $planAmount - $spent;
$percentage = $remaining / $planAmount * 100;
$percentage_final = number_format($percentage, 2);
$theseDays = 42;
$avgSpend = $remaining/$theseDays;
$avgSpenFinal = number_format($avgSpend,2);
?>
<!DOCTYPE HTML>
<head>
    <link href="CSS/graphstyle.css" rel="stylesheet" type="text/css"/>
</head>

<?php
 
    
?>

<body>
    <h1>Statistics</h1>
    <div class="graph">
        <div>
        <p class="statistics">You started the semester with <?php print($planAmount) ?> points.</p>
        <p class="statistics">You have <?php print($theseDays) ?> days left in the year</p>
        
        <p class="statistics">You can spend <?php print($avgSpenFinal) ?> points a day on average.</p>
       
        <ul class="pointsgraph">               
            <li class="start" style="height:350px;left:0px;"><?php print($planAmount); ?></li>
            <li class="points" style="height: <?php print(($remaining / $planAmount) * 350) ?>; left: 0px;"><?php print($remaining); ?></li>

        </ul>

        <figure class="key" >
            <h3>Key:</h3>
            <p><b>high bar</b>= Starting points</p>
            <p><b>low bar</b>= points left</p>
        </figure>
        <ul class="pointsPercentage">
            <li class="startPercentage" style="height: 350px; left: 0px;">100%</li>
            <li class="percentageLeft" style="height: <?php print($percentage * 3.5); ?>; left: 0px;"><?php print($percentage_final . "%"); ?></li>

        </ul>
        <figure class="key">
            <h3>Key:</h3>
            <p><b>high bar</b>= Starting percentage</p>
            <p><b>low bar</b>= percentage of points left</p>
        </figure> 
        </div>
    </div>
</body>


</html>