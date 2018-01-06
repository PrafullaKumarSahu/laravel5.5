<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function incomplete(){
    	return staic::where('compleed', 0)->get();
    }

    public function complete(){
    	return staic::where('compleed', 1)->get();
    }
}
