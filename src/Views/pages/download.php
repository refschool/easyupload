<?php if (!empty($error)): ?>

    <p class="text-danger"><?= \App\Core\View::escape($error) ?></p>

<?php elseif (!empty($file)): ?>

    <p
        class="download__filename">
        Fichier : 
        <strong><?= \App\Core\View::escape($file) ?></strong>
    </p>

    <button
        class="btn btn-primary download__btn"
        href="/download/file?file=<?= urlencode($file) ?>" 
        aria-label="Télécharger le fichier <?= \App\Core\View::escape($file) ?>" 
        download
        >
        <i class="bi bi-download" aria-hidden="true"></i>
        Télécharger
    </button>

    <?php \App\Core\View::partial('components/social-share', [
        'shareUrl'  => $_ENV['WEB_URL'] . 'download?file=' . urlencode($file),
        'shareText' => 'Je viens de recevoir des fichiers via EasyUpload ! Télécharge-les ici :',
    ]); ?>

<?php else: ?>

    <p>Aucun fichier spécifié pour le téléchargement.</p>

<?php endif; ?>