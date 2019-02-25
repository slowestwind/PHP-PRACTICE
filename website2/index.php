<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>server-info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">

      <h1>server and file info </h1>
      <?php if ($server): ?>
        <ul class="list-group">
          <?php foreach ($server as $key => $value) : ?>
            <li class="list-group-item">
              <strong><?php echo $key ?></strong>
              <?php echo $value ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    </div>
  </body>
</html>
