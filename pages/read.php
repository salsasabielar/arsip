<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h2 class="font-weight-bolder text-white mb-0">Arsip Surat >> Lihat</h2>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <?php

                                    $id = $_GET['id'];
                                    $q_tampil_arsip = mysqli_query($db, "SELECT * FROM tbarsip WHERE id = '$id'");
                                    $r_tampil_arsip = mysqli_fetch_array($q_tampil_arsip);
                                    if (empty($r_tampil_arsip['data_surat']) or ($r_tampil_arsip['data_surat'] == '-')) {
                                        $file = "-";
                                    } else {
                                        $file = $r_tampil_arsip['data_surat'];
                                    }
                                    ?>

                                    <span class="mb-4 text-sm">Nomor: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $r_tampil_arsip['no_surat']; ?></span></span>
                                    <span class="mb-4 text-sm">Kategori: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $r_tampil_arsip['kategori']; ?></span></span>
                                    <span class="mb-4 text-sm">Judul: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $r_tampil_arsip['judul']; ?></span></span>
                                    <span class="mb-4 text-sm">Waktu Unggah: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $r_tampil_arsip['tgl_arsip']; ?></span></span>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-header pb-0">
                        <iframe src="arsip/<?php echo $r_tampil_arsip['data_surat'];; ?>" style="width: 100%;height: 500px;"></iframe>
                        
                        <button type="button" class="btn bg-gradient-dark mb-0"><a class="tombol" href="index.php?p=e-arsip" style="color:white"><< Kembali</a> </button>
                        <button type="button" class="btn bg-gradient-dark mb-0"><a class="tombol" href="http://localhost/arsip_surat/arsip/<?php echo $file ?>" style="color:white">Unduh</a></button>
                        <button type="button" class="btn bg-gradient-dark mb-0"><a class="tombol" href="#" style="color:white">Edit/Ganti File</a></button>
                    </div>
                    <br>

                </div>
            </div>
        </div>


    </div>
</main>