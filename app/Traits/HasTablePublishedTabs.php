<?php

namespace App\Traits;

use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

trait HasTablePublishedTabs {


    public function mount(): void
    {
        parent::mount();
        $this->activeTab = 'published';
    }

    /** Using tabs to filter the records
     * doc: https://filamentphp.com/docs/3.x/panels/resources/listing-records
     * dica tuto: https://www.youtube.com/watch?v=pTbZi_csSb8&ab_channel=FilamentBrasil
     * add in listUser 'use HasTablePublishedTabs;'
    */
    public function getTabs(): array
    {

        $model = static::getModel()::query();
        $total = $model->count();
        $published = $model->whereStatus(true)->count();
        $unpublished = $total - $published;
        return [
            'all' => Tab::make()
            ->label('Todos')
            ->icon('heroicon-o-bars-4')
            ->badge($total),
            'active' => Tab::make()
                ->label('Ativos')
                ->icon('heroicon-o-check-circle')
                ->badge($published)
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', true)),
            'inactive' => Tab::make()
                ->label('Inativos')
                ->icon('heroicon-o-x-circle')
                ->badge($unpublished)
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', false)),
        ];
    }
}

