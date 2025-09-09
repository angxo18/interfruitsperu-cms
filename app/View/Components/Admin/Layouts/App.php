<?php

namespace App\View\Components\Admin\Layouts;

use App\Models\Menu;
use App\Models\MenuCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public $title;
    public $menuCategories;
    public $menus;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title)
    {
        $this->title = $title . ' - ' . config('app.name');
        $this->menuCategories = MenuCategory::visible()
            ->orderBy('order')
            ->with(['menus' => function ($q) {
                $q->visible()
                    ->orderBy('order')
                    ->with(['children' => function ($q) {
                        $q->visible()
                            ->orderBy('order');
                    }]);
            }])
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.layouts.app');
    }
}
