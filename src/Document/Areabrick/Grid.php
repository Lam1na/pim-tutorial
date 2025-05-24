<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Grid extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Spalten';
    }
    public function getIcon(): string
    {
        return '/bundles/pimcoreadmin/img/flat-color-icons/add_column.svg';
    
    }

    public function getDescription(): string
    {
        return 'Seiteninhalt durch Spalten organisieren';
    }

    public function getTemplateLocation(): string
    {
        return static::TEMPLATE_LOCATION_GLOBAL;
    }
    
    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}