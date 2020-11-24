<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/all.css">
</head>

<header class="font-body shadow-md bg-white fixed relative w-full">
    <div class="flex justify-between">
        <div class="flex">
            <div>
                <img src="/img/logo polstat.jpg" class="w-20 p-3 ml-12" alt="logo polstat">
            </div>
            <div class="mt-3">
                <h1 class="font-bold text-lg text-blue-700">SISTEM INFORMASI DATABASE</h1>
                <h1 class="font-bold text-lg text-blue-700">ALUMNI AIS/STIS/POLSTAT STIS</h1>
            </div>
        </div>
        <div class="mr-16 mt-6">
            <nav>
                <ul class="flex gap-x-10 font-bold">
                    <li><a href="/" class="hover:text-blue-600 hover:underline">Login</a></li>
                    <li><a href="/register" class="hover:text-blue-600 hover:underline">Register</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<body class="font-body bg-gray-100">
    <?= $this->renderSection('content'); ?>
</body>

<footer class="font-body mt-12 mb-4">
    <div>
        <h1 class="text-center font-bold text-sm">Copyright &copy;2020 PKL STIS 60</h1>
    </div>
</footer>

</html>