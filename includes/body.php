<body>
  <?php
  include "header.php";
 
  ?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/engma.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore and take part! <br></strong>In your faviourate event</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">open to all</p>
            <div>
            <h1 class="mb-4"  data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong id="demo"><br></strong></h1>
            
            </div>
            
            <div class="browse d-md-flex col-md-12" >
                <div class="row">
                  <?php
                  $type_query = "SELECT * FROM event_type";
                  $run_query = mysqli_query($con,$type_query);
                  
                  if(mysqli_num_rows($run_query) > 0){
                    $i=0;   
                    while($row = mysqli_fetch_array($run_query)){
                           
                      $type_id = $row["type_id"];
                      $type_title = $row["type_title"];
                      $tag_id=$i++;
                      echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                    }
                    
                  }
                  ?>
            	
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Certificate Guarantee</h3>
                <p>Certificate is gauranteed even for participation. </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Love the events</h3>
                <p>Events are unique and enjoyment is assured.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best place to get updated about events</h3>
                <p>Always get updated and know the time ad date of the events at a single place.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Anytime Support</h3>
                <p>Get anytime support over doubts such as registering or any queries regarding events through chat bot.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <section class=" ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	
            <h2 class="mb-4"><strong>Events</strong> Posters</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="single-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/eng.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/audi.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs03.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/bg.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/game.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/prg.jpeg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section class=" bg-light" id="events">
    	<div class="container" id="0">
    		<div class="row justify-content-start mb-5 pb-3">
             <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">events</span>
            <h2 class="mb-4"><strong>Book Your</strong>  Faviourate Event</h2>
          </div>
        </div>  
    		<div class="row" id="technical" >
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row" >
                <div class="col-md-12">
                  <div id="get_events"></div>
                      <?php
                      $event_query = "SELECT * FROM event_type";
                      $run_query1 = mysqli_query($con,$event_query);
                      
                      if(mysqli_num_rows($run_query1) > 0){
                          
                        while($row = mysqli_fetch_array($run_query1)){
                            
                        $type_id = $row["type_id"];
                        $type_title= $row["type_title"];
                        echo " 
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div> 
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                                 $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                                 $run_query2 = mysqli_query($con,$type_query);
                                 if(mysqli_num_rows($run_query2) > 0){
                       
                                 while($row = mysqli_fetch_array($run_query2)){
                                   $newtype_id    = $row['type_id'];
                                   $event_id   = $row['event_id'];
                                   $event_title = $row['event_title'];
                                   $type_title = $row['type_title'];
                                   $event_price = $row['event_price'];
                                   $img_link = $row['img_link'];
                                  
                                   if($newtype_id==$type_id){
                    
                                   echo "
                               
                                   
                                       
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                         
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'>$event_title</a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         $event_price
                                         <span>RS</span>
                                       </p>
                                       <p>Far far away, behind the word mountains, far from the countries</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i> Puneeth</span> 
                                         <span class='ml-auto'><a href='register.php?event_id=$event_id'>Book</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>";
                                   }
                    
                                 }
                                 }
                                 
                              echo"  
                              </div>
                               </div>
                             </div>
                             </div>
                             ";
                    
                    
                        }
                        
                        
                      }
                      ?>
                    
                  </div>           
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>
    
    

    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">CSE EVENT FACTS</h2>
            <span class="subheading">More than 300 students participated</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="385">0</strong>
		                <span>TOTAL PARTICIPANTS</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="298">0</strong>
		                <span>TOTAL PRIZE WON</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="87000">0</strong>
		                <span>CASH PRIZES (IN TOTAL)</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="250">0</strong>
		                <span>EVENTS HOSTED</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


   

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Best place to upskill tasks</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>We try to conduct events that not only lets students enjoy and have fun but also let them learn new things that they can implement and cherish forever. </p>
            <p>The events are organised by well trained and creative minded co-ordinators who ensure that the events not only run smoothly but also be the worth of time and money.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
            <h2 class="mb-4 pb-3"><strong>Our</strong> Team Leaders</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2013/07/Dr.Balakrishna-R.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
                        
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Dr Anthony PJ is currently working as a Professor & HOD, Dept. of Computer Science and Engineering. His research and professional career spans about 15 years of Teaching & research, 1 Year Industrial Experience at TCS. His expertise is primarily in the domains of Ad hoc Networks, Mobile Computing, Networks, and Distributed OS etc..............</p>
		                    <p class="name">Dr Anthony PJ</p>
		                    <span class="position">Professor and HOD ,CSE DEPT</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2014/01/Dr.-Usha-S.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Thrupthi , a student and also co ordinator of cultural event club. Currently studying in the 6th sem and has really good experience in conducting the events and all the cultural program. She is also very creative and enthusiastic person.etc............. </p>
		                    <p class="name">Thrupthi</p>
		                    <span class="position">Student and co ordinator of cultural event club</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    

    
		
		

    
  
                                    