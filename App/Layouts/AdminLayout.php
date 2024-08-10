<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->page_title ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/icon.ico" type="image/x-icon">
</head>
<body id="adminLayout">
    <header>

    </header>
    <nav>

    </nav>
    <?php $this->renderView($this->page->view, $this->page->viewDirectory); ?>
    <footer>

    </footer>
</body>
</html>