<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class User extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    /**
     * Append links attribute.
     *
     * @var array
     */
    protected $appends = ['_links'];
    /**
     * Set attributes links
     *
     * @return array
     */
    public function getLinksAttribute()
    {
        return [
            [
                'rel' => 'self',
                'method' => 'GET',
                'href' => app()->make('url')->to("/users/{$this->attributes['_id']}")
            ],
            [
                'rel' => 'update',
                'method' => 'PUT',
                'href' => app()->make('url')->to("/users/{$this->attributes['_id']}")
            ]
        ];
    }
}
