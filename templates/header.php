<header class="banner">
     <div class="wrap-head">
          <div class="container">
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>

            <a class="logo-vojska" href="<?php bloginfo('url'); ?>">
              <img src="<?php bloginfo('template_url') ?>/assets/images/logo-vojska.png" alt="<?php bloginfo('name'); ?>" />
            </a>      

             <div class="ljubav-stvara">
                  <img src="<?php bloginfo('template_url') ?>/assets/images/samo-ljubav-stvara.png" alt="Samo ljubav stvara" />   
             </div>
            <?php if( is_home() || is_front_page() ): ?> 
             <a class="logo-mi" href="http://www.mi-international.org" target="_blank">
              <img src="<?php bloginfo('template_url') ?>/assets/images/logo-mi.png" alt="M.I. International" />
            </a>  
            <?php endif; ?>
          </div>
      
      </div>
       <div id="nav-wrap">
               <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Izbornik</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            
            <a  href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_url') ?>/assets/images/logo-vojska.png" alt="<?php bloginfo('name'); ?>" class="logo" />
           </a>
        
        <div class="nav-container container">
            <nav id="main-nav" class="collapse navbar-collapse" role="navigation"><?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'container' => '')); ?> 
            
            
            <a class="logo-facebook" href="https://www.facebook.com/Vojska-Bezgre%C5%A1ne-Militia-Immaculatae-459460664264951/?notif_t=page_fan" target="_blank">
              <img src="<?php bloginfo('template_url') ?>/assets/images/FB-f-Logo__white_29.png" alt="M.I. International" />
            
            </a> 
            <?php get_search_form() ?>
            
            </nav> 
            
        </div>
    </div>
    
          
    <div style="clear:both; width:100%; height:1px;"></div>
    
    
    
    <?php if( is_front_page() ): ?> 
        <div class="menu-istaknuto">
              <div class="container">
                <div class="four-menu bezgresna col-xs-12 col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="fmenu-hover">
                            <nav class="fmenu-bezgresna"><?php wp_nav_menu(array('theme_location' => 'fmenu_bezgresna', 'container' => '')); ?></nav>
                        </div>
                    </div>
                    <h1 class="bezgresna">BEZGREŠNA</h1>
                    <h4>Dar života</h4>
                </div>
                <div class="four-menu medaljica col-xs-12 col-sm-6 col-lg-3">
                    <div class="box">
                    <div class="fmenu-hover">
                            <nav class="fmenu-medaljica"><?php wp_nav_menu(array('theme_location' => 'fmenu_medaljica', 'container' => '')); ?></nav>
                        </div>
                    </div>
                    <h1 class="medaljica">Čudotvorna medaljica</h1>
                    <h4>Dar Bezgrešne</h4>
                </div>
                <div class="four-menu kolbe col-xs-12 col-sm-6 col-lg-3">
                    <div class="box">
                    <div class="fmenu-hover">
                            <nav class="fmenu-kolbe"><?php wp_nav_menu(array('theme_location' => 'fmenu_kolbe', 'container' => '')); ?></nav>
                        </div>
                    </div>
                    <h1 class="kolbe">Maksimilijan Kolbe</h1>
                    <h4>U vrtlogu života</h4>
                </div>
                <div class="four-menu vojska col-xs-12 col-sm-6 col-lg-3">
                    <div class="box">
                    <div class="fmenu-hover">
                            <nav class="fmenu-vojska"><?php wp_nav_menu(array('theme_location' => 'fmenu_vojska', 'container' => '')); ?></nav>
                        </div>
                    </div>
                    <h1 class="vojska-bezgresne">Vojska Bezgrešne</h1>
                    <h4>Viđenje katoličkoga života u novome obliku</h4>
                </div>
               
     <h3 class="molitva">O Marijo, bez grijeha začeta, moli za nas koji se Tebi utječemo, i za sve one koji se tebi ne utječu,
a naročito za neprijatelje svete Crkve, i za sve one koji su Tebi preporučeni!</h3>
            </div>
            
            
        </div>
    
    <?php endif; ?>
</header>
