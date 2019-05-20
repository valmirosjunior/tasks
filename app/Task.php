<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    use SoftDeletes;

    protected $fillable = [
        "name",
        "description",
        "user_id",
    ];


    /***
     * this attribute is responsible to define the roles of validation
     * @var array
     */
    public static $rolesValidation =[
        'name' => 'required|min:3|',
    ];

    /**
     * Get all of the user's tasks.
     * @return Builder
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
