<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин цифровых товаров</title>
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
        <section class="catalog">
            <?php
            $categories = ['Книги', 'Инструменты', 'Еда', 'Броня'];
            foreach ($categories as $category) {
                echo "<div class='category'>";
                echo "<h2>$category</h2>";
                $result = $conn->query("SELECT * FROM products WHERE category='$category'");
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<h3>{$row['name']}</h3>";
                    echo "<img src='{$row['image']}' alt='{$row['name']}'>";
                    echo "<p>{$row['description']}</p>";
                    echo "<p>Цена: {$row['price']} алмазов</p>";
                    echo "<a href='product.php?id={$row['id']}'>Подробнее</a>";
                    echo "</div>";
                }
                echo "</div>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Магазин цифровых товаров</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
