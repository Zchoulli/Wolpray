<?php

/**
   * @name:        Reservation table seeder
   * @author:      Zaid - Patrik - Henry
   * @description: insert datos in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Reservation;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation')->insert(['id'=>1,'numbertab'=>4,'description'=>'desc1','userid'=>1,'clubid'=>1,'date'=>'2019-11-12']);
        DB::table('reservation')->insert(['id'=>2,'numbertab'=>5,'description'=>'desc2','userid'=>1,'clubid'=>1,'date'=>'2019-11-03']);
        DB::table('reservation')->insert(['id'=>3,'numbertab'=>5,'description'=>'desc3','userid'=>1,'clubid'=>2,'date'=>'2019-11-03']);
        DB::table('reservation')->insert(['id'=>4,'numbertab'=>5,'description'=>'desc4','userid'=>1,'clubid'=>2,'date'=>'2019-11-03']);
        DB::table('reservation')->insert(['id'=>5,'numbertab'=>4,'description'=>'desc5','userid'=>2,'clubid'=>2,'date'=>'2019-12-12']);
        DB::table('reservation')->insert(['id'=>6,'numbertab'=>5,'description'=>'desc6','userid'=>2,'clubid'=>1,'date'=>'2019-12-03']);
        DB::table('reservation')->insert(['id'=>7,'numbertab'=>3,'description'=>'desc7','userid'=>2,'clubid'=>4,'date'=>'2019-12-04']);
        DB::table('reservation')->insert(['id'=>8,'numbertab'=>2,'description'=>'desc8','userid'=>2,'clubid'=>4,'date'=>'2019-12-12']);
        DB::table('reservation')->insert(['id'=>9,'numbertab'=>1,'description'=>'desc9','userid'=>2,'clubid'=>5,'date'=>'2020-02-04']);
        DB::table('reservation')->insert(['id'=>10,'numbertab'=>5,'description'=>'desc10','userid'=>3,'clubid'=>5,'date'=>'2020-02-12']);
        DB::table('reservation')->insert(['id'=>11,'numbertab'=>3,'description'=>'desc6','userid'=>3,'clubid'=>3,'date'=>'2019-12-03']);
        DB::table('reservation')->insert(['id'=>12,'numbertab'=>2,'description'=>'desc7','userid'=>3,'clubid'=>4,'date'=>'2019-12-04']);
        DB::table('reservation')->insert(['id'=>13,'numbertab'=>1,'description'=>'desc8','userid'=>2,'clubid'=>4,'date'=>'2019-12-12']);
        DB::table('reservation')->insert(['id'=>14,'numbertab'=>4,'description'=>'desc9','userid'=>3,'clubid'=>6,'date'=>'2020-02-04']);
        DB::table('reservation')->insert(['id'=>15,'numbertab'=>5,'description'=>'desc10','userid'=>2,'clubid'=>6,'date'=>'2020-02-12']);
    }
}
