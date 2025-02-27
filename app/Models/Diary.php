<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diary extends Model
{
  use HasFactory;

  // 一括代入を許可
  protected $fillable = ['title', 'body', 'date'];
}
