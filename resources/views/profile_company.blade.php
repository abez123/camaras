@include('layouts.partials.htmlheader')

<body>
<div id="main-wrapper"> 
  
  @include('layouts.partials.top_toolbar')  
@include('layouts.partials.navmenu')  
  <div class="compny-profile"> 
    <!-- SUB Banner -->
    <div class="profile-bnr">
      <div class="container"> 
        
        <!-- User Iinfo -->
        <div class="user-info">
          <h1>UOU Motors Inc. <a data-toggle="tooltip" data-placement="top" title="Verified Member"><img src="images/icon-ver.png" alt="" ></a> </h1>
          <h6>Automotive</h6>
          <p>7979 Leary Way Northeast
            Redmond, WA 98052  (<a href="#.">map</a> / <a href="#.">street</a>)</p>
          
          <!-- Social Icon -->
          <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div>
          
          <!-- Stars -->
          <ul class="row">
            <li class="col-sm-6">
              <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span>(06)</span> </div>
            </li>
            <li class="col-sm-6">
              <p><i class="fa fa-bookmark-o"></i> 28 Bookmarks</p>
            </li>
          </ul>
          
          <!-- Followers -->
          <div class="followr">
            <ul class="row">
              <li class="col-sm-6">
                <p>Followers <span>(31)</span></p>
              </li>
              <li class="col-sm-6">
                <p>Following <span>(38)</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Top Riht Button -->
        <div class="right-top-bnr">
          <div class="connect"> <a href="#." data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Connect</a> <a href="#."><i class="fa fa-share-alt"></i> Share</a>
            <div class="bt-ns"> <a href="#."><i class="fa fa-bookmark-o"></i> </a> <a href="#."><i class="fa fa-envelope-o"></i> </a> <a href="#."><i class="fa fa-exclamation"></i> </a> </div>
          </div>
        </div>
      </div>
      
      <!-- Modal POPUP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="container">
              <h6><a class="close" href="#." data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a> Send Message</h6>
              
              <!-- Forms -->
              <form action="#">
                <ul class="row">
                  <li class="col-xs-6">
                    <input type="text" placeholder="First Name ">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Last Name">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Country">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Email">
                  </li>
                  <li class="col-xs-12">
                    <textarea placeholder="Your Message"></textarea>
                  </li>
                  <li class="col-xs-12">
                    <button class="btn btn-primary">Send message</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Profile Company Content -->
    <div class="profile-company-content main-user" data-bg-color="f5f5f5">
      <div class="container">
        <div class="row"> 
          
          <!-- Nav Tabs -->
          <div class="col-md-12 ">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
              <li><a data-toggle="tab" href="#jobs">Jobs</a></li>
              <li><a data-toggle="tab" href="#contact">Contact</a></li>
              <li><a data-toggle="tab" href="#comite">Comités</a></li>
              <li><a data-toggle="tab" href="#evento">Eventos</a></li>
            </ul>
          </div>
          
          <!-- SIDE BAR -->
          <div class="col-md-4"> 
            
            <!-- Company Information -->
            <div class="sidebar">
              <h5 class="main-title">Company Information</h5>
              <div class="sidebar-thumbnail"> <img src="images/company-thumb.jpg" alt=""> </div>
              <div class="sidebar-information">
                <ul class="single-category">
                  <li class="row">
                    <h6 class="title col-xs-6">Industry</h6>
                    <span class="subtitle col-xs-6">Automotive</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Location</h6>
                    <span class="subtitle col-xs-6">California, USA</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Number of Employees</h6>
                    <span class="subtitle col-xs-6">11,245</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Legal Entity</h6>
                    <span class="subtitle col-xs-6">Gesselschaft</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Company Registration</h6>
                    <span class="subtitle col-xs-6">HSD7589</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Operating Hours</h6>
                    <span class="subtitle col-xs-6">10:00 AM - 5:00 PM</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Contacts</h6>
                    <div class="col-xs-6"> <span class="subtitle">*****************<i class="fa fa-exclamation-circle"></i></span> <span class="subtitle">***************** <i class="fa fa-exclamation-circle"></i></span> <a href="#.">example@example.com</a> <a href="#.">example.com</a> </div>
                  </li>
                </ul>
              </div>
            </div>
            
            <!-- Company Rating -->
            <div class="sidebar">
              <h5 class="main-title">Company Rating</h5>
              <div class="sidebar-information">
                <ul class="single-category com-rate">
                  <li class="row">
                    <h6 class="title col-xs-6">Expertise:</h6>
                    <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Knowledge:</h6>
                    <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i></span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Quality::</h6>
                    <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Price:</h6>
                    <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Services:</h6>
                    <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> </li>
                </ul>
              </div>
            </div>
            
            <!-- Company Rating -->
            <div class="sidebar">
              <h5 class="main-title">Contact</h5>
              <div class="sidebar-information form-side">
                <form action="#">
                  <input type="text" placeholder="Name & Surname">
                  <input type="text" placeholder="E-mail address">
                  <textarea placeholder="Your Message"></textarea>
                  <button class="btn btn-primary">Send message</button>
                </form>
              </div>
            </div>
          </div>
          
          <!-- Tab Content -->
          <div class="col-md-8">
            <div class="tab-content"> 
              
              <!-- PROFILE -->
              <div id="profile" class="tab-pane fade in active">
                <div class="profile-main">
                  <h3>About the Company</h3>
                  <div class="profile-in">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus 
                      similique aliquidautem laudantium sapiente ad enim ipsa modi labo rum accusantium deleniti neque. </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat 
                      accusamus nemoitate id molestiae consectetur quae pariatur repudi andae vel ex quaerat nam iusto aliquid 
                      laborum quia adipisci aut ut imcati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum
                      assumenda.</p>
                    
                    <!-- Video -->
                    <iframe src="https://www.youtube.com/embed/uVju5--RqtY"></iframe>
                  </div>
                </div>
                
                <!-- Services -->
                <div class="profile-main">
                  <h3>Services</h3>
                  <div class="profile-in profile-serv">
                    <h6>Here’s an overview of the services we provide.</h6>
                    <div class="media">
                      <div class="media-left">
                        <div class="icon"> <img src="images/icon-prifile-1.png" alt="" > </div>
                      </div>
                      <div class="media-body">
                        <h6>Engine diagnostics and repairs</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, 
                          mollitia, voluptatibus similique aliquidautem laudantium sapiente ad enim ipsa modi 
                          labo rum accusantium deleniti neque.</p>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <div class="icon"> <img src="images/icon-prifile-2.png" alt="" > </div>
                      </div>
                      <div class="media-body">
                        <h6>Engine diagnostics and repairs</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, 
                          mollitia, voluptatibus similique aliquidautem laudantium sapiente ad enim ipsa modi 
                          labo rum accusantium deleniti neque.</p>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <div class="icon"> <img src="images/icon-prifile-3.png" alt="" > </div>
                      </div>
                      <div class="media-body">
                        <h6>Engine diagnostics and repairs</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, 
                          mollitia, voluptatibus similique aliquidautem laudantium sapiente ad enim ipsa modi 
                          labo rum accusantium deleniti neque.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Jobs -->
              <div id="jobs" class="tab-pane fade">
                <div class="header-listing">
                  <h6>Sort by</h6>
                  <div class="custom-select-box">
                    <select name="order" class="custom-select">
                      <option value="0">Most popular</option>
                      <option value="1">The latest</option>
                      <option value="2">The best rating</option>
                    </select>
                  </div>
                  <ul class="listing-views">
                    <li class="active"><a href="#"><i class="fa fa-list"></i></a></li>
                    <li><a href="#"><i class="fa fa-th"></i></a></li>
                    <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                  </ul>
                </div>
                <div class="listing listing-1">
                  <div class="listing-section">
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Skills required:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                          <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                          <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                            <div class="contact-share">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Skills required:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                          <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                          <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                            <div class="contact-share">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Contact -->
              <div id="contact" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Contact the Company</h3>
                  <div class="profile-in">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quis tenetur velit! Provident eum molestias aperiam suscipit distinctio ipsum cupiditate quasi, dolor sunt, cum reprehenderit quibusdam, repellendus eaque, quas magni.</p>
                    <form action="#">
                      <input type="text" placeholder="Name & Surname">
                      <input type="text" placeholder="E-mail address">
                      <input type="text" placeholder="Phone Number">
                      <textarea placeholder="Your Message"></textarea>
                      <button class="btn btn-primary">Send message</button>
                    </form>
                  </div>
                </div>
              </div>

 <!-- Comité -->
              <div id="comite" class="tab-pane fade">
                <div class="header-listing">
                  <h6>dfsdafs</h6>
                  <div class="custom-select-box">
                    <select name="order" class="custom-select">
                      <option value="0">Most popular</option>
                      <option value="1">The latest</option>
                      <option value="2">The best rating</option>
                    </select>
                  </div>
                  <ul class="listing-views">
                    <li class="active"><a href="#"><i class="fa fa-list"></i></a></li>
                    <li><a href="#"><i class="fa fa-th"></i></a></li>
                    <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                  </ul>
                </div>
                <div class="listing listing-1">
                  <div class="listing-section">
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Skills required:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                          <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                          <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                            <div class="contact-share">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Skills required:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                          <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                          <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                            <div class="contact-share">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
 <!-- Comité -->
              <div id="evento" class="tab-pane fade">
                <div class="header-listing">
                  <h6>dfffs</h6>
                  <div class="custom-select-box">
                    <select name="order" class="custom-select">
                      <option value="0">Most popular</option>
                      <option value="1">The latest</option>
                      <option value="2">The best rating</option>
                    </select>
                  </div>
                  <ul class="listing-views">
                    <li class="active"><a href="#"><i class="fa fa-list"></i></a></li>
                    <li><a href="#"><i class="fa fa-th"></i></a></li>
                    <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                  </ul>
                </div>
                <div class="listing listing-1">
                  <div class="listing-section">
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Skills required:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                          <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                          <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                            <div class="contact-share">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Skills required:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> email@mail.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                          <li><a href="#"><i class="fa fa-globe"></i> www.webstite.com</a></li>
                          <li class="share-button"> <a href="#"><i class="fa fa-share"></i> Share</a>
                            <div class="contact-share">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@include('layouts.partials.footer')
@include('layouts.partials.scripts')
</body>


</html>