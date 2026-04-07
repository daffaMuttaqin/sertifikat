<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <title>Admin - Data Sertifikat</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen p-4 md:p-8">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
            <h2 class="text-2xl font-bold text-gray-800">Data Sertifikat</h2>

            <div class="flex gap-2">
                <a href="/admin/create"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    + Tambah
                </a>

                <a href="/logout"
                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                    Logout
                </a>
            </div>
        </div>

        <!-- Card Table -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

            <div class="overflow-x-auto">
                <table class="w-full text-left">

                    <!-- Head -->
                    <thead class="bg-gray-50 text-gray-700 text-sm uppercase">
                        <tr>
                            <th class="px-6 py-3">No</th>
                            <th class="px-6 py-3">Nomor Sertifikat</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody class="divide-y">

                        <?php $no = 1;
                        foreach ($sertifikat as $s): ?>
                            <tr class="hover:bg-gray-50 transition">

                                <td class="px-6 py-4"><?= $no++ ?></td>

                                <td class="px-6 py-4 font-medium text-gray-800">
                                    <?= $s['nomor_sertifikat'] ?>
                                </td>

                                <td class="px-6 py-4 text-center space-x-2">

                                    <a href="/v2/sertifikat/<?= $s['nomor_sertifikat'] ?>"
                                        class="bg-green-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-green-600">
                                        Lihat
                                    </a>

                                    <a href="/admin/delete/<?= $s['id'] ?>"
                                        onclick="return confirm('Yakin hapus data ini?')"
                                        class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600">
                                        Hapus
                                    </a>

                                </td>

                            </tr>
                        <?php endforeach; ?>

                        <?php if (empty($sertifikat)): ?>
                            <tr>
                                <td colspan="3" class="text-center py-6 text-gray-500">
                                    Data belum tersedia
                                </td>
                            </tr>
                        <?php endif; ?>

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</body>

</html>