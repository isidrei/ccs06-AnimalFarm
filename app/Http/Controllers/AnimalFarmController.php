<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalFarmController extends Controller
{

    const BOOK_NAME = 'Animal Farm';
    const BOOK_AUTHOR = 'George Orwell';
    const CHAPTERS = 10;
   public function index()
   {
       return view('index', [
           'book_name' => static::BOOK_NAME,
           'book_author' => static::BOOK_AUTHOR,
           'book_chapters' => static::CHAPTERS,
       ]);
   }
   public function readChapter($chapter_number) 
   {
       return view ('read-chapter',[
        'book_name' => static::BOOK_NAME,
        'book_author' => static::BOOK_AUTHOR,
        'book_chapters' => static::CHAPTERS,
        'chapter_number' => $chapter_number

       ]);
   }

   
   public function readAllChapters()
   {
    return view ('all-chapters',[
        'book_name' => static::BOOK_NAME,
        'book_author' => static::BOOK_AUTHOR,
        'book_chapters' => static::CHAPTERS,
    ]);
}
   
    
         

    
}
