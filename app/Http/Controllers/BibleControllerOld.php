<?php
<?php

namespace App\Http\Controllers;

class BibleControllerOld extends Controller
{
    public function download($book_name)
    {
        $bible_path = resource_path('bible');
       // $file_prefix = $book_name . '--chapter';
        
        $chapter_file_array = [];

        foreach (glob($bible_path . '/*.txt') as $file_path) {
            $file_name = basename($file_path);
            // if $book_name is NOT all, then download only the one book
            if ($book_name != 'all'){
               if (substr($file_name, 0, strlen($file_prefix)) == $file_prefix) {
                    array_push($chapter_file_array, $file_path);
                }
            }
            else{
                array_push($chapter_file_array, $file_path);
            }
        }
        
        if(count($chapter_file_array) > 0) {
            $zip_file = public_path() . '/zip/book.zip';
            //if this fails go back to GoPublic and change structure
           
            $zip = new \ZipArchive();
            $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

            foreach($chapter_file_array as $file_path){
                $zip->addFile( $file_path, basename($file_path));
            }

            $zip->close();
            if(isset($_SERVER['HTTP_ORIGIN'])) {
                $origin = $_SERVER['HTTP_ORIGIN'];
                 //if($origin == 'http://127.0.0.1/laravel_newcreation') {
               // }
              }

            return response()
                ->download($zip_file)
                ->deleteFileAfterSend(true);
        } else {
            abort(404);
        }
    }
}
