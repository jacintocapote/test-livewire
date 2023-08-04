<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class LocationsTable extends DataTableComponent
{
    protected $model = Location::class;
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
        ];
    }
}
