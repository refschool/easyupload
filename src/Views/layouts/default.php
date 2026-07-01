<!DOCTYPE html>
<html lang="fr">

<head>
    <?php \App\Core\View::partial('components/head', [
        'title' => $title ?? 'EasyUpload',
    ]); ?>
</head>

<body>

<?php \App\Core\View::partial('components/header'); ?>
<?php \App\Core\View::partial('components/background'); ?>
<main>
    <?= $content ?>
</main>

<?php \App\Core\View::partial('components/footer'); ?>

</body>
</html>
