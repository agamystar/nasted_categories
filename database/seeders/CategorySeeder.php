<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat_a=Category::create([
            'name' => "CAT A",
            'parent_id' => 0
        ]);


        $cat_a_1=Category::create([
            'name' => "CAT A 1-1",
            'parent_id' => $cat_a->id
        ]);


        $cat_a_1=Category::create([
            'name' => "CAT AAAAAA ",
            'parent_id' => $cat_a->id
        ]);

        $cat_a_2=Category::create([
            'name' => "CAT A 11-11",
            'parent_id' => $cat_a_1->id
        ]);

        $cat_a_21=Category::create([
            'name' => "CAT A 11111-11111",
            'parent_id' => $cat_a_2->id
        ]);

        Category::create([
            'name' => "CAT A 22-22",
            'parent_id' => $cat_a_2->id
        ]);


        Category::create([
            'name' => "CAT A 2222-22222",
            'parent_id' => $cat_a_1->id
        ]);

      

        $cat_b_1=Category::create([
            'name' => "CAT B 1",
            'parent_id' => 0
        ]);
        $cat_b_2=Category::create([
            'name' => "CAT B 1-1",
            'parent_id' => $cat_b_1->id
        ]);


        $cat_b_3=Category::create([
            'name' => "CAT B 2-1",
            'parent_id' => $cat_b_1->id
        ]);

        Category::create([
            'name' => "CAT B 2222-2222",
            'parent_id' => $cat_b_2->id
        ]);

        Category::create([
            'name' => "CAT B 3333-333333",
            'parent_id' => $cat_b_3->id
        ]);
        Category::create([
            'name' => "CAT B 44444-4444",
            'parent_id' => $cat_b_3->id
        ]);
    }
}
