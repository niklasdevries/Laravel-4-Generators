<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the generators are stored...
    |--------------------------------------------------------------------------
    |
    */
    'model_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/model.txt'),

    'scaffold_model_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/model.txt'),

    'controller_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/controller.txt'),

    'scaffold_controller_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/controller.txt'),

	'scaffold_view_index_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/view_index.txt'),

	'scaffold_view_show_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/view_show.txt'),

	'scaffold_view_create_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/view_create.txt'),

	'scaffold_view_edit_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/view_edit.txt'),

	'scaffold_view_form_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/scaffolding/view_form.txt'),

    'migration_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/migration.txt'),

    'seed_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/seed.txt'),

    'view_template_path' => base_path('vendor/way/generators/src/Way/Generators/templates/view.txt'),


    /*
    |--------------------------------------------------------------------------
    | Where the generated files will be saved...
    |--------------------------------------------------------------------------
    |
    */
    'model_target_path'   => app_path('models'),

    'controller_target_path'   => app_path('controllers'),

    'migration_target_path'   => app_path('database/migrations'),

    'seed_target_path'   => app_path('database/seeds'),

    'view_target_path'   => app_path('views')

];
