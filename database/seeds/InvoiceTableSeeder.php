<?php

/**
   * @name:        Invoice table seeder
   * @author:      Zaid - Patrik - Henry
   * @description: insert datos in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Invoice;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert(['id' =>1,'clubid'=>1,'userid'=>2,'productid'=>1,'totalprice'=>15]);
        DB::table('invoices')->insert(['id' =>2,'clubid'=>1,'userid'=>3,'productid'=>2,'totalprice'=>20]);
        DB::table('invoices')->insert(['id' =>3,'clubid'=>1,'userid'=>4,'productid'=>3,'totalprice'=>25]);
        DB::table('invoices')->insert(['id' =>4,'clubid'=>1,'userid'=>5,'productid'=>4,'totalprice'=>17]);
        DB::table('invoices')->insert(['id' =>40,'clubid'=>1,'userid'=>1,'productid'=>1,'totalprice'=>15]);

        //
        DB::table('invoices')->insert(['id' =>5,'clubid'=>2,'userid'=>2,'productid'=>6,'totalprice'=>15]);
        DB::table('invoices')->insert(['id' =>6,'clubid'=>2,'userid'=>3,'productid'=>7,'totalprice'=>20]);
        DB::table('invoices')->insert(['id' =>7,'clubid'=>2,'userid'=>4,'productid'=>8,'totalprice'=>25]);
        DB::table('invoices')->insert(['id' =>8,'clubid'=>2,'userid'=>5,'productid'=>9,'totalprice'=>17]);
        DB::table('invoices')->insert(['id' =>41,'clubid'=>2,'userid'=>1,'productid'=>1,'totalprice'=>15]);

        //
        DB::table('invoices')->insert(['id' =>9,'clubid'=>3,'userid'=>2,'productid'=>20,'totalprice'=>35]);
        DB::table('invoices')->insert(['id' =>10,'clubid'=>3,'userid'=>3,'productid'=>21,'totalprice'=>22]);
        DB::table('invoices')->insert(['id' =>11,'clubid'=>3,'userid'=>4,'productid'=>22,'totalprice'=>25]);
        DB::table('invoices')->insert(['id' =>12,'clubid'=>3,'userid'=>5,'productid'=>23,'totalprice'=>17]);
        DB::table('invoices')->insert(['id' =>42,'clubid'=>3,'userid'=>1,'productid'=>1,'totalprice'=>15]);

        //
        DB::table('invoices')->insert(['id' =>13,'clubid'=>4,'userid'=>2,'productid'=>70,'totalprice'=>65]);
        DB::table('invoices')->insert(['id' =>14,'clubid'=>4,'userid'=>3,'productid'=>71,'totalprice'=>52]);
        DB::table('invoices')->insert(['id' =>15,'clubid'=>4,'userid'=>4,'productid'=>72,'totalprice'=>75]);
        DB::table('invoices')->insert(['id' =>16,'clubid'=>4,'userid'=>5,'productid'=>73,'totalprice'=>57]);
        DB::table('invoices')->insert(['id' =>43,'clubid'=>4,'userid'=>1,'productid'=>73,'totalprice'=>57]);

        //
        DB::table('invoices')->insert(['id' =>17,'clubid'=>5,'userid'=>2,'productid'=>74,'totalprice'=>65]);
        DB::table('invoices')->insert(['id' =>18,'clubid'=>5,'userid'=>3,'productid'=>75,'totalprice'=>52]);
        DB::table('invoices')->insert(['id' =>19,'clubid'=>5,'userid'=>4,'productid'=>76,'totalprice'=>75]);
        DB::table('invoices')->insert(['id' =>44,'clubid'=>5,'userid'=>5,'productid'=>73,'totalprice'=>57]);
        DB::table('invoices')->insert(['id' =>45,'clubid'=>5,'userid'=>1,'productid'=>77,'totalprice'=>57]);
    }
}
