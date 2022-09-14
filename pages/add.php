<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h2 class="font-weight-bolder text-white mb-0">Arsip Surat >> Unggah</h2>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="mb-0 text-sm">Unggah surat yang telah terbit pada form ini untuk diarsipkan.</h6>
                        <h6 class="mb-0 text-sm">Catatan:</h6>
                        <h6 class="mb-0 text-sm">- Gunakan file berformat PDF</h6>
                        <br>
                        <div id="content">
                            <form action="pages/add-data.php" method="post" enctype="multipart/form-data">
                                <table id="table-input">
                                    <tr>

                                        <td class="mb-0 text-sm">Nomor Surat</td>
                                        <td class="mb-0 text-sm" style="height: 50px">
                                            <input type="text" name="no_surat" class="form-control" style="width: 150%" placeholder="Ketik disini...">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mb-0 text-sm">Kategori</td>
                                        <td><select class="form-select" aria-label="Default select example" name="kategori" style="height: 40px">
                                                <option selected>Pilih Kategori</option>
                                                <option value="Undangan">Undangan</option>
                                                <option value="Pengumuman">Pengumuman</option>
                                                <option value="Nota Dinas">Nota Dinas</option>
                                                <option value="Pemberitahuan">Pemberitahuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mb-0 text-sm">Judul</td>
                                        <td class="mb-0 text-sm" style="height: 50px; width: 50%">
                                            <input type="text" name="judul" class="form-control" style="width: 150%" placeholder="Ketik disini...">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mb-0 text-sm">File Surat ( .pdf )</td>
                                        <td class="mb-0 text-sm" style="height: 50px"><input type="file" name="data_surat" class="isian-formulir isian-formulir-border"></td>
                                    </tr>
                                    <tr>
                                        <td class="mb-0 text-sm" style="height: 80px">
                                            <button type="button" class="tombol"><a href="index.php?p=e-arsip" style="color:black">Kembali</a></button>
                                        
                                            <button class="btn bg-gradient-dark mb-0"><input style="color:white" type="submit" name="simpan" value="Simpan" class="tombol"></button>
                                        </td>
                                        <tr>
                                        <td></td>
                                        <td >
                                            <!-- <button type="button" class="btn bg-gradient-dark mb-0"><a class="tombol" href="#" style="color:white">Edit/Ganti File</a></button> -->
                                            <a class="btn bg-gradient-dark mb-0" style="color:white" href="index.php?p=e-arsip" style="color:black">Kembali</a>
                                            <!-- <button type="button" class="btn bg-gradient-dark mb-0"> <a class="tombol" style="color:white"><input type="submit" name="simpan" value="Simpan"></a></button> -->
                                            <button type="submit" class="btn bg-gradient-dark mb-0">
                                                <i lass="tombol" style="color:white" name="simpan"></i> Simpan
                                            </button>
                                        </td>
                                    </tr>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</main>