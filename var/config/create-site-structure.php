<?php

use Pimcore\Model\Document;
use Pimcore\Model\Document\Page;

require_once __DIR__ . '/../../pimcore/bootstrap.php';



// Seitenstruktur definieren
$pages = [
    ['key' => 'startseite', 'title' => 'Startseite'],
    ['key' => 'vita', 'title' => 'Vita'],
    ['key' => 'trompeter', 'title' => 'Trompeter'],
    ['key' => 'dirigent', 'title' => 'Dirigent'],
    ['key' => 'unterricht', 'title' => 'Unterricht'],
    ['key' => 'medien', 'title' => 'Medien'],
    ['key' => 'kontakt', 'title' => 'Kontakt'],
    ['key' => 'impressum', 'title' => 'Impressum'],
    ['key' => 'datenschutz', 'title' => 'Datenschutz'],
];

$parent = Document::getById(1); // Root-Dokument

foreach ($pages as $pageData) {
    if (!Document::getByPath("/" . $pageData['key'])) {
        $page = Page::create([
            'parentId' => $parent->getId(),
            'key' => $pageData['key'],
            'published' => true,
        ]);
        $page->setTitle($pageData['title']);
        $page->save();

        echo "Seite /{$pageData['key']} wurde erstellt.\n";
    } else {
        echo "Seite /{$pageData['key']} existiert bereits.\n";
    }
}
