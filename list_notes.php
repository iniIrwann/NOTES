<?php
  require_once("database.php");
  $tampil = query("SELECT * FROM notes");
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
  <div class="jumbotron">
    <div class="container">
      <br><br>
    <h1>My Notes</h1><br>
    <a href="input.php"><button type="button" class="btn btn-outline-primary">Tambah Data</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Notes</th>
      <th scope="col">Created_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php $i = 1; ?>
      <?php foreach ($tampil as $data):?>
    <tr>
    
      <th scope="row"><?= $i; ?></th>
      <td><?= "$data[id]";?></td>
      <td><?= "$data[note]";?></td>
      <td><?= "$data[created_at]";?></td>
      <td><?php echo "<a href='edit.php?id=$data[id]'>Edit</a>  |
        <a href='javascript:hapusData(".$data['id'].")'>Hapus Data</a>";?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach;?>
  
  </tbody>
</table>
    </div>
  </div>

  <script language="JavaScript" type="text/javascript">
  function hapusData(id){
    if (confirm("Apakah anda yakin akan menghapus data ini?")){   
     if (confirm("Beneran nih?")){
        window.location.href = 'hapus.php?id=' + id;        
        }  
    }
  }
  
  </script>
  </body>
</html>