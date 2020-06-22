<?php

/**
   * @name:        Clubs table seeder
   * @author:      Zaid - Patrik - Henry
   * @description: insert datos in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

use Illuminate\Database\Seeder;
use App\Club;
class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        //
        DB::table('clubs')->insert(['id' =>1,'clubname' =>'Capitolio','streetname' =>'Carrer del Coure','streetnumber' =>79,'postal_code' =>8940,'phone' =>671296110,'city' =>'Cornellà de Llobregat','description' =>'Capitolio es la discoteca latina más emblemática de Barcelona.. creada en el 2001.. somos los lideres de la noche latina.','ambience' =>'Latino','dress_code' =>'Formal','cover_url' =>'images/clubs/capitolio.jpg','opening_time'=>'21:00','closing_time'=>'4:00','lat'=>41.385111,'lng'=>2.170583,'userid' =>11,]);
        DB::table('clubs')->insert(['id' =>2,'clubname' =>'Canela Dance Club','streetname' =>' Carrer de Ca lAlegre de Dalt','streetnumber' =>55,'postal_code' =>8924,'phone' =>678823397,'city' =>'Barcelona','description' =>'Canela Dance Club es una sala donde podemos disfrutar de la mejor rumba y la mejor salsa de toda la ciudad. En la discoteca Canela Dance Club podrás bailar toda la noche, sobre todo grandes éxitos de música latina como la salsa.','ambience' =>'Latino','dress_code' =>'Formal','cover_url' =>'images/clubs/canela.jpg','opening_time'=>'21:00','closing_time'=>'4:00','lat'=>41.3781789,'lng'=>2.0972907,'userid' =>12,]);
        DB::table('clubs')->insert(['id' =>3,'clubname' =>'The Bunker','streetname' =>'Ronda de Sant Pere','streetnumber' =>19,'postal_code' =>8903,'phone' =>699325970,'city' =>'Barcelona','description' =>'En The Bunker, puedes disfrutar de una noche maravillosa con tus amigos. Hay dos pisos y cada piso reproduce música diferente. El búnker alberga muchas fiestas geniales. Estos festivales son muy populares y conocidos en la vida nocturna de Barcelona.','ambience' =>'Latino','dress_code' =>'Urban','cover_url' =>'images/clubs/bunker.jpg','opening_time'=>'21:00','closing_time'=>'4:00','lat'=>41.3776343,'lng'=>2.1313133,'userid' =>13,]);
        DB::table('clubs')->insert(['id' =>4,'clubname' =>'Brisas del Caribe','streetname' =>'Av.Paralel','streetnumber' =>37,'postal_code' =>8004,'phone' =>688451918,'city' =>'Barcelona','description' =>'En Brisas Del Caribe, puedes disfrutar de una noche maravillosa con tus amigos. Hay dos pisos y cada piso reproduce música diferente. El búnker alberga muchas fiestas geniales. Estos festivales son muy populares y conocidos en la vida nocturna de Barcelona.','ambience' =>'Latino','dress_code' =>'Urban','cover_url' =>'images/clubs/brisas.jpg','opening_time'=>'21:00','closing_time'=>'4:00','lat'=>41.3609722,'lng'=>2.1310919,'userid' =>14,]);
        DB::table('clubs')->insert(['id' =>5,'clubname' =>'San Pues','streetname' =>'Carrer de Ramon Trias Fargas','streetnumber' =>2,'postal_code' =>8905,'phone' =>627127782,'city' =>'Barcelona','description' =>'En San Pues, puedes disfrutar de una noche maravillosa con tus amigos. Hay dos pisos y cada piso reproduce música diferente. El búnker alberga muchas fiestas geniales. Estos festivales son muy populares y conocidos en la vida nocturna de Barcelona.','ambience' =>'Latino','dress_code' =>'Normal','cover_url' =>'images/clubs/sanpues.jpg','opening_time'=>'21:00','closing_time'=>'4:00','lat'=>41.3625328,'lng'=>2.1079182,'userid' =>15,]);
        DB::table('clubs')->insert(['id' =>6,'clubname' =>'Pacha','streetname' =>'Passeig Marítim de la Barceloneta','streetnumber' =>38,'postal_code' =>8905,'phone' =>627127783,'city' =>'Barcelona','description' =>'Después de abrir el primer Pacha en Sitges en 1963 y el Pacha de Ibiza en 1973, fue también inaugurado Pacha Barcelona, que a la postre terminaría siendo uno de los clubs más conocidos e importantes de España.','ambience' =>'House','dress_code' =>'Normal','cover_url' =>'images/clubs/pacha.png','opening_time'=>'00:00','closing_time'=>'6:00','lat'=>41.3857441,'lng'=>2.1948614,'userid' =>21,]);


    }
}
