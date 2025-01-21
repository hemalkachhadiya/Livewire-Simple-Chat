<div class="container mt-4">

    <h2 class="text-center text-success">Update Post</h2>
    <div class="card">
        <div class="card-header text-center">
            {{-- this is alpine syntax --}}
            {{-- <div x-data="{ count : 0}">
                <button x-on:click="count--">-</button>
                <span x-text="count"></span>

                <button x-on:click="count++">+</button>
            </div> --}}
           Update Form
        </div>
        <div class="card-body">

            {{-- in alpine call method like this: x-on:submit.prevent="$wire.save()" --}}
            <form wire:submit="Update" >
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" wire:model="title" class="form-control" >
                    {{-- alpine --}}
                    <small>Character : <span x-text="$wire.title.length"></span></small>
                    @error('title')
                        <div class="text-danger"> {{  $message  }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea id="content" wire:model="content" class="form-control" > </textarea>
                    {{-- alpine --}}
                    <small>Character : <span x-text="$wire.content.length"></span></small>
                    @error('content')
                        <div class="text-danger"> {{  $message  }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">File Upload : </label>
                    <input type="file" wire:model='images' name="" id="" class="form-control">
                    @error('images')
                        <div class="text-danger"> {{  $message  }} </div>
                    @enderror


                </div>
                <div class="img-preview d-flex justify-content-center">
                    @if($images)
                        {{-- @foreach($images as $image) --}}
                        <img src="{{ $images->temporaryUrl() }}" alt="" class="img-thumbnail" height="500px" width="400px">
                        {{-- @endforeach --}}
                    @endif
                </div>


                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
