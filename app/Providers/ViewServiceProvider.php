<?php

namespace App\Providers;

use App\View\Composers\FooterComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer([
            'frontend.home.index',
            'frontend.layouts.partials.footer.footer',
            'frontend.layouts.partials.footer.footer-alt'
        ],
            FooterComposer::class);
    }

    public function register()
    {
        //
    }
}
