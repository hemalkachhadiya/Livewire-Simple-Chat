<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{
     use WithFileUploads;
    #[Rule('required',message:"title must be required")]
    #[Rule('min:5',message:"title must be at least 5 characters long")]
    public $title;

    #[Rule('required',message:"Content must be required")]
    public $content;

    #[Rule('required',message:"Images must be Required")]
    public $images;

    public function resetForm(){
        $this->title = '';
        $this->content = '';
        $this->images = null;
    }

    public function save(){
        $this->validate();

            // $imagePath = $this->images->store('uploads', 'public');

            $extension = $this->images->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension;
            $path = $this->images->storeAs('uploads', $fileName, 'public');
            // dd($path);
        $post = Post::create([
                'title' =>  $this->title,
                'content' => $this->content,
                'image' => $path
        ]);
        session()->flash('message', 'Post Created Successfully');

        if($post){
            $this->resetForm();
            $this->redirect('/show_post', navigate:true);
        }

    }

    public function edit($postId)
    {
        dd('djkljdfkl');
        $post = Post::find($postId);
        if ($post) {
            $this->title = $post->title;
            $this->content = $post->content;
            $this->images = json_decode($post->image);
            $this->postId = $postId; // Assign the postId to the public property

            $this->redirect('/create_post', navigate:true); // Redirect to the post creation/edit page
        }
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
