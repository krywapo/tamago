<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    public $postImage;
    public $postTitle;
    public $postExcerpt;
    public $postLink;
    public $postTime;

    protected $imageId;

    public function __construct($postId = null) {
        $this->postId = $postId;
        $this->postImage = $this->getImage();
        $this->postTitle = $this->getPostTitle();
        $this->postExcerpt = $this->getExcerpt();
        $this->postLink = $this->getLink();
        $this->postTime = $this->getTime();
    }

    protected function getImage()
    {
        return get_the_post_thumbnail($this->postId, 'medium_large');
    }

    protected function getPostTitle()
    {
        return get_the_title($this->postId);
    }

    protected function getTime()
    {
        return human_time_diff( get_the_time( 'U', $this->postId ), current_time( 'timestamp' ) ).' '.__( 'temu' );    
    }

    protected function getExcerpt()
    {
        return get_the_excerpt($this->postId);
    }

    protected function getLink()
    {
        return get_the_permalink($this->postId);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
