<div class="container mt-4">

    <h1 class="text-center  text-success">Create Post</h1>
    <div class="card">

        <div class="card-body">

            {{-- in alpine call method like this: x-on:submit.prevent="$wire.save()" --}}
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" wire:model="title" class="form-control" >
                    {{-- " alpine "  text counting with Alpine live Count  --}}
                    {{-- <small>Character : <span x-text="$wire.title.length"></span></small> --}}
                    @error('title')
                        <div class="text-danger"> {{  $message  }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea id="content" wire:model="content" class="form-control" ></textarea>
                    {{-- alpine --}}
                    {{-- <small>Character : <span x-text="$wire.content.length"></span></small> --}}
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
                        <img src="{{ $images->temporaryUrl() }}" alt="" class="img-thumbnail" height="500px" width="400px">
                    @endif
                </div>


                <button type="submit" class="btn btn-outline-primary">Submit
                    {{-- if you want to loader , so add liek this --}}
                    {{-- <div wire:loading>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path fill="#FF156D" stroke="#FF156D" stroke-width="15" transform-origin="center" d="m148 84.7 13.8-8-10-17.3-13.8 8a50 50 0 0 0-27.4-15.9v-16h-20v16A50 50 0 0 0 63 67.4l-13.8-8-10 17.3 13.8 8a50 50 0 0 0 0 31.7l-13.8 8 10 17.3 13.8-8a50 50 0 0 0 27.5 15.9v16h20v-16a50 50 0 0 0 27.4-15.9l13.8 8 10-17.3-13.8-8a50 50 0 0 0 0-31.7Zm-47.5 50.8a35 35 0 1 1 0-70 35 35 0 0 1 0 70Z"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="0;120" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></path></svg>
                    </div> --}}
                </button>
            </form>
        </div>
    </div>
</div>
