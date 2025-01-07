<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable()->after('name');
            $table->string('patronymic')->nullable()->after('surname');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->unsignedTinyInteger('gender')->nullable()->after('patronymic');
            $table->string('address')->nullable()->after('gender');
            $table->integer('age')->nullable()->after('gender');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('patronymic');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('age');
            $table->dropColumn('email');
            $table->dropColumn('password');
        });
    }
};
