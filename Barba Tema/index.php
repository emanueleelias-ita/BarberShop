<?php get_header(); ?>
<article>
      
      <h1 >Barber Shop</h1 >
        <p id="p1">Da noi puoi ritoccare la tua barba</p>
        <p>La possibilità di emergere nella società attuale è sempre più difficile, e questo comporta una serie di conseguenze importanti: la mancanza di sicurezza e di equilibrio individuale, che contribuiscono a minare le possibilità di successo che abbiamo.

            Uno degli aspetti più importanti è “la propria immagine”...cosa comunichiamo agli altri a livello non verbale ?
            
            La comunicazione non verbale pesa per il 55% sull’opinione che le altre persone hanno di te.
            
            Se il tuo modo di vestire di curare la tua estetica si rifà alla moda e non tiene conto di come sei tu, stai comunicando qualcosa di falso e questo ti rende vulnerabile ed in molti casi un perdente poiché non infondi credibilità.
            
            ...la verità è che la cura della tua immagine non può prescindere da chi sei tu nella tua unicità.
            
            Il nostro scopo è quello di individuare i tuoi tratti caratteriali per portare alla luce la tua vera personalità, proponendoti il look estetico più idoneo a comunicare te stesso sia con lo stile del taglio dei tuoi capelli, della barba e dei baffi, sia indicandoti tutta una serie di prodotti coordinati tra loro per rendere più efficace la tua immagine ed il tuo stile.</p>

    </article>
    
    <img src="pole.webp" alt="Barber's pole" id="pole">
    <div id="page">
      <div id="riga1">
        <div id="tariffe">
          <table>
            <h1 id="h11">Tariffe</h1>
            <tr><td>Taglio barba</td><td>Taglio capelli</td><td>Taglio barba + Taglio capelli</td></tr>
            <tr><td>9 euro</td><td>14 euro</td><td>19 euro</td></tr>
        </table>
        </div>
       
        <div id="dove">
        <h3>Torino, Italia</h3>
        <p>Via Pietro Micca 35</p>
      
        <h3>224 8896477</h3>
        <p>LUN - VEN 8:00 - 17:00</p>
        </div>
      </div>
  
     
       <div id="riga2">
        <div id="map" style="height: 30%;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2817.763005183734!2d7.6763090150574245!3d45.07031846766055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d728fd49b99%3A0x400884c839a7fce2!2sVia%20Pietro%20Micca%2C%2035%2C%2010121%20Torino%20TO!5e0!3m2!1sit!2sit!4v1577615238349!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div id="form">
         
               
          <form  method="post" novalidate="novalidate">
            <h2 >Contattaci</h2>
               
    
                  <textarea cols="30" rows="9"
    
                    placeholder='Messaggio e orario scelto'></textarea>
              
            
                  <input  type="text" placeholder='Nome'>
               
                  <input id="email" type="email"  placeholder='E-mail'>
               
                
              <button type="submit" >Invia</button>
        
          </form>
        </div>
       </div>
      
    </div>
    <section>
    <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
    </section>
    
<?php get_footer(); ?>