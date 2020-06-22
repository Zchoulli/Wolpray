<?php


/**
   * @name:        table seeder
   * @author:      Zaid - Patrik - Henry
   * @description: insert datos in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tables')->insert(['id' =>1,'clubid' =>1,'num_table' =>1,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>2,'clubid' =>1,'num_table' =>2,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>3,'clubid' =>1,'num_table' =>3,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>4,'clubid' =>2,'num_table' =>1,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>5,'clubid' =>2,'num_table' =>2,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>6,'clubid' =>2,'num_table' =>3,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>7,'clubid' =>3,'num_table' =>1,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>8,'clubid' =>3,'num_table' =>2,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>9,'clubid' =>3,'num_table' =>3,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>10,'clubid' =>4,'num_table' =>1,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>11,'clubid' =>4,'num_table' =>2,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>12,'clubid' =>4,'num_table' =>3,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>13,'clubid' =>5,'num_table' =>1,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>14,'clubid' =>5,'num_table' =>2,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>15,'clubid' =>5,'num_table' =>3,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>16,'clubid' =>1,'num_table' =>4,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>17,'clubid' =>2,'num_table' =>4,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>18,'clubid' =>3,'num_table' =>4,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>19,'clubid' =>4,'num_table' =>4,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>20,'clubid' =>5,'num_table' =>4,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>21,'clubid' =>1,'num_table' =>5,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>22,'clubid' =>2,'num_table' =>5,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>23,'clubid' =>3,'num_table' =>5,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>24,'clubid' =>4,'num_table' =>5,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>25,'clubid' =>5,'num_table' =>5,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>26,'clubid' =>1,'num_table' =>6,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>27,'clubid' =>2,'num_table' =>6,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>28,'clubid' =>3,'num_table' =>6,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>29,'clubid' =>4,'num_table' =>6,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>30,'clubid' =>5,'num_table' =>6,'isVip' =>1,]);

        DB::table('tables')->insert(['id' =>31,'clubid' =>6,'num_table' =>1,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>32,'clubid' =>6,'num_table' =>2,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>33,'clubid' =>6,'num_table' =>3,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>34,'clubid' =>6,'num_table' =>4,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>35,'clubid' =>6,'num_table' =>5,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>36,'clubid' =>6,'num_table' =>6,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>37,'clubid' =>6,'num_table' =>7,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>38,'clubid' =>6,'num_table' =>8,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>39,'clubid' =>6,'num_table' =>9,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>40,'clubid' =>6,'num_table' =>10,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>41,'clubid' =>6,'num_table' =>11,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>42,'clubid' =>6,'num_table' =>12,'isVip' =>1,]);
        DB::table('tables')->insert(['id' =>43,'clubid' =>6,'num_table' =>13,'isVip' =>0,]);
        DB::table('tables')->insert(['id' =>44,'clubid' =>6,'num_table' =>14,'isVip' =>1,]);

    }
}
