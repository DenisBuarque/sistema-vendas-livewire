<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoriaController extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name, $image, $search;
    public $pagination = 2;

    public function render()
    {
        if(strlen($this->search) > 0)
            $categories = Category::where('name', 'like', '%' . $this->search . '%')->get();
        else   
            $categories = Category::orderBy('id','DESC')->paginate($this->pagination);

        return view('livewire.category',['categories' => $categories]);
    }
}
