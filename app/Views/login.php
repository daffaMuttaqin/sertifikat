<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <title>Login Admin</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
                Login Admin
            </h2>

            <!-- Error Message -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 text-sm">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form method="post" action="/login" class="space-y-4">

                <!-- Username -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Username
                    </label>
                    <input
                        type="text"
                        name="username"
                        placeholder="Masukkan username"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">
                    Login
                </button>

            </form>

        </div>

    </div>

</body>

</html>