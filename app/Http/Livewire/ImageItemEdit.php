<?php

namespace App\Http\Livewire;

use App\Models\Image;
use LivewireUI\Modal\ModalComponent;

class ImageItemEdit extends ModalComponent
{
    public Image $image;

    public String $name;
    public String $alt;
    
    public function mount(Image $image)
    {
        $this->image = $image;
        $this->name = $image->name;
        $this->alt = $image->alt;
    }

    public function update()
    {
        $this->image->update([
            'name' => $this->name,
            'alt' => $this->alt,
        ]);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.image-item-edit');
    }
}
