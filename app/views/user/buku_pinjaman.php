<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">Daftar Buku Dipinjam</h1>

    <div class="card">
        <div class="card-body">
            <!-- tampilkan daftar buku menggunakan card dengan gambar -->
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($data['peminjaman'] as $pmj) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <!-- maksimal ukuran gambar adalah 300x300 -->
                            <img src="<?= BASEURL; ?>/img/<?= $pmj['gambar']; ?>" class="card-img-top" alt="..." style="max-width: 200px;">
                            <div class="card-body">
                                <p class="card-text"><?= $pmj['judul']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- tombol baca buku -->
                                        <a href="<?= $pmj['link_buku']; ?>" class="btn btn-primary">Baca</a>
                                        <!-- tombol kembalikan buku -->
                                        <?php if ($pmj['status'] == 2) : ?>
                                            <a href="<?= BASEURL; ?>/user/kembalikan_buku/<?= $pmj['id_peminjaman']; ?>" class="btn btn-warning">Kembalikan</a>
                                        <?php else : ?>
                                            <a href="#" class="btn btn-secondary disabled">Menunggu konfirmasi</a>
                                        <?php endif; ?>
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