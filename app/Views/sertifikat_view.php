<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <link href="/css/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 m-0">

    <div class="w-full h-screen">
        <iframe
            src="<?= base_url('uploads/' . $data['file_pdf']) ?>"
            class="w-full h-full border-0">
        </iframe>
    </div>

</body>

</html>