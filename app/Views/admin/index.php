<h2>Data Sertifikat</h2>

<a href="/admin/create">Tambah</a> |
<a href="/logout">Logout</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nomor</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1;
    foreach ($sertifikat as $s): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $s['nomor_sertifikat'] ?></td>
            <td>
                <a href="/sertifikat/<?= $s['id'] ?>">Lihat</a>
                <a href="/admin/delete/<?= $s['id'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>