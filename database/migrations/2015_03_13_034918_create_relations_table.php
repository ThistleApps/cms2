<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('relations__relations', function (Blueprint $table)
    {
      $table->increments('id');

      $table->integer('lead_source_id')->unsigned()->nullable();
      $table->integer('relationtype_id')->unsigned()->nullable();

      $table->string('name');
      $table->string('slug');

      $table->integer('slaplan_id')->unsigned()->nullable();
      $table->timestamp('slaexpirytime');

      $table->integer('adder_id')->unsigned()->nullable();
      $table->integer('modifier_id')->unsigned()->nullable();

      $table->softDeletes();
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
    Schema::drop('accounts');
  }
}
