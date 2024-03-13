<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    public $title;
    public $linkUrl;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $linkUrl)
    {
        $this->title = $title;
        $this->linkUrl = $linkUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
