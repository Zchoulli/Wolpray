<?php

/**
   * @name:        User table seeder
   * @author:      Zaid - Patrik - Henry
   * @description: insert datos in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['id' =>1,'username' =>'client1','name' =>'nameA','surname' =>'nameB','email' =>'client1@client.com','password' =>Hash::make('111111'),'streetname' =>'calle1','streetnumber' =>1,'postal_code' =>10001,'phone' =>93111111,'city' =>'Barcelona','birthdate' =>'33104','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>2,'username' =>'client2','name' =>'nameB','surname' =>'nameB','email' =>'client2@client.com','password' =>Hash::make('222222'),'streetname' =>'calle2','streetnumber' =>2,'postal_code' =>10002,'phone' =>93222222,'city' =>'Barcelona','birthdate' =>'33105','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>3,'username' =>'client3','name' =>'nameC','surname' =>'nameC','email' =>'client3@client.com','password' =>Hash::make('333333'),'streetname' =>'calle3','streetnumber' =>3,'postal_code' =>10003,'phone' =>93333333,'city' =>'Barcelona','birthdate' =>'33106','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>4,'username' =>'client4','name' =>'nameD','surname' =>'nameD','email' =>'client4@client.com','password' =>Hash::make('444444'),'streetname' =>'calle4','streetnumber' =>4,'postal_code' =>10004,'phone' =>93444444,'city' =>'Barcelona','birthdate' =>'33107','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>5,'username' =>'client5','name' =>'nameE','surname' =>'nameE','email' =>'client5@client.com','password' =>Hash::make('555555'),'streetname' =>'calle5','streetnumber' =>5,'postal_code' =>10005,'phone' =>93555555,'city' =>'Barcelona','birthdate' =>'33108','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>6,'username' =>'client6','name' =>'nameF','surname' =>'nameF','email' =>'client6@client.com','password' =>Hash::make('666666'),'streetname' =>'calle6','streetnumber' =>6,'postal_code' =>10006,'phone' =>93666666,'city' =>'Barcelona','birthdate' =>'33109','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>7,'username' =>'client7','name' =>'nameG','surname' =>'nameG','email' =>'client7@client.com','password' =>Hash::make('777777'),'streetname' =>'calle7','streetnumber' =>7,'postal_code' =>10007,'phone' =>93777777,'city' =>'Barcelona','birthdate' =>'33110','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>8,'username' =>'client8','name' =>'nameH','surname' =>'nameH','email' =>'client8@client.com','password' =>Hash::make('888888'),'streetname' =>'calle8','streetnumber' =>8,'postal_code' =>10008,'phone' =>93888888,'city' =>'Barcelona','birthdate' =>'33111','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>9,'username' =>'client9','name' =>'nameJ','surname' =>'nameJ','email' =>'client9@client.com','password' =>Hash::make('999999'),'streetname' =>'calle9','streetnumber' =>9,'postal_code' =>10009,'phone' =>93999999,'city' =>'Barcelona','birthdate' =>'33112','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>10,'username' =>'client10','name' =>'nameK','surname' =>'nameK','email' =>'client10@client.com','password' =>Hash::make('101010'),'streetname' =>'calle10','streetnumber' =>10,'postal_code' =>10010,'phone' =>93101010,'city' =>'Barcelona','birthdate' =>'33113','image_profile' =>'null','role' =>'client',]);
        DB::table('users')->insert(['id' =>11,'username' =>'manager1','name' =>'nameL','surname' =>'nameL','email' =>'manager1@manager.com','password' =>Hash::make('M11111'),'streetname' =>'calle01','streetnumber' =>101,'postal_code' =>20001,'phone' =>94111111,'city' =>'Barcelona','birthdate' =>'33114','image_profile' =>'null','role' =>'manager',]);
        DB::table('users')->insert(['id' =>12,'username' =>'manager2','name' =>'nameN','surname' =>'nameN','email' =>'manager2@manager.com','password' =>Hash::make('M22222'),'streetname' =>'calle02','streetnumber' =>102,'postal_code' =>20002,'phone' =>94222222,'city' =>'Barcelona','birthdate' =>'33115','image_profile' =>'null','role' =>'manager',]);
        DB::table('users')->insert(['id' =>13,'username' =>'manager3','name' =>'nameM','surname' =>'nameM','email' =>'manager3@manager.com','password' =>Hash::make('M33333'),'streetname' =>'calle03','streetnumber' =>103,'postal_code' =>20003,'phone' =>94333333,'city' =>'Barcelona','birthdate' =>'33116','image_profile' =>'null','role' =>'manager',]);
        DB::table('users')->insert(['id' =>14,'username' =>'manager4','name' =>'nameP','surname' =>'nameP','email' =>'manager4@manager.com','password' =>Hash::make('M44444'),'streetname' =>'calle04','streetnumber' =>104,'postal_code' =>20004,'phone' =>94444444,'city' =>'Barcelona','birthdate' =>'33117','image_profile' =>'null','role' =>'manager',]);
        DB::table('users')->insert(['id' =>15,'username' =>'manager5','name' =>'nameO','surname' =>'nameO','email' =>'manager5@manager.com','password' =>Hash::make('M55555'),'streetname' =>'calle05','streetnumber' =>105,'postal_code' =>20005,'phone' =>94555555,'city' =>'Barcelona','birthdate' =>'33118','image_profile' =>'null','role' =>'manager',]);
        DB::table('users')->insert(['id' =>16,'username' =>'admin1','name' =>'nameQ','surname' =>'nameQ','email' =>'admin1@admin.com','password' =>Hash::make('A11111'),'streetname' =>'calle002','streetnumber' =>1001,'postal_code' =>30001,'phone' =>95111111,'city' =>'Barcelona','birthdate' =>'33124','image_profile' =>'null','role' =>'admin',]);
        DB::table('users')->insert(['id' =>17,'username' =>'admin2','name' =>'nameZ','surname' =>'nameZ','email' =>'admin2@admin.com','password' =>Hash::make('A22222'),'streetname' =>'calle003','streetnumber' =>1002,'postal_code' =>30002,'phone' =>95222222,'city' =>'Barcelona','birthdate' =>'33125','image_profile' =>'null','role' =>'admin',]);
        DB::table('users')->insert(['id' =>18,'username' =>'admin3','name' =>'nameX','surname' =>'nameX','email' =>'admin3@admin.com','password' =>Hash::make('A33333'),'streetname' =>'calle004','streetnumber' =>1003,'postal_code' =>30003,'phone' =>95333333,'city' =>'Barcelona','birthdate' =>'33126','image_profile' =>'null','role' =>'admin',]);
        DB::table('users')->insert(['id' =>19,'username' =>'admin4','name' =>'nameV','surname' =>'nameV','email' =>'admin4@admin.com','password' =>Hash::make('A44444'),'streetname' =>'calle005','streetnumber' =>1004,'postal_code' =>30004,'phone' =>95444444,'city' =>'Barcelona','birthdate' =>'33127','image_profile' =>'null','role' =>'admin',]);
        DB::table('users')->insert(['id' =>20,'username' =>'admin5','name' =>'nameX','surname' =>'nameX','email' =>'admin5@admin.com','password' =>Hash::make('A55555'),'streetname' =>'calle006','streetnumber' =>1005,'postal_code' =>30005,'phone' =>95555555,'city' =>'Barcelona','birthdate' =>'33128','image_profile' =>'null','role' =>'admin',]);
        DB::table('users')->insert(['id' =>21,'username' =>'managerpacha','name' =>'managerpacha','surname' =>'seupacha','email' =>'manager6@manager.com','password' =>Hash::make('M66666'),'streetname' =>'calle05','streetnumber' =>105,'postal_code' =>20005,'phone' =>94666666,'city' =>'Barcelona','birthdate' =>'33118','image_profile' =>'null','role' =>'manager',]);

    }
}
