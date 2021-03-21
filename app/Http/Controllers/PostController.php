<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChannelResourceCollection;
use App\Models\Channel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return new ChannelResourceCollection(Channel::all());
    }
}
