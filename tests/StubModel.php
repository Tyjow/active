<?php

namespace Tyjow\ActiveTest;


use Illuminate\Database\Eloquent\Model;

class StubModel extends Model
{
    protected $fillable = ['id', 'uid'];
    protected $primaryKey = 'uid';
}