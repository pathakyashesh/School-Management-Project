<?php
require 'dbh.php';
require 'header.php';

$tid = $_POST["tid"];
$sql = "SELECT * FROM teacher WHERE tid='".$tid."'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Teacher Details</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prViewTeacher.php">Search Teacher</a> > <a href="#">Teacher Details</a></p>
  </div>
    <div class="mainbod">
      <table class="table">
        <caption class="table-header"><h3>Teacher Details</h3></caption>
          <tr>
            <td scope="col">Name</td>
            <td scope="col"> <?php echo $row["tname"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Teacher ID</td>
            <td scope="col"> <?php echo $row["tid"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Subject</td>
            <td scope="col"> <?php echo $row["subject"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Phone Number</td>
            <td scope="col"> <?php echo $row["phoneNo"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Email ID</td>
            <td scope="col"> <?php echo $row["email"]; ?></td>
          </tr>
    </table>
      <a href="prhome.php"><button class="btn-backB">Back </button></a>


    </div>
    <div class="footer">
        <p>&copy2020 Yashesh.<br>All Rights Reserved.</br></p>
    </div>

  </body>
</html>
