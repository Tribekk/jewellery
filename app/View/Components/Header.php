<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title = "";
    public string $description = "";
    public string $keyWords = "";

    public function __construct($message = " ", $des = " ", $keys = " ")
    {
        $this->title = $message ?? "";
        $this->description = $des ?? "";
        $this->keyWords = $keys ?? "";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
