<?php

namespace Rayblair\Remora;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class RemoraServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Use Cloud by default
        $disk = 's3';

        // If sandbox, reference our local storage
        if (config('app.env') == 'sandbox') {
            $disk = 'public';
        }

        // If our developer doesn't have s3, use local
        if ((config('app.env') == 'local') && (config('filesystems.disks.s3.secret') == null)) {
            $disk = 'public';
        }
        
        // Bind our Filesystem to this Storage
        $this->app
            ->bind(Filesystem::class, function ($app) use ($disk) {
                return $app['filesystem']->disk($disk);
            });

        // Extend our Filesystem with our Filesystem Decorator
        $this->app
            ->extend(Filesystem::class, function ($service, $app) use ($disk) {
                return new ExtendFilesystem($service, $disk);
            });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
