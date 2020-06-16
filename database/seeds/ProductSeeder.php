<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
	            'name' 					=> 'puerta de baño',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '1',
	        ],
	        [
	            'name' 					=> 'poceta',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '1',
	        ],
	        [
	            'name' 					=> 'cortina de ducha',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '1',
	        ],
	        [
	            'name' 					=> 'calentador de agua',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '1',
	        ],
	        [
	            'name' 					=> 'llave de lavamanos',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '1',
	        ],

	        [
	            'name' 					=> 'olla de presion',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '2',
	        ],
	        [
	            'name' 					=> 'frasco de envase',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '2',
	        ],
	        [
	            'name' 					=> 'bomba de agua',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '2',
	        ],
	        [
	            'name' 					=> 'torteta',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '2',
	        ],
	        [
	            'name' 					=> 'molde bandeja',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '2',
	        ],

	        [
	            'name' 					=> 'papel tapiz',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '3',
	        ],
	        [
	            'name' 					=> 'paneles de paredes',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '3',
	        ],
	        [
	            'name' 					=> 'pintura',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '3',
	        ],
	        [
	            'name' 					=> 'persinas',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '3',
	        ],
	        [
	            'name' 					=> 'piso de vinil',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '3',
	        ],

	        [
	            'name' 					=> 'juego de cuarto',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '4',
	        ],
	        [
	            'name' 					=> 'cama',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '4',
	        ],
	        [
	            'name' 					=> 'litera',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '4',
	        ],
	        [
	            'name' 					=> 'sabanas',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '4',
	        ],
	        [
	            'name' 					=> 'protector de colchon',
	            // 'category_id'			=> 1,
	            // 'sub_category_id' 		=> '4',
	        ],

	        [
	            'name' 					=> 'protector solar',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '5',
	        ],
	        [
	            'name' 					=> 'crema',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '5',
	        ],

	        [
	            'name' 					=> 'cirugia capilar',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '6',
	        ],
	        [
	            'name' 					=> 'keratina',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '6',
	        ],
	        [
	            'name' 					=> 'nachampoome',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '6',
	        ],
	        [
	            'name' 					=> 'peine saca piojo',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '6',
	        ],
	        [
	            'name' 					=> 'plancha',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '6',
	        ],
	        [
	            'name' 					=> 'secador',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '6',
	        ],

	        [
	            'name' 					=> 'pintura de uñas',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '7',
	        ],
	        [
	            'name' 					=> 'molde de uñas',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '7',
	        ],
	        [
	            'name' 					=> 'uñas de gel',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '7',
	        ],
	        [
	            'name' 					=> 'lima de uñas',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '7',
	        ],
	        [
	            'name' 					=> 'kit de uñas',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '7',
	        ],
	        [
	            'name' 					=> 'lampara UV sun LED',
	            // 'category_id'			=> 2,
	            // 'sub_category_id' 		=> '7',
	        ],

	        [
	            'name' 					=> 'bajo fender',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '8',
	        ],
	        [
	            'name' 					=> 'cuerdas de bajo (D)',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '8',
	        ],
	        [
	            'name' 					=> 'bajo electrico',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '8',
	        ],

	        [
	            'name' 					=> 'parche de 15"',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '9',
	        ],
	        [
	            'name' 					=> 'baquetas novas',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '9',
	        ],
	        [
	            'name' 					=> 'congas, tumbadoras',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '9',
	        ],
	        [
	            'name' 					=> 'bateria mapez',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '9',
	        ],

	        [
	            'name' 					=> 'guitarra clasica',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '10',
	        ],
	        [
	            'name' 					=> 'guitarra electrica',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '10',
	        ],
	        [
	            'name' 					=> 'guitarra yamaha',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '10',
	        ],
	        [
	            'name' 					=> 'guitarra D Andre',
	            // 'category_id'			=> 3,
	            // 'sub_category_id' 		=> '10',
	        ],

	        [
	            'name' 					=> 'blusas casuales',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '11',
	        ],
	        [
	            'name' 					=> 'blusas tops',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '11',
	        ],
	        [
	            'name' 					=> 'blusas matilda',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '11',
	        ],
	        [
	            'name' 					=> 'blusas doble de damas',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '11',
	        ],
	        [
	            'name' 					=> 'blusas manzanita',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '11',
	        ],

	        [
	            'name' 					=> 'franela dia del padre',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '12',
	        ],
	        [
	            'name' 					=> 'sweter',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '12',
	        ],
	        [
	            'name' 					=> 'chemise',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '12',
	        ],

	        [
	            'name' 					=> 'sweter',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '13',
	        ],
	        [
	            'name' 					=> 'chaqueta',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '13',
	        ],
	        [
	            'name' 					=> 'blazer',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '13',
	        ],

	        [
	            'name' 					=> 'conjunto falda y sweter',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '14',
	        ],
	        [
	            'name' 					=> 'falsa shor',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '14',
	        ],
	        [
	            'name' 					=> 'traje llanero',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '14',
	        ],
	        [
	            'name' 					=> 'falda tutu',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '14',
	        ],

	        [
	            'name' 					=> 'pantys',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '15',
	        ],
	        [
	            'name' 					=> 'boxer',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '15',
	        ],
	        [
	            'name' 					=> 'bralettes',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '15',
	        ],
	        [
	            'name' 					=> 'hilos sexy',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '15',
	        ],
	        [
	            'name' 					=> 'medias',
	            // 'category_id'			=> 4,
	            // 'sub_category_id' 		=> '15',
	        ],

	        [
	            'name' 					=> 'vibrador',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '16',
	        ],
	        [
	            'name' 					=> 'anillos',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '16',
	        ],
	        [
	            'name' 					=> 'balas vibradoras',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '16',
	        ],
	        [
	            'name' 					=> 'plug anal',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '16',
	        ],

	        [
	            'name' 					=> 'agua ardiente',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '17',
	        ],
	        [
	            'name' 					=> 'chanpagne',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '17',
	        ],
	        [
	            'name' 					=> 'gaseosa',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '17',
	        ],

	        [
	            'name' 					=> 'thalia',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '18',
	        ],
	        [
	            'name' 					=> 'marcos antonio solis',
	            // 'category_id'			=> 5,
	            // 'sub_category_id' 		=> '18',
	        ],
        ]);
    }
}
