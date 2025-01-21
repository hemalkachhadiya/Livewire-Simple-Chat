<div class="container mt-4 text-center">
    <div class="d-flex justify-content-center align-items-center">
        <button wire:mouseenter='decrement' class="btn btn-danger btn-lg px-4 py-2 mx-2" style="font-size: 24px;">
            -
        </button>

        <span class="h3 mx-3">Counter = {{ $count }}</span>

        <button wire:click.window='increment(5)' class="btn btn-success btn-lg px-4 py-2 mx-2" style="font-size: 24px;">
            +
        </button>
    </div>
</div>
