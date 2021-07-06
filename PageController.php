<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Post;

class PageController extends VoyagerBaseController
{

    public function page_clone()
    {
        //Get post by id and toggle the status from PUBLISHED to PENDING and vice versa
        $page = Page::where('id', \request("id"))->first();
        dd($page);
        //$post->status = $post->status=="PENDING"?"PUBLISHED":"PENDING";
        //$post->save();
        //return redirect(route('voyager.posts.index'));
    }

}