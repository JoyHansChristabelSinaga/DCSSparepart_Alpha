<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sparepart</title>
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
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">MC</th>
      <th scope="col">Quantity</th>
      <th scope="col">Place</th>
      <th scope="col">Note</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach($sparepart as $list): ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $list['Name']?></td>
      <td><?= $list['MC']?></td>
      <td><?= $list['Quantity']?></td>
      <td><?= $list['Location']?></td>
      <td><?= $list['Note']?></td>
      <td>
        <div class="d-flex">
          <a href="/edit/<?=$list['id']?>" class="btn btn-warning mr-3">Edit</a>
            <form action="/delete/<?=$list['id'] ?>" method="post">
              <input name="_method" value="DELETE" type="hidden">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
      </td>
    </tr>
    <?php $no++; endforeach ?>
  </tbody>
</table>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">@2022 Joy Hans Christabel Sinaga 201705150</span>
    </div>
</footer>

</body>
</html>