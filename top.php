<html>
    <head>
        <meta charset="UTF-8">
        <title>Cat Food</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
        <link rel="stylesheet" href="CSS/custom_css1.css" type="text/css" media="screen" title="Custom">
        <link rel="alternate stylesheet" href="CSS/dev_css.css" type="text/css" media="screen" title="Dev">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php $username = htmlentities($_SERVER["REMOTE_USER"],ENT_QUOTES,"UTF-8") ?>

    </head>
    <?php
    $myFileName="CSV/TestAccountFinal";

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
    
    foreach ($records as $oneRecord) {   
     
        $planAmount = $oneRecord[0];
     $spent = $oneRecord[1];
     $name = $oneRecord[2];
     
}
$old_average;
$new_average;
$daysLeft = " ";
$remaining = $planAmount - $spent;
$percentage = $remaining / $planAmount * 100;
$percentage_final = number_format($percentage, 2);
$theseDays = 42;
$avgSpend = $remaining/$theseDays;
$avgSpendFinal = number_format($avgSpend,2); 
?>
    
    
    
    <header class="top">
        <h1><?php print ($name) ?> / <?php print ($remaining) ?>
        </h1>
    <a href="accounts.php"><i class="material-icons md-48">brightness_low</i></a>
    <a href="home.php"><i class="material-icons md-48">home</i></a>
</header>
    
    