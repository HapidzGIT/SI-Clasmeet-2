<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Pastikan kolom 'usertype' belum ada sebelum menambahkannya
        if (!Schema::hasColumn('users', 'usertype')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('usertype')->default('user');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Hapus kolom 'usertype' jika ada
        if (Schema::hasColumn('users', 'usertype')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('usertype');
            });
        }
    }
};