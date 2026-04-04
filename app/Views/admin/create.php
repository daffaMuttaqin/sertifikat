<h2>Tambah Sertifikat</h2>
<?php if (session()->getFlashdata('error')): ?>
    <p style="color:red"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>
<form action="/admin/store" method="post" enctype="multipart/form-data">
    <input type="text" name="nomor" placeholder="Nomor Sertifikat"><br><br>
    <input type="file" name="pdf"><br><br>
    <button type="submit">Simpan</button>
</form>