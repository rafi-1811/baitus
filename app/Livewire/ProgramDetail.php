<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Program;
use Livewire\Component;

class ProgramDetail extends Component
{
    use WithPagination;

    public Program $program;

    public function mount($slug)
    {
        $this->program = Program::with('berita')->where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $berita = $this->program->berita()->paginate(10);

        return view('livewire.pages.program-detail', compact('berita'))->layout('layout.layout', [
            'titleBread' => $this->program->kategori_program,
            'subTitleBread' => 'Home',
        ])->title("{$this->program->kategori_program} - Yayasan Baitus Sa'adah Amanah");
    }
}
