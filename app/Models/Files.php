<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'file_name',
    //     'file',
    //     'subject',
    //     'cearte_by',
    // ];
    protected $table = 'files';

}
