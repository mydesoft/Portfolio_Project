<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactCreated;

class contact extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message'];
    public static function boot(){
        parent :: boot();

        static::created(function ($contact){

            \Mail::to('olubantylove@gmail.com')->send(
                new ContactCreated($contact)

            );
        });
    }

}
