<?php

use App\Models\User;
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
        Schema::create('mobile_legends', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->unique()->constrained('users');
            $table->string('nama_tim')->unique();
            $table->string('nama_ketua_tim');
            $table->string('no_hp', 20);
            $table->string('anggota1');
            $table->string('anggota2');
            $table->string('anggota3');
            $table->string('anggota4');
            $table->string('anggota5');
            $table->string('cadangan1')->nullable();
            $table->string('kartu_identitas');
            $table->string('bukti_pembayaran')->nullable();
            $table->string('status')->default('Belum Verifikasi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobile_legends');
    }
};
