<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Request;
use App\Core\View;
use App\Core\Response;
use App\Services\DownloadService;

require_once PROJECT_ROOT . '/src/log.php';

class DownloadController
{
    public function show(Request $request): void
    {
        $file = $request->query('file');

        if (!$file) {
            setLog('Aucun fichier spécifié pour le téléchargement', 'TRACE');
            View::render('pages/download', [
                'title' => 'Télécharger',
                'error' => 'Aucun fichier spécifié',
            ]);
            return;
        }

        setLog('Page de téléchargement', 'TRACE');
        View::render('pages/download', [
            'title' => 'Télécharger',
            'file'  => $file,
        ]);
    }

    public function file(Request $request): void
    {
        $file = $request->query('file');

        if (!$file) {
            Response::status(400);
            echo 'Paramètre manquant';
            return;
        }

        DownloadService::send($file);
    }
}
