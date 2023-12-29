<?php

namespace Jecharlt\LivewireBootstrapToaster;

use Illuminate\Support\Facades\Blade;
use Jecharlt\LivewireBootstrapToaster\Components\Toast;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jecharlt\LivewireBootstrapToaster\Commands\LivewireBootstrapToasterCommand;
use Livewire\Component;

class LivewireBootstrapToasterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-bootstrap-toaster')
            ->hasViews()
            ->hasViewComponents('livewire-bootstrap-toaster', Toast::class);
    }

    public function boot(): void
    {
        Component::macro('notify', function ($message, $title = '', $type = 'success') {
            $this->dispatch('notify', message: $message, title: $title, type: $type);
        });
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'livewire-bootstrap-toaster');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/livewire-bootstrap-toaster'),
        ], 'livewire-bootstrap-toaster-views');
    }
}
