<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">Daftar Anggota Perpustakaan</h1>
    <!-- tombol modal box tambah buku -->
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#tambahBuku">
        Tambah Buku
    </button>

    <div class="card">
        <div class="card-body">
            <!-- tampilkan daftar buku menggunakan card dengan gambar -->
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($data['buku'] as $b) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <!-- maksimal ukuran gambar adalah 300x300 -->
                            <img src="<?= BASEURL; ?>/img/<?= $b['gambar']; ?>" class="card-img-top" alt="..." style="max-width: 200px;">
                            <div class="card-body">
                                <p class="card-text"><?= $b['judul']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- tombol ubah buku -->
                                        <a href="<?= BASEURL; ?>/admin/ubah_buku/<?= $b['id']; ?>" class="btn btn-success">Ubah</a>
                                        <a href="<?= BASEURL; ?>/admin/detail_buku/<?= $b['id']; ?>" class="btn btn-primary">Detail</a>
                                        <a href="<?= BASEURL; ?>/admin/hapus_buku/<?= $b['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Modal tambah buku -->
    <div class="modal fade" id="tambahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/buku/tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan nama penulis">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun terbit">
                        </div>
                        <!-- kategori buku -->
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="">Pilih Kategori</option>
                                <option value="Novel">Novel</option>
                                <option value="Komputer">Komputer</option>
                                <option value="Filsafat">Filsafat</option>
                                <option value="Puisi">Puisi</option>
                                <option value="Kisah">Kisah</option>
                                <option value="Laporan">Laporan</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <!-- jumlah buku -->
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah buku">
                        </div>
                        <!-- link buku -->
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Masukkan link buku">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>