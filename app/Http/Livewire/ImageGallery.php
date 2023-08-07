<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class ImageGallery extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'imageUpdates' => 'refresh',
        'uploadedFile' => 'save',
    ];
    public $instance;
    public $image;
    public $name;

    public function finishUpload($name, $tmpPath, $isMultiple) 
    {
        $files = collect($tmpPath)->map(function ($i) {
            return TemporaryUploadedFile::createFromLivewire($i);
        })->toArray();
        $this->emitSelf('upload:finished', $name, collect($files)->map->getFilename()->toArray());
 
        $this->image = $files[0];

        //Before associate we validate.
        $this->validate([
            'image' => 'image|max:2048|dimensions:min_width=330,min_height=300',
        ]);

        if (!$this->name) {
            $this->addError('image', 'Name is required');
            $this->instance->refresh();
            return;
        }

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
