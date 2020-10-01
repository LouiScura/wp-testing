<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="gallery-container <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <div class="gallery-item">
        <div class="image">
            <?php if( is_front_page() ): ?>
                <!-- <a href="<?php //the_permalink();?>"> -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 43-copied.png"/>
                    <!-- <?php// echo the_post_thumbnail(); ?> -->
                    <div class="middle-text">
                        <div class="text">TESTING</div>
                    </div>
                </a>
            <?php endif;?>
        </div>
    </div>
</div>
<?php endwhile; ?>

<!--
<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="<?php //the_permalink(); ?>">
                <img src="<?php //echo get_template_directory_uri(); ?>/img/Asset 43-copied.png"/>
                <div class="middle-text">
                    <div class="text">The Dylan</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">

            <a href="#">           
                <img src="<?php// echo get_template_directory_uri(); ?>/img/Asset 2-copied.png" />
                <div class="middle-text">
                    <div class="text">Aven</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 30.png" />
                <div class="middle-text">
                    <div class="text">101 Avenue of the Americas</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 29.png" />
                <div class="middle-text">
                    <div class="text">The greenpoint</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 32.png" />
                <div class="middle-text">
                    50 Nort 5th
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 31.png" />
                <div class="middle-text">
                    <div class="text">Eve Lower East Side</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 33.png"/>
                <div class="middle-text">
                    <div class="text">The one</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 34.png" />
                <div class="middle-text">
                    <div class="text">803 Fifth Avenue</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 36.png" />
                <div class="middle-text">
                    <div class="text">10 Rittenson Avenue</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/testing3.png" />
                <div class="middle-text">
                    <div class="text">111 Central Park North</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 37.png" />
                <div class="middle-text">
                    <div class="text">Libert Lofts</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 38.png" />
                <div class="middle-text">
                    <div class="text">Eve at The District</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container h-2">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 40.png" />
                <div class="middle-text">
                    <div class="text">A condo </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item  h-2">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 39.png" />
                <div class="middle-text">
                    <div class="text">1325 Avenue of Americas</div>
                </div>
            </a>
        </div>   
    </div>
</div>

<div class="gallery-container h-2 ">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 42.png" />
                <div class="middle-text">
                    <div class="text">Current Projects</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <div class="image">
            <a href="#">           
                <img src="<?php echo get_template_directory_uri(); ?>/img/Asset 41.png" />
                <div class="middle-text">
                    <div class="text">Hudson Hotel</div>
                </div>
            </a>
        </div>
    </div>
</div>
-->
<?php get_footer(); ?>