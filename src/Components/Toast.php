<?php

namespace Jecharlt\LivewireBootstrapToaster\Components;

use Illuminate\View\Component;

class Toast extends Component
{
    public function render() {
        return view('livewire-bootstrap-toaster::toast');
    }
}
