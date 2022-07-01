<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">Daftar Buku Perpustakaan</h1>

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
                                        <!-- tombol pinjam buku -->
                                        <a href="<?= BASEURL; ?>/user/pinjam/<?= $b['id']; ?>" class="btn btn-primary">Pinjam</a>
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