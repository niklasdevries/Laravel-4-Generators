<?php namespace Way\Generators\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Config;

class ScaffoldGeneratorCommand extends ResourceGeneratorCommand {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'generate:scaffold';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Scaffold a new resource (with boilerplate)';

	/**
	 * Call model generator if user confirms
	 *
	 * @param $resource
	 */
	protected function callModel($resource)
	{
		$modelName = $this->getModelName($resource);

		if ($this->confirm("Do you want me to create a $modelName model? [yes|no]"))
		{
			$this->call('generate:model', [
				'modelName' => $modelName,
				'--templatePath' => Config::get("generators::config.scaffold_model_template_path")
			]);
		}
	}

	/**
	 * Call controller generator if user confirms
	 *
	 * @param $resource
	 */
	protected function callController($resource)
	{
		$controllerName = $this->getControllerName($resource);

		if ($this->confirm("Do you want me to create a $controllerName controller? [yes|no]"))
		{
			$this->call('generate:controller', [
				'controllerName' => $controllerName,
				'--templatePath' => Config::get("generators::config.scaffold_controller_template_path")
			]);
		}
	}

	/**
	 * Call view generator if user confirms
	 *
	 * @param $resource
	 */
	protected function callView($resource)
	{
		$collection = $this->getTableName($resource);
		$modelName = $this->getModelName($resource);
		$controllerName = $this->getControllerName($resource);

		if ($this->confirm("Do you want me to create views for this $modelName resource? [yes|no]"))
		{
			foreach(['index', 'show', 'create', 'edit', 'form'] as $viewName)
			{
				$this->call('generate:view', [
					'viewName'          => "{$collection}.{$viewName}",
					'--templatePath'    => Config::get("generators::config.scaffold_view_" . $viewName . "_template_path"),
					'controllerName'    => $controllerName
				]);
			}
		}
	}


	/**
	 * Call migration generator if user confirms
	 *
	 * @param $resource
	 */
	protected function callMigration($resource)
	{
		$migrationName = $this->getMigrationName($resource);

		$fields = 'name:string';
		if($this->option('fields') !== null){
			$fields = $this->option('fields');
		}

		if ($this->confirm("Do you want me to create a '$migrationName' migration and schema for this resource? [yes|no]"))
		{
			$this->call('generate:migration', [
				'migrationName' => $migrationName,
				'--fields' => $fields
			]);
		}
	}
}
