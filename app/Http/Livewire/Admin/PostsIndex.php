<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)
                        ->where('name', 'LIKE', '&' . $this->search . '%') //ARREGLAR ESTO QUE NO ME MUESTRA RESULTADOS AL BUSCAR EN LA BARRA DE BUSCADOR
                        ->latest('id')
                        ->paginate(10);
        
        return view('livewire.admin.posts-index', compact('posts'));
    }
}
