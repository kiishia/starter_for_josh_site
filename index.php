<?php get_header(); ?>

      
      <section class="container fluid aboutbg text-center">
      
      <div class="container">
          
          
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=10');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    
    	

            
      </div><!--  container-->
    </section>

          
          <div class="blocker"></div>
          
          </div>

      </section>




      <section class="container-fluid articlesbg">
          <div class="container">
            <div class="row">
              <div>
                <h3 class="text-center article-title">LATEST ARTICLES</h3>
                
                </div>
                
                <div class="col-md-4 article-cent">
                    
                    
<?php $post_id = 5317;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>                       

                    
          </div>
                
<!--                Start of column 2 -->
                
                <div class="col-md-4 article-cent">
                    
     <img class="img-responsive" alt="portrait" src="images/openarms.jpg">
        
    <h4>A MODEL</h4>
    <p class="date">12 December 2020</p>
                    <p>STS has never been shy of seeking new terrains of  investigation. 
More and  more  STS s cholars are  starting to explore and 
intervene in the arts.  This object of study  brings  new challenges 
and  opportunities that we want  to explore in this session.   
We would  like to gather first of all simply  new kinds of  
knowledge arising from  STS study  of the arts.  </p>
                    <p class="readmore">CONTINUE READING</p>
                    
          </div>
                
<!--                end of column 2-->
                
                
                
                
<!--                Start of column 3 -->
                
                <div class="col-md-4 article-cent">
                    
                    
   <img class="img-responsive" alt="portrait" src="images/greengrass.jpg">               
    <h4>A MODEL</h4>
    <p class="date">12 December 2020</p>
                    <p>STS has never been shy of seeking new terrains of  investigation. 
More and  more  STS s cholars are  starting to explore and 
intervene in the arts.  This object of study  brings  new challenges 
and  opportunities that we want  to explore in this session.   
We would  like to gather first of all simply  new kinds of  
knowledge arising from  STS study  of the arts.  </p>
                    <p class="readmore">CONTINUE READING</p>
                    
          </div>
                
<!--                end of column 3-->
                
                
                
          </div>
<!--              row-->
          </div>
<!--          container-->
      
      </section>
      
<?php get_footer(); ?>