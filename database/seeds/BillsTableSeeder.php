<?php

/**
   * @name:        Bills table seeder
   * @author:      Zaid - Patrik - Henry
   * @description: insert datos in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Bills;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //capitolio
        DB::table('bills')->insert(['id' =>1,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>1000,'clubid'=>1,'userid'=>16]);
        DB::table('bills')->insert(['id' =>2,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>1500,'clubid'=>1,'userid'=>16]);
        DB::table('bills')->insert(['id' =>3,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>3000,'clubid'=>1,'userid'=>16]);
        DB::table('bills')->insert(['id' =>4,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>6000,'clubid'=>1,'userid'=>16]);
        DB::table('bills')->insert(['id' =>5,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>5000,'clubid'=>1,'userid'=>16]);
        DB::table('bills')->insert(['id' =>6,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>100,'clubid'=>1,'userid'=>16]);
        DB::table('bills')->insert(['id' =>7,'nameClub'=>'Capitolio','manager' =>'manager1','date' =>'27-05-2020','balance'=>0,'clubid'=>1,'userid'=>16]);
        // Canela Dance Club
        DB::table('bills')->insert(['id' =>8,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>3000,'clubid'=>2,'userid'=>17]);
        DB::table('bills')->insert(['id' =>9,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>2500,'clubid'=>2,'userid'=>17]);
        DB::table('bills')->insert(['id' =>10,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>5000,'clubid'=>2,'userid'=>17]);
        DB::table('bills')->insert(['id' =>11,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>500,'clubid'=>2,'userid'=>17]);
        DB::table('bills')->insert(['id' =>12,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>5000,'clubid'=>2,'userid'=>17]);
        DB::table('bills')->insert(['id' =>13,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>100,'clubid'=>2,'userid'=>17]);
        DB::table('bills')->insert(['id' =>14,'nameClub'=>'Canela Dance Club','manager' =>'manager2','date' =>'27-05-2020','balance'=>0,'clubid'=>2,'userid'=>17]);
        //The Bunker
        DB::table('bills')->insert(['id' =>15,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>3000,'clubid'=>3,'userid'=>18]);
        DB::table('bills')->insert(['id' =>16,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>2500,'clubid'=>3,'userid'=>18]);
        DB::table('bills')->insert(['id' =>17,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>5000,'clubid'=>3,'userid'=>18]);
        DB::table('bills')->insert(['id' =>18,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>5500,'clubid'=>3,'userid'=>18]);
        DB::table('bills')->insert(['id' =>19,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>900,'clubid'=>3,'userid'=>18]);
        DB::table('bills')->insert(['id' =>20,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>100,'clubid'=>3,'userid'=>18]);
        DB::table('bills')->insert(['id' =>21,'nameClub'=>'The Bunker','manager' =>'manager3','date' =>'27-05-2020','balance'=>0,'clubid'=>3,'userid'=>18]);
        //Brisas del Caribe
        DB::table('bills')->insert(['id' =>22,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>3000,'clubid'=>4,'userid'=>19]);
        DB::table('bills')->insert(['id' =>23,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>2500,'clubid'=>4,'userid'=>19]);
        DB::table('bills')->insert(['id' =>24,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>5000,'clubid'=>4,'userid'=>19]);
        DB::table('bills')->insert(['id' =>25,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>5500,'clubid'=>4,'userid'=>19]);
        DB::table('bills')->insert(['id' =>26,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>900,'clubid'=>4,'userid'=>19]);
        DB::table('bills')->insert(['id' =>27,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>100,'clubid'=>4,'userid'=>19]);
        DB::table('bills')->insert(['id' =>28,'nameClub'=>'Brisas del Caribe','manager' =>'manager4','date' =>'27-05-2020','balance'=>0,'clubid'=>4,'userid'=>19]);
        //San Pues
        DB::table('bills')->insert(['id' =>29,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>2000,'clubid'=>5,'userid'=>20]);
        DB::table('bills')->insert(['id' =>30,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>2500,'clubid'=>5,'userid'=>20]);
        DB::table('bills')->insert(['id' =>31,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>8000,'clubid'=>5,'userid'=>20]);
        DB::table('bills')->insert(['id' =>32,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>1500,'clubid'=>5,'userid'=>20]);
        DB::table('bills')->insert(['id' =>33,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>400,'clubid'=>5,'userid'=>20]);
        DB::table('bills')->insert(['id' =>34,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>300,'clubid'=>5,'userid'=>20]);
        DB::table('bills')->insert(['id' =>35,'nameClub'=>'San Pues','manager' =>'manager5','date' =>'27-05-2020','balance'=>0,'clubid'=>5,'userid'=>20]);
    
}

}
