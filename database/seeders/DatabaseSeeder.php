<?php

use Database\Seeders\AdminOrderProductsSeeder;
use Database\Seeders\AttributeGroupsSeeder;
use Database\Seeders\AttributeProductsSeeder;
use Database\Seeders\AttributeValuesSeeder;
use Database\Seeders\BrandsSeeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\CurrenciesSeeder;
use Database\Seeders\GalleriesSeeder;
use Database\Seeders\OrdersSeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\RelatedProductsSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\UserRolesTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Seeder;


    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {


            $this->call(RolesTableSeeder::class);
            $this->call(UsersTableSeeder::class);
            $this->call(UserRolesTableSeeder::class);
            $this->call(AttributeGroupsSeeder::class);
            $this->call(AttributeProductsSeeder::class);
            $this->call(AttributeValuesSeeder::class);
            $this->call(BrandsSeeder::class);
            $this->call(CategoriesSeeder::class);
            $this->call(CurrenciesSeeder::class);
            $this->call(GalleriesSeeder::class);
            $this->call(ProductsSeeder::class);
            $this->call(RelatedProductsSeeder::class);
            $this->call(OrdersSeeder::class);
            $this->call(AdminOrderProductsSeeder::class);

        }
    }
