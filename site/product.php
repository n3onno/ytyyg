<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
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
        <?php
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM products WHERE id=$id");
        if ($row = $result->fetch_assoc()) {
            echo "<h1>{$row['name']}</h1>";
            echo "<img src='{$row['image']}' alt='{$row['name']}'>";
            echo "<p>{$row['description']}</p>";
            echo "<p>Цена: {$row['price']} алмазов</p>";
            echo "<button onclick=\"addToCart({$row['id']})\">Добавить в корзину</button>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Магазин цифровых товаров</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
