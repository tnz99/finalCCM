<?php

namespace App\View\Component;

use Illuminate\View\Component;

class CircularNavComponent extends Component {
    public function __construct(
        public string $background,
        public string $innerBorder
    ){}

    public function render() {
        return view('components.circular_nav');
    }
}
