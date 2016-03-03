<?php

namespace App\Front\Http\Controllers\Thumb;

use App;
use App\Front\Http\Controllers\FrontController;
use Image;
use Storage;

class ImageController extends FrontController
{
    /**
     * View original image
     *
     * @param $folder
     * @param string $file
     * @return mixed
     */
    public function view($folder, $file)
    {
        $img = $this->getImage($folder, $file);

        return $img->response();
    }

    /**
     * Resize image
     *
     * @param $folder
     * @param int $width
     * @param string $file
     * @return mixed
     */
    public function resize($folder, $width, $file)
    {
        $img = $this->getImage($folder, $file);
        $img->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        return $img->response();
    }

    /**
     * Crop image
     *
     * @param $folder
     * @param int $width
     * @param int $height
     * @param string $file
     * @return mixed
     */
    public function crop($folder, $width, $height, $file)
    {
        $img = $this->getImage($folder, $file);
        $img->fit($width, $height);

        return $img->response();
    }

    /**
     * @param $folder
     * @param $file
     * @return mixed
     */
    private function getImage($folder, $file)
    {
        if (Storage::has("$folder/$file")) {
            $img = Image::make(storage_path("app/$folder/$file"));
        } else {
            $img = Image::canvas(800, 800, '#cccccc');
        }

        return $img;
    }
}
