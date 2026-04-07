<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/output.css" rel="stylesheet" />
    <!-- <link rel="icon" href="./src/assets/logo-OSS.png" type="image/x-icon" /> -->
    <title>Perizinan SDA</title>

    <!-- Styling -->
    <style>
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #0a41d6;
            border-bottom-color: transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <span class="loader"></span>
</body>

</html>