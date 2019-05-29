<?php
namespace App\Helper;
use File;
use Image;
class imageUpload
{
    static function singleUpload($name,$directory,$file)
    {
        $rand = $name;
        $dir = 'images/'.$directory.'/'.$rand;
        $dirLarge = $dir.'/large';

        if(!empty($file)) {
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0755, true);
            }

            if (!File::exists($dirLarge)) {
                File::makeDirectory($dirLarge, 0755, true);
            }

            $filename = rand(1,90000).'.'.$file->getClientOriginalExtension();
            $path = public_path($dir.'/'.$filename);
            $path2 = public_path($dirLarge.'/'.$filename);

            Image::make($file->getRealPath())->save($path2);
            Image::make($file->getRealPath())->resize(250,250)->save($path);
            return $dir."/".$filename;
        }
        else{
            return "";
        }
    }
    static function singleUploadUpdate($name,$directory,$file,$data,$field,$smallImage,$bigImage,$extension,$nSubData2)
    {
        $rand = $name;
        $dir = 'images/'.$directory.'/'.$rand;
        $dirLarge = $dir.'/large';
        $nFile = $file;

       // File::deleteDirectory($smallImage);
      //  File::deleteDirectory($bigImage);
        $filename = $nSubData2.'.'.$extension;
        $nPath = public_path('images\yazar' .'\\' . $nSubData2. '\\' . $file->getClientOriginalName().'.'.$extension);
       // $nPath2 = public_path('images\yazar\'.$nSubData2.'\large');
        // File::delete('public/'.$data[0]['field']);



        $path = public_path($dir.'/'.$filename);
        $path2 = public_path($dirLarge.'/'.$filename);

        Image::make($nFile)->save($nPath);
      //  Image::make($nFile)->resize(250,250)->save($nPath2);


        return $dir."/".$filename;

    }
}