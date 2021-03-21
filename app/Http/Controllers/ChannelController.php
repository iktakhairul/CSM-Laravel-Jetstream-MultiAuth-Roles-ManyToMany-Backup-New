<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChannelResource;
use App\Http\Resources\ChannelResourceCollection;
use App\Http\Resources\UserResource;
use App\Models\Channel;
use PhpParser\Node\Expr\Yield_;

class ChannelController extends Controller
{
    public function index()
    {
        return new ChannelResourceCollection(Channel::all());
    }
}
