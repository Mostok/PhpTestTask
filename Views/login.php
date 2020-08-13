<form class="form-signin" method="POST" action="/authorization">
  <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
    <?php if(!empty($errors)):?> 
        <?php  foreach($errors as $error): ?> 
            <div class="alert alert-danger" role="alert"> <?php echo "$error"?></div>
        <?php endforeach; ?>
    <?php endif; ?>
  <label for="inputName" >Имя пользователя</label>
  <input type="text" id="inputName" class="form-control" placeholder="Имя пользователя" autofocus name="name">
  <label for="inputPassword">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" name="password">
  <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
