<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h2 class="font-weight-bolder text-white mb-0">Arsip Surat</h2>
        </nav>
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
                  <a class="btn bg-gradient-dark mb-0"  href="index.php?p=add"><i class="fas fa-plus"></i>&nbsp;&nbsp;Arsipkan Surat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>