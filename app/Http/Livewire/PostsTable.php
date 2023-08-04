<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class PostsTable extends DataTableComponent
{
    protected $model = Post::class;
    public bool $filtersVisibilityStatus = false;
    public bool $searchVisibilityStatus = false;
    protected bool $columnSelectStatus = false;
    public bool $perPageVisibilityStatus = false;

    protected $listeners = [
        'refreshDatatable' => '$refresh',
        'setSort' => 'setSortEvent',
        'clearSorts' => 'clearSortEvent',
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Slug', 'slug')
                ->sortable(),
            Column::make('Title', 'title')
                ->sortable(),
            LinkColumn::make('Action')
                ->title(fn($row) => 'View')
                ->location(fn($row) => route('posts.show', $row)),
        ];
    }
}
