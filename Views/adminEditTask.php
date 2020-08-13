<form action="/admin/task/update/<?php echo $id?>" method="POST">
  <?php if(!empty($errors)):?> 
    <?php  foreach($errors as $error): ?> 
        <div class="alert alert-danger" role="alert"> <?php echo "$error"?></div>
      <?php endforeach; ?>
    <?php endif; ?>
  <div class="form-group">
    <label for="inputEmail">Email адрес</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Введите email" name="email" value="<?php print_r($email)?>" readonly>
  </div>

  <div class="form-group">
    <label for="inputName">Ваше имя</label>
    <input type="text" class="form-control" id="inputName" placeholder="Введите ваше имя" name="name" value="<?php print_r($name)?>" readonly>
  </div>

  <div class="form-group">
    <label for="textarea">Example textarea</label>
    <textarea class="form-control" id="textarea" rows="3" name="text"><?php print_r($text)?></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>