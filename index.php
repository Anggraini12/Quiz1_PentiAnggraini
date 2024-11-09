<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
          </ul>
         <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
    <div class="container">
    <div class="row">
        <div class ="col-6"></div>
        <div class="card">
  <div class="card-header">
    <h3>form Dosen</h3>
  </div>
  <div class="card-body">

  <form action="tabel_dosen.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rumpun</label>
        <select name="rumpun" id="" class="form-control">
            <option value="">Pilih Rumpun</option>
            <option value="komputer">Komputer</option>
            <option value="akutansi">Akutansi</option>
            <option value="manajemen">Manajemen</option>
            <option value="perpajakan">Perpajakan</option>
            <option value="bisnis">Bisnis</option>
        </select>
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
        <input type="text" Name="tempat" class=form-control id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
        <br>
        <input type="radio" name="Jnkl" value="Laki-Laki" id="exampleInputPassword1"> laki-laki
        <input type="radio" name="Jnkl" value="Perempuan" id="exampleInputPassword1"> Perempuan
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>
</form>


    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>