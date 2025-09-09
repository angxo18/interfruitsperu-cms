<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Route;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'route_name',
        'order',
        'visible',
        'parent_id',
        'menu_category_id',
    ];

    /**
     * Relación con el menú padre.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    /**
     * Relación con los hijos del menú.
     */
    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    /**
     * Relación con las categorias del menú.
     */
    public function menuCategory(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class);
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

    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn() => ($this->route_name && Route::has($this->route_name))
                ? route($this->route_name)
                : '#'
        );
    }

    protected function isActive(): Attribute
    {
        return Attribute::get(
            fn() => ($this->route_name && request()->routeIs($this->route_name))
                || $this->children->contains(fn($child) => $child->is_active)
        );
    }
}
