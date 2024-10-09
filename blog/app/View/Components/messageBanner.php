<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageBanner extends Component
{
    public $msg;
    public $cl;
    /**
     * Create a new component instance.
     */
    public function __construct(String $msg, String $cl)
    {
        //
        $this->msg=$msg;
        $this->cl=$cl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.controllers.message-banner');
    }
}
