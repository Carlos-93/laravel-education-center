<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Enumerable;
use RamonRietdijk\LivewireTables\Actions\Action;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UsersTable extends LivewireTable
{
    protected string $model = User::class;

    protected function columns(): array
    {
        return [
            Column::make('Name', 'name')->searchable()->sortable(),
            Column::make('Role', 'role')->searchable()->sortable(),
            Column::make('Email', 'email')->searchable()->sortable(),
            // Column::make('Last Connection', 'last_connection')->searchable()->sortable(),
            // DateColumn::make(__('Created At'), 'created_at')->searchable()->sortable(),
            // Column::make('Courses', 'courses')->searchable()->sortable(),
            
            // ViewColumn::make('Actions', 'livewire.table'),
            Column::make(__('Actions'), function (Model $model): string {
                return "<button class='' onclick=\"Livewire.dispatch('openModal', {component: 'update-user', arguments: {'users': ".$model->getKey()."}})\">Edit</button>
                    <button class='' onclick=\"Livewire.dispatch('openModal', {component: 'delete-user', arguments: {'users': ".$model->getKey()."}})\">Delete</button>";
            })->clickable(false)
              ->asHtml(),
        ];
    }

    protected function actions(): array
    {
        return [
            Action::make(__('Delete'), 'delete', function (Enumerable $models): void {
                $userIds = $models->pluck('id')->toArray();
                $this->dispatch('openModal', component: 'delete-user', arguments: ['users' => $userIds]);
            }),            
        ];
    }
}