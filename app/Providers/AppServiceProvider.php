<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Vercel環境でBladeキャッシュを書き込み可能な /tmp に逃がす
        if (config('app.env') === 'production') {
            $viewPath = '/tmp/storage/framework/views';
            if (!is_dir($viewPath)) {
                mkdir($viewPath, 0755, true);
            }
            config(['view.compiled' => $viewPath]);
        }
    }
}
