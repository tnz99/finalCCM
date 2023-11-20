<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StoryControl extends Component {
    public function __construct(
        public array $links,
        public string $nextLink,
        public bool $dark,
    ) {}

    public function render() {
        return view('components.story_control');
    }
}
