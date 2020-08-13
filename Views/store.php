<h1>Задача успешно добавлена</h1>
<h2><a href="/tasks/create" class="btn btn-primary btn-lg " tabindex="-1" role="button" >Создать новую задачу</a></h2>

<?php if(isset($_SESSION['logged_user'])): ?>
    <h2><a href="/admin" class="btn btn-primary btn-lg " tabindex="-1" role="button" >Вернуться к списку задач</a></h2>
<?php else: ?>
    <h2><a href="/tasks" class="btn btn-primary btn-lg " tabindex="-1" role="button" >Вернуться к списку задач</a></h2>
<?php endif;?>