<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowPost extends Component
{
    use WithPagination, WithoutUrlPagination,WithFileUploads;

    public $postId;
    public $isedit = false;
    public $title;
    public $content;

    public $image;

    public $search;

    public function delete($id)
    {
        $post = Post::findOrFail($id)->delete();

    }

    public function edit($id)
    {
        $this->postId = $id;
        $post = Post::find($id);
        $this->title = $post->title;
        $this->content = $post->content;
        $this->isedit = true;

        return redirect()->route('update-post', ['postId' => $this->postId]);
    }

    public function render()
    {
        $query = Post::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('content', 'LIKE', '%' . $this->search . '%');
            });
        }

        $posts = $query->latest('created_at')->paginate(5);
        // dd($posts);



        return view('livewire.show-post', ['posts' => $posts]);
    }
}
