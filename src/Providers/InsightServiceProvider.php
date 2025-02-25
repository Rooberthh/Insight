<?php

namespace Rooberthh\Insight\Providers;

use Illuminate\Support\ServiceProvider;

class InsightServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        //
    }

    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../../../config/insight.php' => config_path('insight.php'),
                    __DIR__ . '/../../../resources/views' => resource_path('views/vendor/insight'),
                ],
                'insight-config',
            );
        }
    }
}
