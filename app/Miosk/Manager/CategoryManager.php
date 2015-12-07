<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 20.09.15
 * Time: 15:59
 */

namespace App\Janice\Manager;


use App\Category;

class CategoryManager {

    public static function createCategoryIfNotExist($name)
    {
        $category = Category::where('name', $name)->first();
        if ($category == null)
        {
            $category = new Category();
            $category->name = $name;
            $category->save();
        }
        return $category;
    }

    public static function createCategoriesIfNotExist($names)
    {
        $categories = array();
        foreach ($names as $name)
        {
            $category = CategoryManager::createCategoryIfNotExist($name);
            array_push($categories, $category);
        }

        return $categories;
    }

    public static function deleteUnusedCategories() {
        $categories = Category::all();
        foreach ($categories as $category) {
            if ($category->projects()->count() == 0) {
                $category->delete();
            }
        }
    }
}