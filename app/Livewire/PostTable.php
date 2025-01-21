<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Livewire;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
final class PostTable extends PowerGridComponent
{
    public string $tableName = 'post-table-eagnej-table';

    public function header(): array
    {
        return [
            Button::add('bulk-delete')
            ->slot('Bulk delete (<span x-text="window.pgBulkActions?.count(\'' . $this->tableName . '\') || 0"></span>)')
            ->dispatch('bulkDelete.' . $this->tableName, []),

        ];
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),

            PowerGrid::footer()
                ->showPerPage(8)
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Post::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')

            ->add('title')
            ->add('content')
            ->add('image', function ($post) {
                return '<img src="http://localhost/Jayesh/LiveWire_2/public/storage/' . $post->image . '" alt="Image" style="max-width: 100px; max-height: 100px;">';
            })
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Image', 'image'),
            Column::make('Id', 'id'),
            Column::make('Title', 'title')
                ->sortable()
                ->searchable(),

            Column::make('Content', 'content')
                ->sortable()
                ->searchable(),

            // Column::make('Image', 'image')
            //     ->sortable()
            //     ->searchable(),

            // Column::make('Created at', 'created_at_formatted', 'created_at')
            //     ->sortable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),



            Column::action('Action')

        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    // public function actions(Post $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->tag('Edit')
    //             ->slot("Edit <strong>{e($row->id)}</strong>")
    //             ->class('bg-indigo-500 text-white')
    //             ->dispatch('clickToEdit', ['dishId' => $row->id]),

    //             // Button::add('create-Post')
    //             // ->slot("&#9889; Edit"),


    //     ];
    // }


    // public function actionRules($row): array
    // {
    //    return [
    //         // Hide button edit for ID 1
    //         Rule::button('edit')
    //             ->when(fn($row) => $row->id === 1)
    //             ->hide(),
    //     ];
    // }

    public function deletePost($id)
    {
        Post::find($id)->delete();
        $this->emit('refreshTable'); // Refresh table data after deletion
    }

    #[On('bulkDelete.{tableName}')]
    public function bulkDelete(): void
    {
        $this->js('alert(window.pgBulkActions.get(\'' . $this->tableName . '\'))');
    }

}
