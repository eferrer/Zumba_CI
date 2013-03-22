
    
    <section id="danceTypes">
      <p><span class="zumbaIs">Zumba is ... </span>Merengue, Salsa. Cumbia, Reggaeton, Samba, Tango, Bachata, ChaCha, Mambo, Bellydance, Calypso, Lambada, Flamenco, Rumba, HipHop, Swing, Country, Bollywood, Bhangra ...</p>
    </section>
    
    <section id="mainContainer" class="cf"><!--main container begins-->
    
      
      <section id="mainImage"><!-- image goes here -->
       <!-- <img src="assets/images/full/photo2.jpg" width="800" height="600" alt="zumba"/> -->
      </section>   
      
      <h1 class="homeHeading"><!-- What is ZUMBA Fitness? -->
            <?php 
                  $oMainHeading = $mainHeading->row();
                  echo nl2br($oMainHeading->H1);
            ?>
      </h1>
      
      <section id="content"> <!--content begins-->    
        
            <article class="info"><!--content paragraphs begin-->
                  <p>
                  <?php 
                          $oContent = $content->row();
                          echo nl2br($oContent->contentDetails);
                    ?>
                    </p>
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
        <h2 id="homeTag">
            <?php 
                    $oTagline = $tagline->row();
                    echo nl2br($oTagline->tagline);
              ?>
        </h2>
      </section><!--tagline ends-->
      
    </section><!--main container ends-->
    
    
  </div> <!--wrapper ends-->
    
    
    