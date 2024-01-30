<?php
  require_once("database.php");
  $data = editdata("notes", $_GET['id']);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">NOTES</a>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="../home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">API</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit"> <a href="../Login/login.php">Logout</a> </button>
      </form>
    </div>
  </div>
</nav>
  <body>
<div class="container">
  <br>
  <h1>EDIT NOTES</h1>
  <form action="update.php" method="post">
  <?php  while($note = mysqli_fetch_array($data)): ?>
          <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
          <label for="notes">Notes</label>
          <textarea class="form-control" name="notes" id="" cols="30" rows="10"><?= $note ['note']; ?></textarea>
          <div>
          <input type="submit" value="Astagfirullah">
  </div>   
        </form>
        <?php endwhile;?>   
</div>  
  </body>
</html>