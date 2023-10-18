<?php

namespace App\Livewire;

use App\Http\Services\UploadService;
use App\Models\About;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutsUpdate extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;
    #[Rule('required')]
    public $designation;
    #[Rule('required')]
    public $email;
    #[Rule('required')]
    public $about_content;
    public $whatsapp;
    public $facebook;
    public $linkedin;
    public $twitter;
    public $resume_link;
    public $location;
    #[Rule('nullable|image|max:1024')]
    public $logo;
    #[Rule('nullable|image|max:1024')]
    public $about_image;
    public $logo_url;
    public $about_image_url;

    private UploadService $upload_service;

    public function __construct() {
        $this->upload_service = new UploadService();
    }

    public function mount($abouts) {
        $this->name = $abouts->name;
        $this->designation = $abouts->designation;
        $this->email = $abouts->email;
        $this->about_content = $abouts->about_content;
        $this->whatsapp = $abouts->whatsapp;
        $this->facebook = $abouts->facebook;
        $this->linkedin = $abouts->linkedin;
        $this->twitter = $abouts->twitter;
        $this->resume_link = $abouts->resume_link;
        $this->location = $abouts->location;
        $this->logo_url = $abouts->getFirstMediaUrl('logo');
        $this->about_image_url = $abouts->getFirstMediaUrl('about_image');
    }

    public function render() {
        return view('livewire.abouts-update');
    }

    public function update() {
        $this->validate();

        $about = About::findOrFail(1);

        $about->update($this->except('abouts', 'logo', 'about_image', 'logo_url', 'about_image_url'));

        if ($this->logo) {
            $this->upload_service->livewireUploadImage($about, $this->logo, 'logo');

            $this->logo = null;
            $this->logo_url = About::findOrFail(1)->getFirstMediaUrl('logo');
        }

        if ($this->about_image) {
            $this->upload_service->livewireUploadImage($about, $this->about_image, 'about_image');

            $this->about_image = null;
            $this->about_image_url = About::findOrFail(1)->getFirstMediaUrl('about_image');
        }

        $this->dispatch('abouts-updated');
    }
}
