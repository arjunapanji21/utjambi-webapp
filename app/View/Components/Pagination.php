<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{
    public $paginator;

    public function __construct($paginator = null) // Make $paginator optional
    {
        $this->paginator = $paginator;
    }

    public function render()
    {
        // Only render the view if $paginator is not null
        if ($this->paginator) {
            return view('components.pagination');
        }

        // Return an empty string if $paginator is null
        return '';
    }
}
