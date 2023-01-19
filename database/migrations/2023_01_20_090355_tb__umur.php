<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->dropView());
    }

    // fungsi untuk Hapus tabel viue  ke mysql
    private function dropView(): string
    {
        return <<<'SQL'
        DROP VIEW IF EXISTS `tb_umur`;
        SQL;
    }

    // fungsi untuk membuat tabel viue  ke mysql
    private function createView(): string
    {
        return <<<'SQL'
        CREATE VIEW `tb_umur` AS
        SELECT id,kk,nik, nama ,tgl_lahir,kelamin,alamat ,TIMESTAMPDIFF(YEAR,tb_penduduk.tgl_lahir,CURDATE()) AS usia FROM db_sareng.tb_penduduk
        SQL;
    }
};
