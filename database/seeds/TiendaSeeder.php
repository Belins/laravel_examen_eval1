<?php
use App\Tienda;
use Illuminate\Database\Seeder;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tienda::Insert([
            [
                'name'=>'zara',
                'description'=>'zara tienda de moda',
                'password'=>'zara1234',
                'email'=>'zara@gmail.com',
                'likes'=>'3000'
            ],
            [
                'name'=>'nike',
                'description'=>'nike tienda de moda',
                'password'=>'nike1234',
                'email'=>'nike@gmail.com',
                'likes'=>'2500'
            ],
            [
                'name'=>'breska',
                'description'=>'breska tienda de moda',
                'password'=>'breska1234',
                'email'=>'breska@gmail.com',
                'likes'=>'1500'
            ]
        ]);
    }
}
