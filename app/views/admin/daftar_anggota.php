<!-- Page content-->
<div class="container-fluid">
    <h1 class="mt-4">Daftar Anggota Perpustakaan</h1>

    <div class="card">
        <div class="card-body">
            <!-- tampilkan daftar anggota pada tabel -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['anggota'] as $a) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/admin/hapus_anggota/<?= $a['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>