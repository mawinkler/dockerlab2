<html>
    <head>
    	<title>Trend Micro Little Enterprise Shop</title>
    </head>

    <body>
        <h1>Trend Micro Little Enterprise Shop</h1>
    	<h2>Leave you money here, it's xmas time</h2>
    	<ul>
    		<?php
    		    $json = file_get_contents('http://product-service');
    		    $obj = json_decode($json);

    		    $products = $obj->products;
    		    foreach ($products as $product) {
    		    	echo "<li>$product</li>";
    		    }
    		?>
    	</ul>
        <img src="mas.gif">
    </body>
</html>