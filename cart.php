<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/shop.css">
    <title>MedicoRx</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>
    <main style="margin-top: 80px;">
        <div class="container">
            <ul id="medicine-list" class="collection">

            </ul>
        </div>

        <div class="center-align" style="margin: 50px auto;">
            <a href="#" class="btn btn-large waves-effect">Place Order</a>
        </div>
    </main>

    <template id="medicine-template">
        <li class="collection-item avatar">
            <i class="fas fa-pills circle teal"></i>
            <span class="medicine-name">Medicine Name</span>
            <span class="green-text price">₹ 100</span>

            <p>
                <span class="blue-text company">ABC Pharmaceuticals</span><br>
                <span class="mfg"></span><br>
                <span class="exp"></span>
            </p>
            <div class="secondary-content price-container">
                <input class="quantity-input" value="1" min="1" placeholder="Qty" type="number">
                <a href="#" class="btn-flat waves-effect remove-btn white-text red darken-1">
                    Remove
                </a>
            </div>
        </li>
    </template>

    <?php include_once('includes/scripts.php') ?>
    <script src="js/cart.js"></script>
</body>

</html>