<a href="/tasks/create" class="btn btn-primary btn-lg " tabindex="-1" role="button" >Создать задачу</a>
<table class="table" width="100%" id="taskTable">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col"><a href="/admin?page=<?php echo $page?>&order_by=name&desc=<?php if($desc == "") echo "DESC"; else echo ""?>">Name</a></th>
      <th scope="col"><a href="/admin?page=<?php echo $page?>&order_by=email&desc=<?php if($desc == "") echo "DESC"; else echo ""?>">Email</a></th>
      <th scope="col">Text</th>
      <th scope="col"><a href="/admin?page=<?php echo $page?>&order_by=ready&desc=<?php if($desc == "") echo "DESC"; else echo ""?>">Status</a></th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($list as $task) :?>
    <tr>
      <th scope="row"><?php echo $task['id'] ?></th>
      <td><?php echo $task['name'] ?></td>
      <td><?php echo $task['email'] ?></td>
      <td><?php echo $task['text'] ?><?php if($task['admin_change']): ?><span class="badge badge-warning">Текст отредактирован администратором</span><?php endif; ?></td>
      <td><?php  if ($task['ready']) { ?> 
        <button type="button" class="btn btn-primary" disabled>Выполненно</button> 
      <?php } else { ?>
        <form action="admin/task/performed/<?php echo $task['id']?>" method="POST">
        <button type="submit" class="btn btn-danger">Не выполненно</button> 
        </form>
      <?php } ?></td>
      <td><form action="admin/task/edit/<?php echo $task['id']?>" method="POST">
        <button type="submit" class="btn btn-danger">Изменить текст задачи</button> 
        </form></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item <?php if($page - 2 < 0 ):?>disabled<?php endif;?>">
      <a class="page-link" href="/admin?page=<?php echo $page - 1?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <?php if($page - 2 > 0 ): ?>
      <li class="page-item"><a class="page-link" href="/admin?page=<?php echo $page - 2?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>"><?php echo $page - 2?></a></li>
    <?php endif;?>
    <?php if($page - 1 > 0 ): ?>
      <li class="page-item"><a class="page-link" href="/admin?page=<?php echo $page - 1?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>"><?php echo $page - 1?></a></li>
    <?php endif;?>
    <?php  ?>
      <li class="page-item active"><a class="page-link" href="/admin?page=<?php echo $page?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>"><?php echo $page?><span class="sr-only">(current)</span></a></li>
    <?php ?>
    <?php if($page < $maxpages): ?>
      <li class="page-item"><a class="page-link" href="/admin?page=<?php echo $page + 1?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>"><?php echo $page + 1?></a></li>
    <?php endif; ?>
    <?php if($page + 1 < $maxpages): ?>
      <li class="page-item"><a class="page-link" href="/admin?page=<?php echo $page + 2?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>"><?php echo $page + 2?></a></li>
    <?php endif; ?>

    <li class="page-item <?php if($page + 1 > $maxpages ):?>disabled<?php endif;?>">
      <a class="page-link" href="/admin?page=<?php echo $page + 1?>&order_by=<?php echo $order_by?>&desc=<?php echo $desc?>">Next</a>
    </li>
  </ul>
</nav>
