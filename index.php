<html>
<?php 
require_once('includes/connect.php');
$query = 'SELECT employees.id AS employee,thumb,fname,lname,title FROM employees,jobs WHERE job_id = jobs.id';
$results = mysqli_query($connect, $query);
?>

<head>
<link href="css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
</head>
<body>
<header></header>
<main>
<h1>Meet the Team!</h1>
<div class="employees">
<?php
while($row = mysqli_fetch_array($results)) {
echo '<section class="employee-shortcut">
<img class="thumbtack" src="images/thumbtack.png" alt="a thumbtack">
    <a href="details.php?id=';
    echo $row['employee'];
    echo '"><img class="thumb" src="images/';
    echo $row['thumb'];
    echo '" alt="employee headshot"></a>
    <div class="index-name"> <h2>';
    echo $row['fname']. ' ' . $row['lname'];
    echo '</h2>
    <h3>';
    echo $row['title'];
    echo '</h3> </div>
</section>';
}
?>
</div>
</main>

</body>
</html>