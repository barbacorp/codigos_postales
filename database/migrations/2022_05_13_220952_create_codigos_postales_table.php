<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigosPostalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos_postales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('d_codigo', 5)->index();
            $table->string('d_asenta', 57)->charset('utf8');
            $table->string('d_tipo_asenta', 21)->charset('utf8');
            $table->string('D_mnpio', 49)->charset('utf8');
            $table->string('d_estado', 31)->charset('utf8');
            $table->string('d_ciudad', 49)->nullable()->charset('utf8');
            $table->char('d_CP', 5);
            $table->char('c_estado', 2);
            $table->char('c_oficina', 5);
            $table->char('c_CP', 1)->nullable();
            $table->char('c_tipo_asenta', 2);
            $table->char('c_mnpio', 3);
            $table->char('id_asenta_cpcons', 4);
            $table->char('d_zona', 10)->charset('utf8');
            $table->char('c_cve_ciudad', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigos_postales');
    }
}
