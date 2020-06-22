<?php

/**
   * @name:        DatabaseSeeder
   * @author:      Zaid - Patrik - Henry
   * @description: Execute the seeders - Insert all datas of tables
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(TableTableSeeder::class);
        $this->call(BillsTableSeeder::class);
        $this->call(ReservationTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);

    }
}
