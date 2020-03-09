<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
    public function publish()
    {
        $this->published_at = Carbon::now('Europe/Berlin');
        // Carbon::createFromTimestamp( strtotime($document->created_at) )->format('d.m.Y - H:i:s');
        $this->save();
    }
}
