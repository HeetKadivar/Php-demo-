<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail Card</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .card-content {
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        p {
            color: #555;
        }

        .price {
            font-size: 1.2em;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
if (isset($_REQUEST['button'])) {
    $name = ($_REQUEST['username']);
    $password = ($_REQUEST['password']);
    $product = ($_REQUEST['product']);

    if ($name == "Heet" && $password == 1234) {
        $product1 = 'new_headphone.jpg';
        $product2 = 'AirPods.jpg';
        $product3 = 'smart_watch.jpg';

        switch ($product) {
            case "product1":
                $productName = "HeadPhone";
                $productDescription = "Description of Product 1 goes here.";
                $productPrice = "$99.99";
                echo '<div class="card">
                        <img src="' . $product1 . '" alt="product1">
                        <div class="card-content">
                            <h2>' . $productName . '</h2>
                            <p>' . $productDescription . '</p>
                            <p class="price">' . $productPrice . '</p>
                        </div>
                    </div>';
                break;
            case "product2":
                $productName = "AirPods";
                $productDescription = "Description of Product 2 goes here.";
                $productPrice = "$129.99";
                echo '<div class="card">
                        <img src="' . $product2 . '" alt="product2">
                        <div class="card-content">
                            <h2>' . $productName . '</h2>
                            <p>' . $productDescription . '</p>
                            <p class="price">' . $productPrice . '</p>
                        </div>
                    </div>';
                break;
            case "product3":
                $productName = "SmartWatch";
                $productDescription = "Description of Product 3 goes here.";
                $productPrice = "$149.99";
                echo '<div class="card">
                        <img src="' . $product3 . '" alt="product3">
                        <div class="card-content">
                            <h2>' . $productName . '</h2>
                            <p>' . $productDescription . '</p>
                            <p class="price">' . $productPrice . '</p>
                        </div>
                    </div>';
                break;
            default:
                echo "Please select a product";
                break;
        }
    }
}
?>

</body>
</html>
