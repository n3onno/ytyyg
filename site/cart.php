<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'includes/db_config.php'; ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Книги</a></li>
                <li><a href="index.php">Инструменты</a></li>
                <li><a href="index.php">Еда</a></li>
                <li><a href="index.php">Броня</a></li>
                <li><a href="cart.php">Корзина</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Корзина</h1>
        <div id="cart-items"></div>
        <a href="checkout.php">Оформить заказ</a>
    </main>
    <footer>
        <p>&copy; 2024 Магазин цифровых товаров</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
