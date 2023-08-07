<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class ImageGallery extends Component
{
    use WithFileUploads;

    protected $listeners = ['imageUpdates' => 'refresh'];
    public $instance;
    public $image;
    public $name;

    public function save()
    {
        dd($this->name);
       $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);
 
        $fileName = $this->image->getClientOriginalName();
        $filePath = $this->image->storeAs('uploads', $fileName, 'public');

        $this->instance->images()->firstOrCreate(
            ['filepath' => $filePath],
            [
                'name' => $this->name,
                'filepath' => $filePath,
                'alt' => '',
            ]
        );
        $this->instance->refresh();
    }

    public function updateImage()
    {
        dd('hola jacinto');
        $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);
 
        $fileName = $this->image->getClientOriginalName();
        $filePath = $this->image->storeAs('uploads', $fileName, 'public');

        $this->instance->images()->firstOrCreate(
            ['filepath' => $filePath],
            [
                'name' => $this->name,
                'filepath' => $filePath,
                'alt' => '',
            ]
        );
        $this->instance->refresh();
    }

    public function refresh()
    {
        $this->instance->refresh();
    }

    public function render()
    {
        return view('livewire.image-gallery');
    }
}
