
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO LIST</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <header>
        <?php if (isset($_SESSION['logged_user'])): ?>
            Авторизован
            <a href="/admin" class="btn btn-primary" tabindex="-1" role="button" >Задачи АДМИН</a>
            <a href="/logout" class="btn btn-primary" tabindex="-1" role="button" >Выйти</a>
        <?php else: ?>
            <a href="/login" class="btn btn-primary" tabindex="-1" role="button" >Логин</a>
            <a href="/tasks" class="btn btn-primary" tabindex="-1" role="button" >Задачи</a>
        <?php endif;?>
    </header>

    <div class="container">
        <?php include $contentPage?>
    </div>


</body>
</html>
