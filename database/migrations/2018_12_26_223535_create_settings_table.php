<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('timezone');
            $table->dateTime('last_updated');

        });

        $obj = new \App\Modules\Setting\Models\PullSetting();
        $obj->name = 'Pull Setting';
        $obj->id = 1;
        $obj->last_updated = '2000-01-01 00:00:00';
        $obj->timezone = 'Australia/Sydney';
        $obj->description = 'The last updated date that agent site has pulled the latest meta from admin server.';
        $obj->save();

        $obj = new \App\Modules\Setting\Models\PushSetting();
        $obj->id = 2;
        $obj->name = 'Push Setting';
        $obj->last_updated = '2000-01-01 00:00:00';
        $obj->timezone = 'Australia/Sydney';
        $obj->description = 'The last updated date that agent site has pushed the latest draft meta to admin server.';
        $obj->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
