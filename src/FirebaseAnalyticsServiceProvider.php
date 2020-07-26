<?php

namespace RenokiCo\FirebaseAnalytics;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FirebaseAnalyticsServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('initializeFirebaseAnalytics', [BladeDirectives::class, 'initializeFirebaseAnalytics']);
        Blade::directive('firebaseAnalyticsEvent', [BladeDirectives::class, 'firebaseAnalyticsEvent']);
        Blade::directive('firebaseAnalyticsUserProperties', [BladeDirectives::class, 'firebaseAnalyticsUserProperties']);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
