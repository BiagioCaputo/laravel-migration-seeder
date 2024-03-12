<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getTimeIcon(){
        return $this->on_time ? 'On time' : 'Not on time';
    }

    public function getDeletedIcon(){
        return $this->deleted ? 'Yes' : 'No';
    }

}
