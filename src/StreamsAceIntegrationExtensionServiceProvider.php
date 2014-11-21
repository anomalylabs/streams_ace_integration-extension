<?php namespace Anomaly\Streams\Addon\Extension\StreamsAceIntegration;

use Illuminate\Support\ServiceProvider;

/**
 * Class StreamsAceIntegrationExtensionServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\StreamsAceIntegration
 */
class StreamsAceIntegrationExtensionServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $target = assets_path('ace');

        if (config('app.debug') and !is_dir($target)) {

            app('files')->copy(__DIR__ . '/../resources/ace', $target);
        }
    }
}
 