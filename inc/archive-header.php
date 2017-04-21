<header class="archive-header">
    <h1 class="archive-title">
    <?php
        if ( is_category() ) :
            single_cat_title();

        elseif ( is_tag() ) :
            single_tag_title();

        elseif ( is_author() ) :
            printf( __( 'Author: %s', 'delighted-calligraphy' ), '<span>' . get_the_author() . '</span>' );

        elseif ( is_day() ) :
            printf( __( 'Day: %s', 'delighted-calligraphy' ), '<span>' . get_the_date() . '</span>' );

        elseif ( is_month() ) :
            printf( __( 'Month: %s', 'delighted-calligraphy' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'delighted-calligraphy' ) ) . '</span>' );

        elseif ( is_year() ) :
            printf( __( 'Year: %s', 'delighted-calligraphy' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'delighted-calligraphy' ) ) . '</span>' );
        else :
            _e( 'Archives', 'delighted-calligraphy' );

        endif;
    ?>
    </h1>
</header><!-- .page-header -->