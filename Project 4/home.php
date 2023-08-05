<!doctype html>
<html lang="en" style="  scroll-behavior: smooth;">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">

  </head>
  
  <body>
    <span id="TOP"></span>
  <?php include('./header.php') ?>
<br>
<br>
<div id="mainP">
  <h1><b>Plush toys</b></h1>
  <P>Welcome to our plush toys store, where cuddly dreams come true! We offer a delightful collection of adorable plushies that are sure to melt your heart. From lovable teddy bears to enchanting animal companions, our store boasts a wide variety of soft and huggable friends for all ages. Each plush toy is crafted with the utmost care, ensuring premium quality and ultimate comfort. Whether you're looking for a cherished gift or a companion to snuggle with, our plush toys store is the perfect destination for spreading joy, love, and warmth. Come and explore the magic of our cuddly world today! 🧸💕</P>
</div>
<br>
<br>
<br>
<h2>Add Items to Store</h2>
<br>
<form action="process_products.php" method="post" enctype="multipart/form-data" id="ADDform">
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required><br>

        <label for="item_details">Item Details:</label>
        <textarea id="item_details" name="item_details" required></textarea><br>

        <label for="item_date">Item Date:</label>
        <input type="date" id="item_date" name="item_date" required><br>

        <label for="item_image">Choose an Image:</label>
        <select id="item_image" name="item_image">
            <option value="../image/blue.png">blue plush</option>
            <option value="../image/red.png">red plush</option>
            <option value="../image/orange.png">orange plush</option>
        </select><br>

        <label for="is_active">Is Active:</label>
        <input type="checkbox" id="is_active" name="is_active"><br>

        <input type="submit" value="Add Item">
    </form>
    <br><br>
    <h2 id="ITEMS">Added Items</h2>
    <br>
    <?php
    include 'products.php';

    if (empty($items)) {
      echo '<p>No items have been added yet.</p>';
  } else {
     echo '<link rel="stylesheet" href="./products_table.css">';
     echo '<form action="view_products.php" id="ALLproducts"><input type="submit" value="view products" /></form><br>';
      echo '<table id="products_list">';
      echo '<tr>
              <th>Item Name</th>
              <th>Item Details</th>
              <th>Item Date</th>
              <th>Is Active</th>
              <th>Item Image</th>
          </tr>';
      foreach ($items as $item) {
          echo '<tr>';
          echo '<td>' . htmlspecialchars($item['item_name']) . '</td>';
          echo '<td>' . htmlspecialchars($item['item_details']) . '</td>';
          echo '<td>' . htmlspecialchars($item['item_date']) . '</td>';
          echo '<td>' . ($item['is_active'] ? 'Yes' : 'No') . '</td>';
          echo '<td><img src="' . htmlspecialchars($item['item_image']) . '" alt="Item Image"></td>';
          echo '</tr>';
      }
      echo '</table>';
  }
  ?>




<br><br><br><br><br><br><br><br>
<br><br><br>
  <?php include('./footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>