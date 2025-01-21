@php
use Illuminate\Support\Facades\Storage;
@endphp


@section('style')
<style>
    .heading {
        padding: 15px;
        border-radius: 12px;
        background-color: #007bff;
        box-shadow: 0px 4px 6px rgba(0, 123, 255, 0.2);
    }

    h2 {
        font-weight: 700;
        font-size: 1.5rem;
    }

    .pagination .page-link {
        font-size: 1rem;
        padding: 8px 16px;
        border-radius: 50px;
        transition: all 0.3s;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .table th {
        background-color: #f8f9fa;
        text-align: center;
        font-weight: bold;
    }

    .table td {
        text-align: center;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    .alert-success {
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .icon-button {
        cursor: pointer;
        font-size: 18px;
    }

    .icon-button:hover {
        transform: scale(1.1);
        transition: transform 0.2s;
    }

    .icon-trash {
        color: red;
    }

    .icon-download {
        color: #17a2b8;
    }

    .search {
        border: 2px solid #007bff;
        /* Blue border to highlight */
    }
</style>
@endsection

<div class="py-4">

     @if (session('message'))
    <div class="col-sm-12">
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
            class="alert alert-success">
            <span class="mr-2">😊</span>{{ session('message') }}
        </div>
    </div>
    @endif

    @if ($isedit == false)
    <div class="container">
        <div class="heading d-flex justify-content-center text-white mb-4 rounded">
            <h2>Show Post</h2>
        </div>

        <div class="table-responsive">
            <div class="d-flex justify-content-end mb-3">
                <input type="text" class="form-control w-25" placeholder="Search..." wire:model.live="search">
            </div>

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @if($posts->isEmpty())
                    <td></td>
                    <td>
                        <p class="text-center text-danger mt-4">Data not found</p>
                    </td>
                    <td></td>
                    <td></td>
                    @else
                    @foreach ($posts as $post)
                    <tr wire:key='{{ $post->id }}'>
                        <td>
                            @if($post->image)
                            <img src="http://localhost/Jayesh/LiveWire_2/public/storage/{{ $post->image }}" alt="Post Image" width="100">


                            @else
                            <span>No image available</span>
                            @endif
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ str($post->content)->limit(30) }}</td>
                        <td>
                            <i class="fa fa-trash icon-button icon-trash" wire:confirm='Are You Sure you Want to Delete this Item?' wire:click='delete({{ $post->id }})'></i>
                            &nbsp;
                            <i class="fa fa-pencil icon-button icon-pencil" wire:click="edit({{ $post->id }})"></i>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        {{ $posts->links() }}
    </div>
    @else

    @livewire('update-post')

    @endif

</div>

