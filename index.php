<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>
            <div class="attracties">
                <div class="attractie">
                    <div>
                        <img class="small" src="img/attracties/brandon-hoogenboom-P0MX2XCqbFc-unsplash.jpg" alt="Waterpretpark glijbanen">
                    </div>
                        <div>
                            <p class="special">ADVENTURELAND</p>
                            <h1>Waterpretpark</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum consequatur fuga eius qui iure repellendus, sit at asperiores harum culpa inventore placeat impedit adipisci magni fugiat! Itaque iure incidunt amet.</p>
                    </div>
                <div class="attractie fastpass">
                    <div>
                        <p class="big"></p>
                    </div>
                    <div>
                        <p class="special">ADVENTURELAND</p>
                        <H1>Draaimolen</H1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quas magnam aperiam rerum ipsa commodi id facilis, nobis ex sapiente distinctio adipisci voluptatum nam nulla architecto maiores, sed aliquid tempore?</p>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
