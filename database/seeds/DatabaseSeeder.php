<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
    //    $this->call(SubCategorySeeder::class);
    //   $this->call(SubSubCategorySeeder::class);
      // $this->call(BrandTableSeeder::class);
         $this->call(TypesSeeder::class);

    }
}
