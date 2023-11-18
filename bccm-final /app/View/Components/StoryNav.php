<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StoryNav extends Component {
    public function __construct(
        public bool $dark,
    ) {}

    public function render() {
        return view('components.story_nav');
    }
}
