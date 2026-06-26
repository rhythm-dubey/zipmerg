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
        /*
        |--------------------------------------------------------------------------
        | Academic Boards
        |--------------------------------------------------------------------------
        */
        Schema::create('academic_boards', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Institutions
        |--------------------------------------------------------------------------
        */
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Subject Categories
        |--------------------------------------------------------------------------
        */
        Schema::create('subject_categories', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Qualifications
        |--------------------------------------------------------------------------
        */
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('abbreviation')->nullable();
            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Subjects
        |--------------------------------------------------------------------------
        */
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('code')->nullable()->unique();
            $table->string('slug')->unique();

            $table->foreignId('subject_category_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Classes
        |--------------------------------------------------------------------------
        */
        Schema::create('classes', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('display_name')->nullable();
            $table->string('slug')->unique();

            $table->unsignedSmallInteger('level')->nullable()->index();

            $table->foreignId('academic_board_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Genders
        |--------------------------------------------------------------------------
        */
        Schema::create('genders', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('abbreviation', 10)->nullable();
            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Modes
        |--------------------------------------------------------------------------
        */
        Schema::create('modes', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('slug')->unique();

            $table->string('icon')->nullable();
            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |--------------------------------------------------------------------------
        | Experiences
        |--------------------------------------------------------------------------
        */
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->string('name')->index();
            $table->string('display_name')->nullable();
            $table->string('slug')->unique();

            $table->unsignedSmallInteger('min_years')->nullable();
            $table->unsignedSmallInteger('max_years')->nullable();

            $table->text('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('modes');
        Schema::dropIfExists('genders');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('qualifications');
        Schema::dropIfExists('subject_categories');
        Schema::dropIfExists('institutions');
        Schema::dropIfExists('academic_boards');
    }
};