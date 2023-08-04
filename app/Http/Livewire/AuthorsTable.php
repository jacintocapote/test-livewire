<?php

namespace App\Http\Livewire;

use App\Models\Author;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class AuthorsTable extends DataTableComponent
{
    protected $model = Author::class;
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
            Column::make('Name', 'name')
                ->sortable(),
            Column::make('Age', 'age')
                ->sortable(),
            LinkColumn::make('Action')
                ->title(fn($row) => 'View')
                ->location(fn($row) => route('authors.show', $row)),
        ];
    }

}
