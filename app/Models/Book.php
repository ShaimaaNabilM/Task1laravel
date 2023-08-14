<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    // public $timestamps=false;
    protected $fillable=[
        "title",
        "price",
        "description",
        "pic",
        "bok_id"


    ];
      /**
     * Get the category that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'bok_id');
    } 

    public static function uploadFile($request, $neededFile)
    {
        $fileName = "book_" . time() . '_' . $neededFile->getClientOriginalName();

        $request->file('pic')->storeAs(
            'public/books',
            $fileName
        );
        return $fileName;
        
    }
    public function tags()
{
    return $this->belongsToMany(Tag::class, 'book_tag');
}
}
