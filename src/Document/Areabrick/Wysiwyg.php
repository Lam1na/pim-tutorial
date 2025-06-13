<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Wysiwyg extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Textfeld';
    }
    public function getIcon(): string
    {
        return '/bundles/pimcoreadmin/img/flat-color-icons/text.svg';
    
    }

    public function getDescription(): string
    {
        return 'Textfeld mit Editor und Möglichkeit ein Bild hinzuzufügen';
    }
    
    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}