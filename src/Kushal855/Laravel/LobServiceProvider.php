<?php namespace Kushal855\Laravel;

use Illuminate\Support\ServiceProvider;

use Lob\Lob;

use Blade;

class LobServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		$this->publishes([
		    __DIR__.'/../../config/lob.php' => config_path('kushal855.lob.php'),
		]);

		Lob_Configuration::apiKey(
			$this->app['config']->get('kushal855.lob.api_key')
		);
		
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

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
