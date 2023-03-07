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
        Schema::create('master_pegawai', function (Blueprint $table) {
            $table->string('id_pegawai')->primary();
            $table->string('nama_pegawai');
            $table->string('npwp_pegawai');
            $table->string('alamat_pegawai');
            $table->string('provinsi_pegawai');
            $table->string('kota_pegawai');
            $table->string('kecamatan_pegawai');
            $table->string('kelurahan_pegawai');
            $table->string('kodepos_pegawai');
            $table->string('notelp_pegawai');
            $table->string('fax_pegawai');
            $table->string('email_pegawai');
            $table->string('kontak_personal');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('master_supplier', function (Blueprint $table) {
            $table->string('id_supplier')->primary();
            $table->string('nama_supplier');
            $table->string('npwp_supplier');
            $table->string('alamat_supplier');
            $table->string('provinsi_supplier');
            $table->string('kota_supplier');
            $table->string('kecamatan_supplier');
            $table->string('kelurahan_supplier');
            $table->string('kodepos_supplier');
            $table->string('notelp_supplier');
            $table->string('email_supplier');
            $table->string('item');
            $table->string('nama_bank');
            $table->string('no_rekening');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('master_customer', function (Blueprint $table) {
            $table->string('id_customer')->primary();
            $table->string('nama_customer');
            $table->string('npwp_customer');
            $table->string('alamat_customer');
            $table->string('provinsi_customer');
            $table->string('kota_customer');
            $table->string('kecamatan_customer');
            $table->string('kelurahan_customer');
            $table->string('kodepos_customer');
            $table->string('notelp_customer');
            $table->string('nofax_customer');
            $table->string('email_customer');
            $table->string('batasan_hutang');
            $table->string('hutang_sekarang');
            $table->string('hutang_tersedia');
            $table->string('no_rekening');
            $table->string('metode_pembayaran');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('master_box', function (Blueprint $table) {
            $table->string('id_box')->primary();
            $table->string('tipe_box');
            $table->string('nama_box');
            $table->string('panjang_box');
            $table->string('lebar_box');
            $table->string('tinggi_box');
            $table->string('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('master_vendor', function (Blueprint $table) {
            $table->string('id_vendor')->primary();
            $table->string('nama_vendor');
            $table->string('jenis_item');
            $table->string('kategori_vendor');
            $table->string('alamat_vendor');
            $table->string('kota_vendor');
            $table->string('kecamatan_vendor');
            $table->string('kelurahan_vendor');
            $table->string('email_vendor');
            $table->string('nama_bank');
            $table->string('no_akun');
            $table->string('no_rekening');
            $table->string('batasan_hutang');
            $table->string('hutang_sekarang');
            $table->string('hutang_tersedia');
            $table->string('sisa_hutang');
            $table->string('metode_pembayaran');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_pegawai');
        Schema::dropIfExists('master_supplier');
        Schema::dropIfExists('master_customer');
        Schema::dropIfExists('master_box');
        Schema::dropIfExists('master_vendor');
    }
};
