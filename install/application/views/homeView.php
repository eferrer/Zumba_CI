
    
    <section id="danceTypes">
      <p><span class="zumbaIs">Zumba is ... </span>Merengue, Salsa. Cumbia, Reggaeton, Samba, Tango, Bachata, ChaCha, Mambo, Bellydance, Calypso, Lambada, Flamenco, Rumba, HipHop, Swing, Country, Bollywood, Bhangra ...</p>
    </section>
    
    <section id="mainContainer" class="cf"><!--main container begins-->
    
      
      <section id="mainImage"><!-- image goes here -->
       <!-- <img src="assets/images/full/photo2.jpg" width="800" height="600" alt="zumba"/> -->
      </section>   
      
      <h1 class="homeHeading">What is ZUMBA Fitness?</h1>
      
      <section id="content"> <!--content begins-->    
        
        <article class="info"><!--content paragraphs begin-->
          <!-- <p>Zumba Fitness is a Latin-inspired cardio-dance workout which uses music and choreographed steps to form a fitness party atmosphere. While many of the types of dance and music featured in the program are Latin American inspired, classes can also contain many exciting and energizing styles of international music; everything from Caribbean to African beats, Indian to Arabic to Greek, from rock and roll, hip hop to pop.</p>
          
          <p>Zumba is a fun, effective and simple fitness system which features routines that use the principal of fitness interval training and resistance training. The combination of fast and slow rhythms tone and sculpt the body in order to maximize caloric output, fat burning, and total body toning.</p> 
        
          <p>If you’re looking for an exercise program that’s fun and exciting, then Zumba Fitness is for you!  The program is designed for everyone and is effective for all ages and fitness levels. The movements are easy to follow dance steps which mean that you do not have to know how to dance to do Zumba.  Once you start, you’ll get hooked and instead of dreading your workouts, you’ll be looking forward to them and wanting more.</p>
        
          <p>They don’t call it “Exercise in Disguise” for nothing!</p> -->

          <?php 
            
            $oContent = $content->row();
            echo nl2br($oContent->contentDetails);
            
            
            ?>
        </article><!--content paragraphs end-->
        
      </section> <!--content ends--> 
        
         
      <section id="rightContent" class="cf"> <!--right hand side content begins-->
        <article id="viewClasses" class="cf">
          <section class="viewClassText"><a href="class.html">View Classes&nbsp;<span class="fontAwesome">&#xf101;</span></a></section>
        </article>
        
        <section id="zumbaContainer">
          <article class="zumbaCom">
            <a href="http://www.zumba.com/">img</a>
          </article>
        </section>
      </section> <!--right hand side content ends-->
      
      <section><!--tagline begins-->
        <h2 id="homeTag">Its Zumba! Feel the music and let loose</h2>
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    
  </div> <!--wrapper ends-->
    
    
    