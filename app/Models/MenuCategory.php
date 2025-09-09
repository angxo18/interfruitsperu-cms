<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'order',
        'visible',
    ];

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class)
            ->whereNull('parent_id');
    }

    #[Scope]
    protected function visible(Builder $query): void
    {
        $query->where('visible', true);
    }

    #[Scope]
    protected function hidden(Builder $query): void
    {
        $query->where('visible', false);
    }
}
