<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Carousel extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Carousel';
    }
    public function getIcon(): string
    {
        return '/bundles/pimcoreadmin/img/flat-color-icons/panorama.svg';
    
    }

    public function getDescription(): string
    {
        return 'Bild Carousel einfügen';
    }
    
    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}