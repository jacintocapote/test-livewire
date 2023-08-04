<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class CarsTable extends DataTableComponent
{
    protected $model = Car::class;
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
            Column::make('Brand', 'brand')
                ->sortable(),
            Column::make('Model', 'model')
                ->sortable(),
            LinkColumn::make('Action')
                ->title(fn($row) => 'View')
                ->location(fn($row) => route('cars.show', $row)),
        ];
    }

}
