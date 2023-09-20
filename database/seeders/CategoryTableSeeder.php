<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $financeCategories = [
            "Personal Finance",
            "Corporate Finance",
            "Investment",
            "Banking",
            "Financial Markets",
            "Insurance",
            "Taxation",
            "International Finance",
            "Fintech (Financial Technology)",
            "Financial Planning"
        ];

        foreach ($financeCategories as $categoryTitle) {
            CategoryFactory::new()->withTitle($categoryTitle)->create();
        }
    }
}
