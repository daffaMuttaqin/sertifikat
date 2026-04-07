<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <title>Tambah Sertifikat</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Tambah Sertifikat
            </h2>

            <!-- Error Message -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 text-sm">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form action="/admin/store" method="post" enctype="multipart/form-data" class="space-y-4">

                <!-- Nomor Sertifikat -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Nomor Sertifikat
                    </label>
                    <input
                        type="text"
                        name="nomor"
                        placeholder="Masukkan nomor sertifikat"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Upload PDF -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Upload File (PDF)
                    </label>
                    <input
                        type="file"
                        name="pdf"
                        class="w-full border rounded-lg p-2 bg-gray-50"
                        accept="application/pdf"
                        required>
                </div>

                <!-- Buttons -->
                <div class="flex gap-2 pt-2">

                    <button
                        type="submit"
                        class="flex-1 bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Simpan
                    </button>

                    <a href="/admin"
                        class="flex-1 text-center bg-gray-300 text-gray-800 py-2 rounded-lg hover:bg-gray-400 transition">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>

</html>