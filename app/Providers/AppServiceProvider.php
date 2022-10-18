<?php

namespace App\Providers;

use App\View\Components\Alert;
use App\View\Components\Breadcrumb;
use App\View\Components\Form;
use App\View\Components\Page;
use App\View\Components\Paginate;
use App\View\Components\Search;
use App\View\Components\Table;
use App\View\Components\TableSite;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Contracts\UserRepositoryInterface', 'App\Repositories\Eloquent\UserRepository');
        $this->app->bind('App\Repositories\Contracts\PermissionRepositoryInterface', 'App\Repositories\Eloquent\PermissionRepository');
        $this->app->bind('App\Repositories\Contracts\RoleRepositoryInterface', 'App\Repositories\Eloquent\RoleRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('alert', Alert::class);
        Blade::component('breadcrumb', Breadcrumb::class);
        Blade::component('search', Search::class);
        Blade::component('table', Table::class);
        Blade::component('table_site', TableSite::class);
        Blade::component('paginate', Paginate::class);
        Blade::component('page', Page::class);
        Blade::component('form', Form::class);

        Paginator::defaultView('\vendor\pagination\tailwind');
        Paginator::defaultSimpleView('\vendor\pagination\simple-tailwind');

        // Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();
    }
}
