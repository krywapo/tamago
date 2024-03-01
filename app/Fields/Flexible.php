<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Flexible extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $flexible = Builder::make('flexible');

        $flexible
            ->setLocation('post_type', '==', 'page')
                ->and('page_type', '==', 'front_page')
                ->or('page', '==', 33);

        $flexible
        ->addRelationship('relationship_field', [
            'label' => 'Wybierz treści',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => [],
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'post_type' => ['post'],
            'taxonomy' => [],
            'filters' => [
                0 => 'search',
                1 => 'post_type',
                2 => 'taxonomy',
            ],
            'elements' => '',
            'min' => '',
            'max' => '',
            'return_format' => 'object',
        ]);

        return $flexible->build();
    }
}
