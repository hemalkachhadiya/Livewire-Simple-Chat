<div class="container mt-4">
    <div class="form-group">
        <label for="password" class="font-weight-bold">Password:</label>
        <input type="text" wire:model.live="password" id="password" class="form-control" placeholder="Enter your password">

        @if($errors)
            <ul class="mt-2 text-danger">
                @foreach($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
