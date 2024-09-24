<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../layout/layout.css">
    <title>CRUD Demo</title>

</head> 

<script>
function linkToIndex() {
    window.location.href = '../pages/index.php';
};

function linkToTransaction() {
    window.location.href = '../pages/transaction.php';
}
</script>

<body>
    <header>
        <nav class="navbar">
            <form class="container justify-content-start">
                <h1 style="margin-right: 30px;">Debit Credit Tracker</h1>
            </form>
        </nav>
    </header>

    <main>
        <aside>
            <ul class="aside-list">
                <a href="../pages/index.php">
                    <li>Home</li>
                </a>
                <a href="../pages/transaction.php">
                    <li>Transaction</li>
                </a>
            </ul>
        </aside>

        <div class="content">
            <?php 
                echo $content;
            ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>