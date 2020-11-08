<?php get_template_part('templates/page', 'header'); ?>

<section class="citat prvi">
   
    <div class="container">
        <p><span>"Bezgrešna - evo našeg ideala!</span></p>
        <p>Približiti se Njoj, postati sličnima Njoj, dopustiti da Ona zaposjedne naše srce, kao i čitavo naše biće, da Ona živi i djeluje u nama i preko nas, da Ona sama ljubi Boga našim srcem, da Joj pripadamo bez ikakve zadrške!"</p>
        <p class="autor-citata">sv. Maksimilijan Kolbe</p>
    </div>
    
</section>

<section class="vijesti">
   <div class="container">
        <h1 class="heading">Vijesti</h1>
        <div class="posts">
            
             <?php query_posts('posts_per_page=8');?>
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/content-home', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
            <?php endwhile; ?>
        </div>
        <?php if ( wp_count_posts > 1 ) { ?>
       
                <div class="opsirnije">
                    <a href="<?php echo get_permalink( get_option('page_for_posts' ) );  ?>" >&raquo; Ostale vijesti</a>
                </div>
            <?php
            }
            ?>
    </div>
    
</section>

<section class="najave">
    <div class="container">
                <h1 class="heading">Najave</h1>
                <div class="najave-posts">    
                   <?php 
                    $args = array('post_type' => 'najave');
                    $loop_najave = new WP_Query( $args );
                    while ( $loop_najave->have_posts() ) : $loop_najave->the_post()?>
                      <?php get_template_part('templates/content-najave', get_post_type() != 'najave' ? get_post_type() : get_post_format()); ?>
                    <?php endwhile; ?>
                </div>
                <?php  ?>
                <div class="marija-fest">
                    <img src="http://www.vojska-bezgresne.com/wp-content/uploads/2018/02/v-2plakat-lourdes-A3-60.jpg" style="max-width:100%; height:auto;" />                  
                </div> <?php ?>
            </div>
</section>

<section class="video">
    <div class="container">
        <div class="video-responsive">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9jLxudMyrgU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
            </div>
</section>

<section class="bezgresna istaknuto">
    <div class="container">
           <div class="tekst">
        <h2>Bezgrešna</h2>
        <p>Vrhunac ljubavi stvorenja koje se vraća Bogu jest Bezgrešna, biće bez ljage grijeha, sva lijepa, sva Božja. Ni za trenutak njezina se volja nije udaljila od volje Božje. Ona oduvijek u slobodi pripada Bogu. Upravo se u njoj događa čudo sjedinjenja Boga sa stvorenjem.</p>
        <h5>sv. Maksimilijan Kolbe</h5>
        <hr class="clear-both" />     
        <h3>"Ja sam Bezgrešno začeće!"</h3>
               <h5>Bogorodica Bernardici prigodom XVI. ukazanja</h5>
        <hr class="clear-both" />        
       <div class="meni-bezgresna section-menu">  
            <nav class="fmenu-bezgresna"><?php wp_nav_menu(array('theme_location' => 'fmenu_bezgresna', 'container' => '')); ?>
            </nav>
            <div class="clear" style="clear:both;"></div>
       </div>
    </div>
       
    </div>  
    
</section>



<section class="citat">
   
    <div class="container">
        <p>“Mržnja nije stvarateljska snaga. <span>Samo ljubav stvara!</span>”</p>
        <p class="autor-citata">sv. Maksimilijan Kolbe</p>
    </div>
    
</section>



<section class="medaljica istaknuto">
    <div class="container">
           <div class="tekst">
        <h2>Čudotvorna medaljica</h2>
        <p><img src="<?php bloginfo('template_url') ?>/assets/images/sct-medaljica-slika.png" />Vojska Bezgrešne ima svoj znak, „municiju“, kako ju naziva Maksimilijan Kolbe a to je Čudotvorna medaljica. Mnogobrojne milosti Marija je posredovala onima koji su je s vjerom nosili.</p>
        <hr />        
        <p class="bernardica">"U tom trenutku, bila sam i nisam bila. Osjećala sam, da se stvorio okvir okolo Presvete Djevice, pomalo ovalan, u kojem su se, u obliku polukruga, mogle pročitati ove riječi, od Marijine desne do njene lijeve ruke, zlatnim slovima napisane: 'O Marijo, bez grijeha začeta, moli za nas koji se tebi utječemo'. Potom začuh glas koji mi reče: Daj izraditi  medaljicu po ovome uzoru. Svi oni koje će je nositi oko vrata dobit će velike milosti. Milosti će biti mnoge za one koji će je nositi s vjerom."</p>
               <h5>Sv. Katarina Laboure</h5>
        <hr class="clear-both" />        
       <div class="meni-medaljica section-menu">  
            <nav class="fmenu-bezgresna"><?php wp_nav_menu(array('theme_location' => 'fmenu_medaljica', 'container' => '')); ?>
            </nav>
            <div class="clear" style="clear:both;"></div>
       </div>
    </div>
       
    </div>  
    
