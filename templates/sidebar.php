<?php if (is_page_template( "page_bezgresna.php" )) : ?>

    <hr />
        <nav class="sidebar-menu-bezgresna">
    <h3>Bezgrešna</h3><?php wp_nav_menu(array('theme_location' => 'fmenu_bezgresna', 'container' => '')); ?>
        </nav>
    <hr />
    

<ul id="toc">
    
</ul>

<?php elseif (is_page_template("page_medaljica.php")) : ?>

    <hr />
        <nav class="sidebar-menu-medaljica">
    <h3>Čudotvorna medaljica</h3><?php wp_nav_menu(array('theme_location' => 'fmenu_medaljica', 'container' => '')); ?>
        </nav>
    <hr />
    

<ul id="toc">
    
</ul>
    
    
<?php elseif (is_page_template( "page_kolbe.php" )) : ?>

    <hr />
        <nav class="sidebar-menu-kolbe">
    <h3>sv. Maksimilijan Kolbe</h3><?php wp_nav_menu(array('theme_location' => 'fmenu_kolbe', 'container' => '')); ?>
        </nav>
    <hr />
    

<ul id="toc">
    
</ul>

<?php elseif (is_page_template("page_vojska.php")) : ?>


    <hr />
        <nav class="sidebar-menu-vojska">
    <h3>Vojska Bezgrešne</h3><?php wp_nav_menu(array('theme_location' => 'fmenu_vojska', 'container' => '')); ?>
        </nav>
    <hr />
    

<ul id="toc">
    
</ul>

<?php elseif ( is_single() || is_page() ) :  ?>


  
      <?php $args = array( 'post_type' => 'najave', 'orderby'   => 'menu_order', 'order'     => 'ASC' , 'post_count' => 11, 'posts_per_page' => 20);
        $najave = new WP_Query( $args );

        if( $najave->have_posts() ) { ?>
            <h1 class="heading-sidebar ">Najave događanja</h1>
            <div class="sidebar-najave block">
                <?php while( $najave->have_posts() ) {
                    $najave->the_post();
                ?>
                <a href="<?php the_permalink() ?>" >
                   <div class="najava">
                    <div class="datum-najave">
                        <?php   $najava_date = get_post_meta( get_the_ID(), 'najava_datum', true ); echo $najava_date; ?>
                    </div>
                    <h2><?php the_title() ?></h2>
            
    </div>
               </a>

    <?php  }   ?>
    </div>
<?php  }   ?>
   
   
  
  
      <?php $args = array( 'post_type' => 'post', 'orderby'   => 'date', 'order'     => 'DESC' ,  'posts_per_page' => 5);
        $vijesti = new WP_Query( $args ); ?>

            <h1 class="heading-sidebar ">Vijesti</h1>
            <div class="sidebar-vijesti block">
                <?php while( $vijesti->have_posts() ) {
                    $vijesti->the_post();
                ?>
               <a href="<?php the_permalink() ?>" > 
                   <div class="vijest">
                    <div class="thumb-vijesti">
                      <?php the_post_thumbnail('sidebar-thumb'); ?>
                    </div>
                    <h2><?php the_title() ?></h2>
                    <div style="clear:both"></div>
             
        </div>
               </a>
    <?php  }   ?>
    </div>
<?php endif;  ?>