<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;

class PostComposer extends Composer
{

    use AcfFields;

    public $args;
    public $post_list;

    public function __construct() {
        $this->post_list = $this->postsLoop();
    }

    public function postsLoop()
    {
        $args = get_posts([
            'post_type' => 'post',
            'posts_per_page'=>'-1',
        ]);

        $post_list = new \Wp_Query($args);
    
        return $post_list;
    }

    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'template-posts',
        'front-page',
    ];

    public function with()
    {
        return [
            'post_list' => $this->post_list,
            'fields' => collect($this->fields())->toArray()
        ];
    }
}
