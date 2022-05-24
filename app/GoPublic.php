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
 $public_folder = config('app.public_folder');

 return $this->basePath.DIRECTORY_SEPARATOR.'../../public_html';

 }
}