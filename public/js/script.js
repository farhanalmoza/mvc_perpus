$(function() {
    $('.tampilModalUbah').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost:8080/mvcperpus/public/buku/getubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#ubah_judul').val(data.judul);
                $('#ubah_penulis').val(data.pengarang);
                $('#ubah_penerbit').val(data.penerbit);
                $('#ubah_tahun').val(data.th_terbit);
                $('#ubah_kategori').val(data.kategori);
                $('#ubah_jumlah').val(data.jumlah_buku);
                $('#ubah_gambar_lama').val(data.gambar);
                $('#ubah_link').val(data.link_buku);
            }
        });
    });
})