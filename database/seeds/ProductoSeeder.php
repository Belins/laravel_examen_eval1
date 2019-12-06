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
                'price'=>'25',
                'tienda_id'=>1
            ],
            [
                'name'=>'pantalon',
                'description'=>'pantalon skinni fit',
                'stock'=>'7',
                'price'=>'19.99',
                'tienda_id'=>2
            ],
            [
                'name'=>'zapatillas',
                'description'=>'zapatillas nike',
                'stock'=>'3',
                'price'=>'65',
                'tienda_id'=>3
            ],
            [
                'name'=>'reloj',
                'description'=>'zapatillas nike',
                'stock'=>'3',
                'price'=>'65',
                'tienda_id'=>1
            ],
            [
                'name'=>'bufanda',
                'description'=>'bufanda nike',
                'stock'=>'4',
                'price'=>'15',
                'tienda_id'=>2
            ],
            [
                'name'=>'camiseta',
                'description'=>'camiseta nike',
                'stock'=>'10',
                'price'=>'15',
                'tienda_id'=>3
            ],
            [
                'name'=>'camisa',
                'description'=>'camisa nike',
                'stock'=>'4',
                'price'=>'35',
                'tienda_id'=>1
            ],
            [
                'name'=>'americana',
                'description'=>'americana nike',
                'stock'=>'6',
                'price'=>'40',
                'tienda_id'=>2
            ],
            [
                'name'=>'calcetines',
                'description'=>'calcetines nike',
                'stock'=>'7',
                'price'=>'5',
                'tienda_id'=>3
            ],
            [
                'name'=>'gorro',
                'description'=>'gorro nike',
                'stock'=>'9',
                'price'=>'30',
                'tienda_id'=>1
            ]
        ]);
    }
}
