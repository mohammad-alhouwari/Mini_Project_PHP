<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./view_products.css">

  </head>
  
  <body>
  <span id="TOP"></span>
  <?php include('./header.php') ?>
  <br><br>

  <?php
    if (isset($_SESSION["items"])) {
      echo '<div class="cards-container">';
        foreach ($_SESSION["items"] as $item) {
            echo '<div class="card">';
            echo '<img src="' .$item["item_image"] . '" alt="' . htmlspecialchars($item["item_name"]) . '">';
            echo '<h3>' . $item["item_name"] . '</h3>';
            echo '<p>' . $item["item_details"] . '</p>';
            echo '<p>Date: ' . $item["item_date"] . '</p>';
            echo '<p>Is Active: ' . ($item["is_active"] ? "Yes" : "No") . '</p>';
            echo '</div>';
        }

    } else {
        echo '<p>No items added yet.</p>';
    }
    ?>
  <br><br><br><br><br><br><br><br><br><br><br>
  <?php include('./footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>