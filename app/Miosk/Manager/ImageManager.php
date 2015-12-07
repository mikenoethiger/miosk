<?php

namespace App\Miosk\Manager;


use App\Image;
use App\ProjectImage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\File\File;

class ImageManager
{
    /**
     * @param SplFileInfo $file all information about the file. Laravel's $request->file('xyz') method
     * returns an instance of SplFileInfo, see: http://laravel.com/docs/5.1/requests#files
     *
     * @returns Image an instance of App\Image
     */
    public static function saveImage(\SplFileInfo $file)
    {
        $imageName = str_random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(ImageManager::getImagesSourceFolder(), $imageName);

        return $imageName;
    }

    public static function getImagesSourceFolder()
    {
        return public_path() . '/product_images';
    }
}