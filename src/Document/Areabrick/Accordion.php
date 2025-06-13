<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Accordion extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Accordion';
    }
    public function getIcon(): string
    {
        return '/bundles/pimcoreadmin/img/flat-color-icons/row.svg';
    
    }

    public function getDescription(): string
    {
        return 'Accordion einfügen';
    }
    
    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}