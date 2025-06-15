<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Hero extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Hero';
    }
    public function getIcon(): string
    {
        return '/bundles/pimcoreadmin/img/flat-color-icons/panorama.svg';
    
    }

    public function getDescription(): string
    {
        return 'Hero Abschnitt oder Header einfügen';
    }
    
    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}