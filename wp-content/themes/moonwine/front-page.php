<?php
    get_header();
?>

<h1>Front page</h1>

<section class="splide" aria-label="Custom Arrows Example">
    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev">
            Prev
        </button>
        <button class="splide__arrow splide__arrow--next">
            Next
        </button>
    </div>

    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="https://splidejs.com/images/slides/image-slider/01.jpg" alt="">
            </li>
            <li class="splide__slide">
                <img src="https://splidejs.com/images/slides/image-slider/02.jpg" alt="">
            </li>
            <li class="splide__slide">
                <img src="https://splidejs.com/images/slides/image-slider/03.jpg" alt="">
            </li>
        </ul>
    </div>
</section>

<?php get_footer() ?>