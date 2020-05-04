<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //tabela a ser usada
    protected $table = 'posts';

    // colunas com multiplas relacoes
    protected $fillable = ['body'];

    //relacoes
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
    /**
     * get show post route
     *
     * @return string
     */
    public function path()
    {
        return "/posts/{$this->id}";
    }

}
