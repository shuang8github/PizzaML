<!DOCTYPE html>

<html
    <head>
        <title>Menu</title>
    </head>
    <body>
        <h1>Menu</h1>
        <ul>
            <?php
                $dom = simplexml_load_file("../model/menu_old.xml");
                foreach ($dom->xpath("/menu/categories/category") as $category) {
                    print "<li>";
                    print $category["name"];
                    print "<ul>";
                    foreach ($category->xpath("items/item") as $item) {
                        print "<li>";
                        print $item["name"];
                        print "<ul>";
                        foreach ($item->xpath("price") as $price) {
                            print "<li>";
                            print $price["size"] . " " . $price;
                            print "</li>";
                        }
                        print "</ul>";
                        print "</li>";
                    }
                    print "</ul>";
                    print "</li>";
                }
            ?>
        </ul>
    </body>
</html>
