<?php 
$fileName = "visitations.txt";
// Creating the file in case it doesn't exists
if(!file_exists($fileName)){
    file_put_contents($fileName, 0);
}

if(!isset($_COOKIE['visited'])){
    // Reading visitation count register
    $visitationCount = (int)file_get_contents($fileName);

    // Increments the counter and saves it
    $visitationCount++;
    file_put_contents($fileName, $visitationCount);

    setcookie('visited', '1', time()+43200); // Set a cookie for the visitations once half a day
}else{
    $visitationCount = (int) file_get_contents($fileName);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitation Counter</title>
</head>
<body>
<!-- Simple body, just to show the results -->
    <h1>This page was visited</h1>
    <h2><?= $visitationCount ?> times</h2>
</body>
</html>