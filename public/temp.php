<!DOCTYPE html>
<html>
  <head>
    <title>Order</title>
  </head>
  <body>
    <?php
      $dom = simplexml_load_file("../model/menu.xml");
      foreach ($dom->xpath("//price") as $price) {
        $parent = $price->xpath("..")[0];
        $grand_parent = $parent->xpath("..")[0];
        $name = $grand_parent["name"] . " " . $price["size"] . " " . $price;
        print $name;
        print " : <input type=\"text\" name=\"$name\"><br>\n";
      }
    ?>
  </body>
</html>
