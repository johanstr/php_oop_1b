<?php
@include_once('src/Html/Table/Table.php');

$winkelwagen = [
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
   [ 'id' => 1, 'product_id' => 2, 'amount' => 4, 'price' => 17.95 ],
];

$users_table = new Table($winkelwagen);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Table Classes 1B</title>

      <link rel="stylesheet" href="css/style.css">
   </head>

   <body>
      <?php $users_table->draw() ?>
   </body>
</html>