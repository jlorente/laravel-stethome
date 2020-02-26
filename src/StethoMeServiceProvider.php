<?php

/**
 * Part of the StethoMe Laravel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    StethoMe Laravel
 * @version    1.0.0
 * @author     Jose Lorente
 * @license    BSD License (3-clause)
 * @copyright  (c) 2019, Jose Lorente
 */

namespace Jlorente\Laravel\StethoMe;

use Jlorente\StethoMe\StethoMe;
use Illuminate\Support\ServiceProvider;

/**
 * Class StethoMeServiceProvider.
 * 
 * @author Jose Lorente <jose.lorente.martin@gmail.com>
 */
class StethoMeServiceProvider extends ServiceProvider
{

    /**
     * @inheritdoc
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/stethome.php' => config_path('stethome.php'),
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->registerStethoMe();
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [
            'stethome'
            , StethoMe::class
        ];
    }

    /**
     * Register the StethoMe API class.
     *
     * @return void
     */
    protected function registerStethoMe()
    {
        $this->app->singleton('stethome', function ($app) {
            $config = $app['config']->get('stethome');
            return new StethoMe(
                    isset($config['vendor_token']) ? $config['vendor_token'] : null
                    , isset($config['request_retries']) ? $config['request_retries'] : null
            );
        });

        $this->app->alias('stethome', StethoMe::class);
    }

}
