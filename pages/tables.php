<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <title>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">MENU</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="../pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Arsip</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tentang</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h2 class="font-weight-bolder text-white mb-0">Arsip Surat</h2>
        </nav>
        <!-- <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">

              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>

        </div> -->
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="mb-0 text-sm">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</h6>
              <h6 class="mb-0 text-sm">Klik "lihat" pada kolom aksi untuk menampilkan surat.</h6>
              <br>
              <form method=post>
                <h6 class="mb-0 text-sm">Cari Surat</h6>
                <div class="col-3">
                  <div class="input-group">

                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci..." name="pencarian">
                  </div>
                  <!-- <input type="submit" name="search" value="Cari" class="btn bg-gradient-dark mb-0"> -->
                </div>
              </form>
            </div>
            <br>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Surat</th>
                      <th></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                      <th></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Waktu Pengarsipan</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../koneksi.php';
                    $batas = 5;
                    extract($_GET);
                    if (empty($hal)) {
                      $posisi = 0;
                      $hal = 1;
                      $nomor = 1;
                    } else {
                      $posisi = ($hal - 1) * $batas;
                      $nomor = $posisi + 1;
                    }
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                      $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
                      if ($pencarian != "") {
                        $sql = "SELECT * FROM tbarsip WHERE kategori LIKE '%$pencarian%'
                              OR no_surat LIKE '%$pencarian%'
                              OR judul LIKE '%$pencarian%'
                              OR tgl_arsip LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                      } else {
                        $query = "SELECT * FROM tbarsip LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tbarsip";
                        $no = $posisi * 1;
                      }
                    } else {
                      $query = "SELECT *FROM tbarsip LIMIT $posisi, $batas";
                      $queryJml = "SELECT *FROM tbarsip";
                      $no = $posisi * 1;
                    }
                    $q_tampil_arsip = mysqli_query($db, $query);
                    if (mysqli_num_rows($q_tampil_arsip) > 0) {
                      while ($r_tampil_arsip = mysqli_fetch_array($q_tampil_arsip)) {
                        if (empty($r_tampil_arsip['data_surat']) or ($r_tampil_arsip['data_surat'] == '-')) {
                          $file = "-";
                        } else {
                          $file = $r_tampil_arsip['data_surat'];
                        }
                    ?>
                        <tr>

                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><?php echo $r_tampil_arsip['no_surat']; ?></h6>
                              </div>
                            </div>
                          </td>
                          <td></td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo $r_tampil_arsip['kategori']; ?></h6>
                          </td>
                          <td></td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo $r_tampil_arsip['judul']; ?></h6>
                          </td>
                          <td></td>
                          <td>
                            <h6 class="mb-0 text-sm"><?php echo $r_tampil_arsip['tgl_arsip']; ?></h6>
                          </td>
                          <td></td>


                          <td>
                            <button type="button" class="btn btn-danger mb-0"><a href="pages/delete.php?id=<?php echo $r_tampil_arsip['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus arsip surat ini?')" class="tombol" style="color:white">Hapus</a></button>
                            <button type="button" class="btn btn-warning mb-0"><a target="_blank" href="http://localhost/arsip_surat/arsip/<?php echo $file ?>" class="tombol" style="color:white">Unduh</a></button>
                            <button type="button" class="btn btn-primary mb-0"><a href="index.php?p=read&id=<?php echo $r_tampil_arsip['id']; ?>" class="tombol" style="color:white">Lihat>>></a></button>
                          </td>
                        </tr>

                    <?php
                      }
                    } else {
                      echo "<tr><td colspan=6>Data tidak ditemukan</td></tr>";
                    }
                    ?>

                  </tbody>
                </table>

                <div class="card-header pb-0">
                  <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Arsipkan Surat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>

  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>