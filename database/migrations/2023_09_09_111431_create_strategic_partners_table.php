<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategic_partners', function (Blueprint $table) {
            $table->id();
            $table->string('strategic_partners_name')->nullable();
            $table->string('strategic_partners_logo')->nullable();
            $table->string('strategic_partner_categroy')->nullable();
            $table->string('strategic_partner_categroy_slug')->nullable();
            $table->longText('strategic_partners_about')->nullable();
            $table->string('strategic_partners_addedby')->nullable();
            $table->integer('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strategic_partners');
    }
}
