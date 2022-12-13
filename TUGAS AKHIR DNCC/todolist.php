<?php
require_once __DIR__ . "/function.php";  

if(isset($_POST['tambahData'])) {
  $tugas = $_POST['tugas'];
  $deadline = $_POST['deadline'];

  tambahData($tugas,$deadline);
  header("location: todolist.php");
}
if(isset($_GET['id_tugas'])){
  $id = $_GET['id_tugas'];

  hapusData($id);
  header("location: todolist.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PengingatKU!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <!-- favicon -->
    <link
      rel="icon"
      type="image/png"
      size="32x32"
      href="media/icon.png"
    />
</head>

<body>
<div class="card text-center">
  <div class="card-header">
    <!--Navbar-->
    <nav
          class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top"
        >
          <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#"
              >Pengingat<span class="text-primary">KU!</span></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase active"
                    aria-current="page"
                    href="home.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase"
                    aria-current="page"
                    href="todolist.php"
                  >
                    TugasKU</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--Navbar End-->
  </div>
  <div class="card-body">
    <!-- Form tambah data -->
    <div class="container-sm card col-md-8 mt-5">
        <div class="card-header">
            Tambah Todolist
        </div>
        <div class="card-body">
            <!-- Start Form -->
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Tugas Saya</label>
                    <input type="text" name="tugas" class="form-control" id="tugas" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deadline</label>
                    <input type="date" name="deadline" class="form-control" id="deadline" required>
                </div>
                <button type="submit" name="tambahData" class="btn btn-primary">Submit</button>
            </form>
            <!-- End Form -->
        </div>
    </div>

    <!-- End Form tambah data -->

    <!-- table data -->
    <div class="container-sm card mt-5 col-md-8">
        <div class="card-body">
            <!-- table bootstrap -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tugas Saya</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $nomor = 1; 
                    foreach(ambilData() as $data) { ?>
                    <tr>
                        <th scope="row"><?php echo $nomor++ ?></th>
                        <td><?php echo$data['nama_tugas'] ?></td>
                        <td><?php echo date("d F Y", strtotime($data['deadline'])) ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id_tugas'] ?>" class="btn btn-primary">Edit</a>
                            <a href="?id=<?php echo $data['id_tugas'] ?>" onclick = "return confirm ('Yakin ingin menghapus?')" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end table data -->
  </div>
  <div class="card-footer text-muted">
    Mustafid Kaisalana 2022
  </div>
</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html