</section>



<section class="citat">
   
    <div class="container">
        <p>"Budući da je na nama osvojiti svijet, kao i svaku pojedinu dušu... zamišljam kako s vremenom nigdje neće biti niti jedne jedine duše koja o vratu ne bi nosila Čudotvornu medaljicu i ne bi pripadala Vojsci Bezgrešne. Samo ovako će se uništiti sva krivovjerja, svi raskoli; okorjeli će se grešnici, preko Bezgrešne, vratiti Bogu, Njegovu Srcu punom ljubavi."</p>
        <p class="autor-citata">sv. Maksimilijan Kolbe</p>
    </div>
    
</section>
      

<section class="kolbe istaknuto">
    <div class="container">
        <h2><img src="<?php bloginfo('template_url') ?>/assets/images/kruna-bijela.png"  class="kruna bijela" />Maksimilijan Kolbe<img src="<?php bloginfo('template_url') ?>/assets/images/kruna-crvena.png" class="kruna crvena" /></h2>
        <p class="osnivac">Utemeljitelj Vojske Bezgrešne</p>
        
            <img src="<?php bloginfo('template_url') ?>/assets/images/kolbe.png"  class="kolbe" />
             
       <p class="kolbe-citat">"Je li moguće da se naši neprijatelji toliko trude nadvladati, a mi da bismo ostali dokoni i zadovoljili se time da pojačamo molitvu, a da pritom ništa ne poduzmemo?<br />
<span>Ne posjedujemo li jače oružje: zaštitu Neba i Bezgrešne Djevice!"</span><span class="autor">sv. Maksimilijan Kolbe</span></p>
<hr class="clear-both" />  
       <div class="meni-kolbe section-menu">  
           <h3>Životopis sv. Maksimilijana:</h3>
            <nav class="fmenu-bezgresna"><?php wp_nav_menu(array('theme_location' => 'fmenu_kolbe', 'container' => '')); ?>
            </nav>
       </div>
       
       <img src="<?php bloginfo('template_url') ?>/assets/images/kolbe-slike.jpg"  class="kolbe-slike" />
       
    
            <div class="clear" style="clear:both;"></div>
    </div>
</section>

<section class="kolbe-75 istaknuto">
    <div class="container">
            <div class="menu-75">
                <h2>Kolbeova godina</h2>
                <h3>14.8.2015. - 14.8.2016. </h3>
                <h4>75. obljetnica smrti</h4>
            
       <div class="meni-kolbe75 section-menu">  
            <nav class="fmenu-kolbe75"><?php wp_nav_menu(array('theme_location' => 'fmenu_kolbe75', 'container' => '')); ?>
            </nav>
        </div>
                
            </div>
            
            <img src="<?php bloginfo('template_url') ?>/assets/images/logo-kolbe-75.png"  class="kruna bijela" />
    
    
    </div> 
</section>



<section class="citat">
   
    <div class="container">
        <p>"Ne trebamo raditi drugo doli slijediti volju Gospodnju i nastojati mu se svidjeti. Tražiti Krista u svakom stvorenju. Živjeti u velikom siromaštvu kao siromasi i službenici siromaha u velikoj poniznosti. Živjeti Božji poziv i poziv svoje Crkve."</p>
        <p class="autor-citata">sv. Maksimilijan Kolbe</p>
    </div>
    
</section>

<section class="vojska istaknuto">
    <div class="container">
        <div class="left">
<img class="vojska" src="<?php bloginfo('template_url') ?>/assets/images/logo-vojska.png" alt="<?php bloginfo('name'); ?>" />
          
           <div class="meni-vojska section-menu">  
                <nav class="fmenu-kolbe75"><?php wp_nav_menu(array('theme_location' => 'fmenu_vojska', 'container' => '')); ?>
                </nav>
            </div>
        </div>    
            <img src="<?php bloginfo('template_url') ?>/assets/images/bezgresna.png"  class="kruna bijela" />
    
    
    </div> 
</section>




<section class="citat footer">
   
    <div class="container">
        <p>“Sjedinjenje s Bezgrešnom, biti sredstvo u njezinim bezgrešnim rukama: evo tajne koja osigurava uspjeh.”</p>
        <p class="autor-citata">sv. Maksimilijan Kolbe</p>
    </div>
    
</section> 