<?php
// Get the submitted form data.
$item_name = $_POST['item_name'];
$item_details = $_POST['item_details'];
$item_date = $_POST['item_date'];
$is_active = isset($_POST['is_active']);
$item_image = $_POST['item_image']; // The fixed image URL

// Include a PHP file with an array of added items.
include 'products.php';

// Add the new item to the array.
$items[] = [
    'item_name' => $item_name,
    'item_details' => $item_details,
    'item_date' => $item_date,
    'is_active' => $is_active,
    'item_image' => $item_image, // Save the fixed image URL
];

// Save the updated array back to the file.
file_put_contents('products.php', '<?php $items = ' . var_export($items, true) . ';');

header('Location: home.php');
exit();
?>
