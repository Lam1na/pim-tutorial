<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class CardGroup extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Card Gruppe';
    }

    public function getDescription(): string
    {
        return 'Zeigt eine oder mehrere Bootstrap Cards in einer Reihe an';
    }

    public function getConfig(): array
    {
        return [
            'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/stack_of_photos.svg',
        ];
    }
}
