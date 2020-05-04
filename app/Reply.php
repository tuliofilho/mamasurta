<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    # table name to be used by model.
    protected $table = 'replies';

    # columns names to be used in mass-assignment
    protected $fillable = ['comment_id', 'body'];

    /* Relations */

    # One-to-Many inverse relationship with Comment model.
    public function comment()
    {
    	return $this->belongsTo(Comment::class, 'comment_id');
    }
}
