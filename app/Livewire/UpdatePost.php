<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UpdatePost extends Component
{
     use WithFileUploads;
     public $title;
     public $content;
     public $postId;

     public $images;

     public function mount($postId)
     {
         $post = Post::findOrFail($postId);
         $this->postId = $post->id;
         $this->title = $post->title;
         $this->content = $post->content;
        //  $this->images = $post->images;
     }

     public function Update(){
        $post = Post::findOrFail($this->postId);

            if($this->images){
                if(Storage::exists('public/' . $post->image)){
                    Storage::delete('public/' . $post->image);
                }
            $extension = $this->images->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension;
            $imagePath = $this->images->storeAs('uploads', $fileName, 'public');
            }

        $post = Post::findOrFail($this->postId);
        $post->title = $this->title;
        $post->content = $this->content;
        $post->image = $imagePath;

        $post->save();

        $this->redirect('/show_post');
        session()->flash('message', 'Post updated successfully.');
    }
    public function render()
    {
        return view('livewire.update-post');
    }
}
