<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->nullable();
            $table->string('route_name')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->boolean('visible')->default(false);
            $table->foreignId('parent_id')->nullable()->constrained('menus');
            $table->foreignId('menu_category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('menus');
        Schema::enableForeignKeyConstraints();
    }
};
