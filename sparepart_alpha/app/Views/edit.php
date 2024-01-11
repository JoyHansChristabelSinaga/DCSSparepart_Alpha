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
   <h1 class="mt-5">Edit Sparepart Data</h1>
<form action ="/update/<?=$Sparepart["id"]?>" method ="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name= "Name" class="form-control" id="Name" value="<?=$Sparepart['Name'] ?>">
      </div>
    <div class="form-group">
     <label for="MC">MC</label>
     <input type="text" name= "MC" class="form-control" id="MC" value="<?=$Sparepart['MC'] ?>">
    </div>
    <div class="form-group">
      <label for="Quantity">Quantity</label>
      <input type="number" name= "Quantity" class="form-control" id="Quantity" value="<?=$Sparepart['Quantity'] ?>">
   </div>
   <div class="form-group">
      <label for="Location">Place</label>
      <input type="text" name= "Location" class="form-control" id="Location" value="<?=$Sparepart['Location'] ?>">
   </div>
   <div class="form-group">
      <label for="Note">Note</label>
      <input type="text" name= "Note" class="form-control" id="Note" value="<?=$Sparepart['Note'] ?>">
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