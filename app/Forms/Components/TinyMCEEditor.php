<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;

class TinyMCEEditor extends Field
{
    protected string $view = 'forms.components.tinymce-editor';

    protected function setUp(): void
    {
        parent::setUp();
        $this->afterStateHydrated(function ($component, $state) {
            $component->state($state);
        });
    }
}
