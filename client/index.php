<?php
session_start();
include('db.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>My project</title>
</head>

<body style="background-color: #F9FAFC;">
  <div class="container" style="min-height: 100vh">
    <?php
    $root = '//localhost/php/client';

    if (isset($_GET['logout'])) {
      $_SESSION = array();
      header('Location: ../client');
    } elseif (isset($_POST['email']) and isset($_POST['pass'])) {
      $u = mysqli_real_escape_string($db, $_POST['email']);
      $p = mysqli_real_escape_string($db, $_POST['pass']);

      $sql = "SELECT * FROM users WHERE email='$u' AND pass='" . md5($p) . "'";
      $rs = $db->query($sql);

      if ($rs === false) {
        echo 'Wrong SQL';
      } else {
        $rows_returned = $rs->num_rows;

        if ($rows_returned > 0) {
          $row = mysqli_fetch_assoc($rs);
          $_SESSION['user'] = $row['email'];
        } else {
          echo 'Error User or Password.';
        }
      }
    }

    if (isset($_SESSION['user'])) {
      include('home.php');
    } else {
      include('login.php');
    }

    ?>
  </div>
</body>

</html>