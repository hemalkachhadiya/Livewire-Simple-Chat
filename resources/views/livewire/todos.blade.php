<div class="container mt-4">
    <form wire:submit="add" class="mb-4">
        <div class="form-group">
            <label for="todo" class="font-weight-bold">Add Todo</label>
            <input type="text" id="todo" wire:model='todo' class="form-control" placeholder="Enter your task">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Add Todo</button>
    </form>

    <ul class="list-group">
        @php $no = 1; @endphp
        @foreach ($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>{{ $no }} ==> {{ $todo }}</span>
            <span class="badge badge-primary badge-pill">{{ $no }}</span>
        </li>
        @php   $no++  @endphp
        @endforeach
    </ul>
</div>
