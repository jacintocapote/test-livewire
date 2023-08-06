<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageGallery extends Component
{
    use WithFileUploads;

    protected $listeners = ['imageUpdates' => 'refresh'];
    public $instance;
    public $image;

    public function save()
    {
        $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);
 
        $fileName = $this->image->getClientOriginalName();
        $filePath = $this->image->storeAs('uploads', $fileName, 'public');
        /*$imageModel = new Image(
            [
                'name' => $fileName,
                'filepath' => $filePath,
                'alt' => '',
            ]
        );*/
        //$images = $this->instance->images()->toArray;
        //$images = array_merge($images, [$imageModel]);
        $this->instance->images()->firstOrCreate(
            ['filepath' => $filePath],
            [
                'name' => $fileName,
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
