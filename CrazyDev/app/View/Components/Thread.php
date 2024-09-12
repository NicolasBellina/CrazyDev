<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Thread extends Component
{
    public $title;
    public $author;
    public $excerpt;
    public $timestamp;
    public $isMainThread;
    public $postId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $author, $timestamp, $excerpt = null, $isMainThread = false, $postId)
    {

        $this->title = $title;
        $this->author = $author;
        $this->timestamp = $timestamp;
        $this->excerpt = $excerpt;
        $this->isMainThread = $isMainThread;
        $this->postId = $postId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.thread');
    }
}

