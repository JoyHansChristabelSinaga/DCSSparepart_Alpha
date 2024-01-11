<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit List!</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="mainmenu">Main Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/addLogout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
   <h1 class="mt-5">Edit User</h1>
<form action ="/update_user/<?=$user->username?>" method ="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="userunemu">Username</label>
        <input type="text" name= "userunemu" class="form-control" id="userunemu" value="<?=$user->username ?>">
      </div>
    <div class="form-group">
     <label for="pasuwodo">Password</label>
     <input type="password" name= "pasuwodo" class="form-control" id="pasuwodo"?>
    </div>
    <div class="form-group">
      <label for="namae">Name</label>
      <input type="text" name= "namae" class="form-control" id="namae" value="<?=$user->name ?>">
   </div>
  </div>
  <div class="col-6">
  </div>
<div>
</div>
  <button type="submit" class="btn btn-primary">Change Data</button>
</form>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">@2022 Joy Hans Christabel Sinaga 201705150</span>
    </div>
</footer>

</body>
</html>