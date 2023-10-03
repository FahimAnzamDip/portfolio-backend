<?php

namespace App\Livewire;

use App\Models\About;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AboutsUpdate extends Component
{
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
    }

    public function render() {
        return view('livewire.abouts-update');
    }

    public function update() {
        $this->validate();

        About::findOrFail(1)->update($this->all());

        session()->flash('success', 'About Info Updated!');

        $this->dispatch('abouts-updated');
    }
}
