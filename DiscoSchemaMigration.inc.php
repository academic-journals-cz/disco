<?php

/**
 * @file classes/migration/DiscoSchemaMigration.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DiscoSchemaMigration
 * @brief Describe database table structures.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

class DiscoSchemaMigration extends Migration {
        /**
         * Run the migrations.
         * @return void
         */
        public function up() {
			# disco
			Capsule::schema()->create('disco_plugin', function (Blueprint $table) {
				$table->bigInteger('disco_id')->autoIncrement();
				$table->bigInteger('context_id');
			});

			// disco_settings
			Capsule::schema()->create('disco_plugin_settings', function (Blueprint $table) {
				$table->bigInteger('disco_id');
				$table->string('locale', 14)->default('');
				$table->string('setting_name', 255);
				$table->longText('setting_value')->nullable();
				$table->string('setting_type', 6)->comment('(bool|int|float|string|object)');
				$table->index(['disco_id'], 'disco_plugin_settings_id');
				$table->unique(['disco_id', 'locale', 'setting_name'], 'disco_plugin_settings_f_l_s_pkey');
			});
        }
}
