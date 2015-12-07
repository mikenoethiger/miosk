<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 20.09.15
 * Time: 15:45
 */

namespace App\Janice\Manager;


use App\Project;
use Illuminate\Support\Facades\DB;

class ProjectManager {


    public static function createProject($title, $categories, $author, $description, $date, $place, $customer, $customer_site)
    {
        $project = new Project();
        $project->title = $title;
        $project->author = $author;
        $project->description = $description;
        $project->date = $date;
        $project->place = $place;
        $project->customer = $customer;
        $project->customer_site = $customer_site;
        $project->save();
        foreach (CategoryManager::createCategoriesIfNotExist($categories) as $category)
        {
            $project->categories()->attach($category->id);
        }
        return $project;
    }

    public static function getLatestProjects()
    {
        return Project::orderBy('created_at', 'asc')->take(4)->get();
    }
}