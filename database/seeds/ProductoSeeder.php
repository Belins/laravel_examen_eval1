<?php
use App\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::Insert([
            [
                'name'=>'chaqueta',
                'description'=>'chaqueta bomber',
                'stock'=>'5',
                'price'=>'25'
            ],
            [
                'name'=>'pantalon',
                'description'=>'pantalon skinni fit',
                'stock'=>'7',
                'price'=>'19.99'
            ],
            [
                'name'=>'zapatillas',
                'description'=>'zapatillas nike',
                'stock'=>'3',
                'price'=>'65'
            ],
            [
                'name'=>'reloj',
                'description'=>'zapatillas nike',
                'stock'=>'3',
                'price'=>'65'
            ],
            [
                'name'=>'bufanda',
                'description'=>'bufanda nike',
                'stock'=>'4',
                'price'=>'15'
            ],
            [
                'name'=>'camiseta',
                'description'=>'camiseta nike',
                'stock'=>'10',
                'price'=>'15'
            ],
            [
                'name'=>'camisa',
                'description'=>'camisa nike',
                'stock'=>'4',
                'price'=>'35'
            ],
            [
                'name'=>'americana',
                'description'=>'americana nike',
                'stock'=>'6',
                'price'=>'40'
            ],
            [
                'name'=>'calcetines',
                'description'=>'calcetines nike',
                'stock'=>'7',
                'price'=>'5'
            ],
            [
                'name'=>'gorro',
                'description'=>'gorro nike',
                'stock'=>'9',
                'price'=>'30'
            ]
        ]);
    }
}
