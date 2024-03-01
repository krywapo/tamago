<section class="splide" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">
        <?php var_dump($fields); ?>
        @if($fields)
            @foreach($fields['relationship_field'] as $post)  

            <li class="splide__slide">
                <x-post-card post-id="{{ $post->ID }}"/>
            </li>
                
            @php(wp_reset_postdata())
            @endforeach
        @endif

      </ul>
    </div>
</section>