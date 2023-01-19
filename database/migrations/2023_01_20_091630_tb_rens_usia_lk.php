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
        \DB::statement("CREATE VIEW `tb_rens_usia_lk` AS
        SELECT
        (CASE
            WHEN (`dummy_table`.`usia` BETWEEN 0 AND 4) THEN '0 Sampai 4'
            WHEN (`dummy_table`.`usia` BETWEEN 5 AND 12) THEN '6 Sampai 12'
            WHEN (`dummy_table`.`usia` BETWEEN 13 AND 15) THEN '13 Sampai 15'
            WHEN (`dummy_table`.`usia` BETWEEN 16 AND 18) THEN '16 Sampai 18'
            WHEN (`dummy_table`.`usia` BETWEEN 19 AND 24) THEN '19 Sampai 24'
            WHEN (`dummy_table`.`usia` BETWEEN 25 AND 29) THEN '26 Sampai 29'
            WHEN (`dummy_table`.`usia` BETWEEN 30 AND 34) THEN '30 Sampai 34'
            WHEN (`dummy_table`.`usia` BETWEEN 35 AND 40) THEN '35 Sampai 39'
            WHEN (`dummy_table`.`usia` BETWEEN 40 AND 44) THEN '40 Sampai 44'
            WHEN (`dummy_table`.`usia` BETWEEN 45 AND 49) THEN '45 Sampai 49'
            WHEN (`dummy_table`.`usia` BETWEEN 50 AND 54) THEN '50 Sampai 54'
            WHEN (`dummy_table`.`usia` BETWEEN 55 AND 59) THEN '55 Sampai 59'
            WHEN (`dummy_table`.`usia` BETWEEN 60 AND 64) THEN '60 Sampai 64'
            WHEN (`dummy_table`.`usia` BETWEEN 65 AND 69) THEN '65 Sampai 69'
            WHEN (`dummy_table`.`usia` BETWEEN 70 AND 74) THEN '70 Sampai 74'
            WHEN (`dummy_table`.`usia` >= 75) THEN '75 keatas'
            WHEN (`dummy_table`.`usia` IS NULL) THEN '(NULL)'
        END) AS `range_usia`,
        COUNT(`dummy_table`.`usia`) AS `jumlah_laki_laki`
        FROM (SELECT
                `tb_penduduk`.`id` AS `id`,
                `tb_penduduk`.`nik` AS `nik`,
                `tb_penduduk`.`nama` AS `nama`,
                `tb_penduduk`.`kelamin` AS `kelamin`,
                `tb_penduduk`.`tgl_lahir` AS `tgl_lahir`,
                TIMESTAMPDIFF(YEAR, `tb_penduduk`.`tgl_lahir`, CURDATE()) AS `usia`
        FROM
            `tb_penduduk`) `dummy_table`
    WHERE
        (`dummy_table`.`kelamin` = 'Laki-Laki')
    GROUP BY `range_usia`
    ORDER BY `range_usia`");
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

    private function dropView(): string
    {
        return <<<'SQL'
        DROP VIEW IF EXISTS `tb_rens_usia_lk`;
        SQL;
    }
};
