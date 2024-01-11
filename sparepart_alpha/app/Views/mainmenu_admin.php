<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Main Menu</title>
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

<p class="fs-3 text-center">DCS Spare Part main menu (Admin).</p>

<div class="d-grid gap-2 col-6 mx-auto">

  <a href="/list" class="btn btn-primary btn-lg text-nowrap">Spare Part List</a>

  <a href="/create" class="btn btn-primary btn-lg text-nowrap">Add new Spare Part</a>

  <a href="/add" class="btn btn-primary btn-lg text-nowrap">Store Spare Part</a>

  <a href="/take" class="btn btn-primary btn-lg text-nowrap">Take Spare Part</a>

  <a href="/history1" class="btn btn-primary btn-lg text-nowrap">Storing Sparepart History</a>

  <a href="/history2" class="btn btn-primary btn-lg text-nowrap">Taking Sparepart History</a>

  <a href="/History" class="btn btn-primary btn-lg text-nowrap">Login History</a>

  <a href="/user" class="btn btn-primary btn-lg btn-block text-nowrap">User List</a>
  
  <a href="/register" class="btn btn-primary btn-lg btn-block text-nowrap">Add User</a>

</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">@2022 Joy Hans Christabel Sinaga 201705150</span>
    </div>
</footer>

</body>
</html>