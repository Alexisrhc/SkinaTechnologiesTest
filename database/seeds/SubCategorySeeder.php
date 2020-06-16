<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
        	[
                'name'              => 'baño',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '1',
            ],
            [
                'name'              => 'cocina',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '1',
            ],
            [
                'name'              => 'decoracion',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '1',
            ],
            [
                'name'              => 'dormitorio',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '1',
            ],
            [
                'name'              => 'cuidado de piel',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '2',
            ],
            [
                'name'              => 'cuidado del cabello',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '2',
            ],
            [
                'name'              => 'cuidado de uñas',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '2',
            ],
            [
                'name'              => 'bajos',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '3',
            ],
            [
                'name'              => 'baterias y percucion',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '3',
            ],
            [
                'name'              => 'guitarra',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '3',
            ],
            [
                'name'              => 'blusas',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '4',
            ],
            [
                'name'              => 'camisas',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '4',
            ],
            [
                'name'              => 'chaquetas',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '4',
            ],
            [
                'name'              => 'faldas',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '4',
            ],
            [
                'name'              => 'ropa interior',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '4',
            ],
            [
                'name'              => 'adulto',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '5',
            ],
            [
                'name'              => 'alcohol',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '5',
            ],
            [
                'name'              => 'concientos',
                'status'            => '1',
                'quantity_products' => '1',
                'category_id'       => '5',
            ],
        ]);
    }
}
