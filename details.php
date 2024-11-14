<html>
<?php 
require_once('includes/connect.php');
$query = 'SELECT image,fname,lname,title FROM employees,jobs WHERE job_id = jobs.id AND employees.id ='.$_GET['id'];
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result)
?>

<head>
<link href="css/main.css" rel="stylesheet"/>
<link href="css/grid.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
</head>
<body>
<header></header>
<main>

<div class="details grid-con">
<img class="thumbtack-details" src="images/thumbtack.png" alt="a thumbtack">
    <img class="image-big l-col-start-2 l-col-span-5" src="images/<?php echo $row['image']; ?>"
    alt="employee headshot">
    <div class="details-text l-col-start-7 l-col-end-13">
        <h1 class="details-h1"> <?php echo $row['fname'] .' '. $row['lname']; ?></h1>
        <h2 class="details-h2"> <?php echo $row['title']; ?></h2>

    </div>
</div>

</main>

</body>
</html>