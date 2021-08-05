<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin Template · Bootstrap v5.0</title>
<!-- Favicon -->
    <?php $icon=Aset::icon(); foreach ($icon as $href => $rel): ?>
    <link href="<?=$href?>" rel="<?=$rel?>">
    <?php endforeach; ?>
<!-- End Favicon -->
<!-- CSS -->
    <?php $css=Aset::css(); foreach ($css as $href => $rel): ?>
    <link href="<?=$href?>" rel="<?=$rel?>">
    <?php endforeach; ?>
    <style>
        html,
        body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            /* padding-top: 40px; */
            padding-bottom: 40px;
            background-color: black;
        }
        main {
            width: 100%;
            /* max-width: 330px; */
            padding: 15px;
            margin: auto;
        }
    </style>
<!-- End CSS -->
</head>

<body>
    <main class="text-center text-light">
            <img class="mb-4" src="lib/img/logo-512x512.png" alt="raven logo" width="120">
            <p>Raven Framework</p>
            <h1>Framework PHP yang Cepat, Ringan dan Aman.</h1>
            <p>dibuat dengan <span class="text-danger">&hearts;</span> oleh Raven Swain &copy; 2021</p>
            <p class="mt-5"><?= Pustaka::tanggal(date('Y-m-d')); ?></p>
    </main>
<!-- JS -->
    <?php $js=Aset::js(); foreach ($js as $script): ?>
    <script src="<?=$script;?>"></script>
    <?php endforeach; ?>
<!-- End JS -->
</body>

</html>