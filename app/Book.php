<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
    	'title',
    	'author',
    	'description',
    	'edition',
    	'juz',
    	'isbn',
    	'preparedby',
    	'pages',
    	'cover',
    	'cate_id'
    ];
}
