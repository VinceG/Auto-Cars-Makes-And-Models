<?php

use Illuminate\Database\Seeder;

class MakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('makes')->truncate();

        $makes = [
          ['id' => 1, 'code' => 'ACURA', 'title' => 'Acura'],
          ['id' => 2, 'code' => 'ALFA',  'title' =>'Alfa Romeo'],
          ['id' => 3, 'code' => 'AMC', 'title' => 'AMC'],
          ['id' => 4, 'code' => 'ASTON', 'title' => 'Aston Martin'],
          ['id' => 5, 'code' => 'AUDI',  'title' =>'Audi'],
          ['id' => 6, 'code' => 'AVANTI', 'title' => 'Avanti'],
          ['id' => 7, 'code' => 'BENTL', 'title' => 'Bentley'],
          ['id' => 8, 'code' => 'BMW', 'title' => 'BMW'],
          ['id' => 9, 'code' => 'BUICK', 'title' => 'Buick'],
          ['id' => 10,'code' =>  'CAD',  'title' =>'Cadillac'],
          ['id' => 11,'code' =>  'CHEV', 'title' => 'Chevrolet'],
          ['id' => 12,'code' =>  'CHRY', 'title' => 'Chrysler'],
          ['id' => 13,'code' =>  'DAEW', 'title' => 'Daewoo'],
          ['id' => 14,'code' =>  'DAIHAT', 'title' =>'Daihatsu'],
          ['id' => 15,'code' =>  'DATSUN', 'title' => 'Datsun'],
          ['id' => 16,'code' =>  'DELOREAN', 'title' => 'DeLorean'],
          ['id' => 17,'code' =>  'DODGE', 'title' => 'Dodge'],
          ['id' => 18,'code' =>  'EAGLE', 'title' => 'Eagle'],
          ['id' => 19,'code' =>  'FER',  'title' =>'Ferrari'],
          ['id' => 20,'code' =>  'FIAT', 'title' => 'FIAT'],
          ['id' => 21,'code' =>  'FISK', 'title' => 'Fisker'],
          ['id' => 22,'code' =>  'FORD', 'title' => 'Ford'],
          ['id' => 23,'code' =>  'FREIGHT', 'title' =>'Freightliner'],
          ['id' => 24,'code' =>  'GEO',  'title' =>'Geo'],
          ['id' => 25,'code' =>  'GMC',  'title' =>'GMC'],
          ['id' => 26,'code' =>  'HONDA', 'title' => 'Honda'],
          ['id' => 27,'code' =>  'AMGEN', 'title' => 'HUMMER'],
          ['id' => 28,'code' =>  'HYUND', 'title' => 'Hyundai'],
          ['id' => 29,'code' =>  'INFIN', 'title' => 'Infiniti'],
          ['id' => 30,'code' =>  'ISU',  'title' =>'Isuzu'],
          ['id' => 31,'code' =>  'JAG',  'title' =>'Jaguar'],
          ['id' => 32,'code' =>  'JEEP', 'title' => 'Jeep'],
          ['id' => 33,'code' =>  'KIA',  'title' =>'Kia'],
          ['id' => 34,'code' =>  'LAM',  'title' =>'Lamborghini'],
          ['id' => 35,'code' =>  'LAN',  'title' =>'Lancia'],
          ['id' => 36,'code' =>  'ROV',  'title' =>'Land Rover'],
          ['id' => 37,'code' =>  'LEXUS', 'title' => 'Lexus'],
          ['id' => 38,'code' =>  'LINC', 'title' => 'Lincoln'],
          ['id' => 39,'code' =>  'LOTUS', 'title' => 'Lotus'],
          ['id' => 40,'code' =>  'MAS',  'title' =>'Maserati'],
          ['id' => 41,'code' =>  'MAYBACH', 'title' =>'Maybach'],
          ['id' => 42,'code' =>  'MAZDA', 'title' => 'Mazda'],
          ['id' => 43,'code' =>  'MCLAREN', 'title' =>'McLaren'],
          ['id' => 44,'code' =>  'MB', 'title' => 'Mercedes-Benz'],
          ['id' => 45,'code' =>  'MERC', 'title' => 'Mercury'],
          ['id' => 46,'code' =>  'MERKUR', 'title' => 'Merkur'],
          ['id' => 47,'code' =>  'MINI', 'title' => 'MINI'],
          ['id' => 48,'code' =>  'MIT',  'title' =>'Mitsubishi'],
          ['id' => 49,'code' =>  'NISSAN', 'title' => 'Nissan'],
          ['id' => 50,'code' =>  'OLDS', 'title' => 'Oldsmobile'],
          ['id' => 51,'code' =>  'PEUG', 'title' => 'Peugeot'],
          ['id' => 52,'code' =>  'PLYM', 'title' => 'Plymouth'],
          ['id' => 53,'code' =>  'PONT', 'title' => 'Pontiac'],
          ['id' => 54,'code' =>  'POR',  'title' =>'Porsche'],
          ['id' => 55,'code' =>  'RAM',  'title' =>'RAM'],
          ['id' => 56,'code' =>  'REN',  'title' =>'Renault'],
          ['id' => 57,'code' =>  'RR', 'title' => 'Rolls-Royce'],
          ['id' => 58,'code' =>  'SAAB', 'title' => 'Saab'],
          ['id' => 59,'code' =>  'SATURN', 'title' =>'Saturn'],
          ['id' => 60,'code' =>  'SCION', 'title' => 'Scion'],
          ['id' => 61,'code' =>  'SMART', 'title' => 'smart'],
          ['id' => 62,'code' =>  'SRT',  'title' =>'SRT'],
          ['id' => 63,'code' =>  'STERL', 'title' => 'Sterling'],
          ['id' => 64,'code' =>  'SUB',  'title' =>'Subaru'],
          ['id' => 65,'code' =>  'SUZUKI', 'title' => 'Suzuki'],
          ['id' => 66,'code' =>  'TESLA', 'title' =>'Tesla'],
          ['id' => 67,'code' =>  'TOYOTA', 'title' => 'Toyota'],
          ['id' => 68,'code' =>  'TRI',  'title' =>'Triumph'],
          ['id' => 69,'code' =>  'VOLKS', 'title' => 'Volkswagen'],
          ['id' => 70,'code' =>  'VOLVO', 'title' => 'Volvo'],
          ['id' => 71,'code' =>  'YUGO', 'title' => 'Yugo']
        ];

        \DB::table('makes')->insert($makes);
    }
}
