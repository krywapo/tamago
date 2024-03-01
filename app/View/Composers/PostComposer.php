<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostComposer extends Composer
{
    // public function postsLoop()
    // {
    //     $posts = get_posts([
    //         'post_type' => 'post',
    //         'posts_per_page'=>'10',
    //     ]);
    
    //     return array_map(function ($post) {
    //         return [
    //             'content' => apply_filters('the_content', $post->post_content),
    //             'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
    //         ];
    //     }, $posts);
    // }

    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        //
    ];
}
