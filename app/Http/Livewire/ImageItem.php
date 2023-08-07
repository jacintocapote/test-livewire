<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageItem extends Component
{

    public $item;
    public $name;
    public $alt;

    public function delete() {
        $this->item->delete();
        $this->emitUp('imageUpdates');
    }

    public function favorite() {
        $this->item->favorite = $this->item->favorite ? 0 : 1;
        $this->item->update();
    }

    public function render()
    {
        return view('livewire.image-item');
    }
}
