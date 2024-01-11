<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Store Spare Part</title>
  </head>
  <body>

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
   <h1 class="mt-5">Store Sparepart</h1>
<form action ="/adding" method ="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
          <label for="Name">Name</label>
          <select name="Name" id="" class="form-control mt-1" required="required">
            <option value="" hidden="hidden"></option>
            <?php foreach ($sparepart as $thing) : ?>
              <option value="<?= $thing['Name']?>">
                <?= $thing['Name']?>
              </option>
            <?php endforeach; ?>
          </select>
      </div>
      <div class="form-group">
        <label for="Quantity_add">Quantity Added</label>
        <input type="number" name= "Quantity_add" class="form-control" id="Quantity_add">
      </div>  
    </div>
  <div class="col-6">
  </div>
<div>

</div>
  <button type="submit" class="btn btn-primary">Add Sparepart</button>
</form>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">@2022 Joy Hans Christabel Sinaga 201705150</span>
    </div>
</footer>

</body>
</html>