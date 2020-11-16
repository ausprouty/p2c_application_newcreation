<?php namespace App;

class GoPublic extends \Illuminate\Foundation\Application
{
 /**
 * Get the path to the public / web directory.
 *
 * @return string
 */
 public function publicPath()
 {
 //$public_folder = config('app.public_folder');
$public_folder = 'htdocs';
//TODO: change is back for production
 //return $this->basePath.DIRECTORY_SEPARATOR.'../../public_html/laravel_newcreation';
 return $this->basePath.DIRECTORY_SEPARATOR.'../../' . $public_folder .'/laravel_newcreation';
 }
}