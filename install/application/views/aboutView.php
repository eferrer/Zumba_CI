   
    <section id="mainContainer" class="cf"><!--main container begins-->  
    
      <h1 class="aboutHeading">ABOUT ME</h1>
    
      <section id="about"> <!--content begins-->    
        
        <article class="info"><!--content paragraphs begin-->
          <!-- <p>I'm a busy mother of 4 children and originally from the USA. I would love to inspire many other women and mothers to give Zumba Fitness a go!</p>
          <p> Many women have said to me, I would love to give it a try, but I'm too afraid, or I don't how to dance. Here's your chance to give it a go!</P>
          <p> My class will be perfect for those beginners, but it will also be a great workout for those that have also done it before.</p>
          <p>I have taught from ages 5-75 years old! So no matter what your age, shape or fitness/dance level is, become inspired with me to "Party Your Shape Into Fitness"!
          <P> If I can do it, so can you!</p> -->
            
            <?php 
            
            
            
           foreach($query_result->result_array() as $row) {
  echo $row['contentDetails'];
  
  
  echo '<hr />';
  }
      

            
            
            
            ?>
            
        </article><!--content paragraphs end-->
        
      </section> <!--content ends--> 
        
         
      <section id="rightContent" class="cf"> <!--right hand side content begins-->
        
        <section id="selfContainer">
          <article class="selfPhoto">
            <!--<img src="assets/images/zumbaLogo.jpg"/>-->
          </article>
        </section>

        

      </section> <!--right hand side content ends-->
      
      <section><!--tagline begins-->
        <h2 id="aboutTag">Its fun, its fitness,  its exercise in disguise!</h2>
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    <section id="promo" class="promoAbout"><!--promotional tag begins-->
          <p>Mention this website and receive <span class="prmsgAbout">50%</span> off all classes in your first week OR bring a friend for <span class="prmsgAbout">FREE!</span></p>
    </section><!--promotional tag begins-->
    
  </div> <!--wrapper ends-->
    
    
    