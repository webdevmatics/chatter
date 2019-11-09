<?php

use Illuminate\Database\Seeder;

class ChatterCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Laravel',
                'color'      => '#E67E22',
                'slug'       => 'laravel',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'Vue',
                'color'      => '#2ECC71',
                'slug'       => 'vue',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'parent_id'  => null,
                'order'      => 3,
                'name'       => 'Other',
                'color'      => '#9B59B6',
                'slug'       => 'other',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id'         => 4,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Random',
                'color'      => '#3498DB',
                'slug'       => 'random',
                'created_at' => null,
                'updated_at' => null,
            ],
            4 => [
                'id'         => 5,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Request',
                'color'      => 'yellow',
                'slug'       => 'request',
                'created_at' => null,
                'updated_at' => null,
            ],

            
        ]);

       
    }

}
