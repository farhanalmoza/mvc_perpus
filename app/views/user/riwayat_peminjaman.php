<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">Riwayat Peminjaman Buku</h1>

    <div class="card">
        <div class="card-body">
            <!-- tampilkan daftar riwayat peminjaman pada tabel -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Peminjam</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['peminjaman'] as $pmj) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $pmj['nama']; ?></td>
                            <td><?= $pmj['judul']; ?></td>
                            <td><?= $pmj['tgl_pinjam']; ?></td>
                            <td><?= $pmj['tgl_kembali']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>