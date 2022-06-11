<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('comments');
            $table->enum('status', [1, 0])->default(1);
            $table->integer('created_by')->default(1);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section');
    }
}
