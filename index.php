<?php
require_once 'includes/MysqlConnect.php';
require_once 'includes/resize-class.php';
$con = MysqlConnect::getInstance();
$datas = $con->select("SELECT * FROM `trendmaker_portfolio` ORDER BY `portfolio_id` DESC", true);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arun - Creative Designer</title>
        
        <meta name="author" content="aruncp.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="A theme for aruncp profile page" />
        <meta name="keywords" content="arun profile, theme,css, html, jquery, transition, transform, 3d, css3" />

        <link rel="shortcut icon" href="img/favicon.png" />

        <!--[if lt IE 9]>
    <script src="../../html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <!--CSS styles-->
        <link rel="stylesheet" href="./css/bootstrap.css" />
        <link rel="stylesheet" href="./css/font-awesome.min.css" />  
        <link rel="stylesheet" href="./css/perfect-scrollbar-0.4.5.min.css" />
        <link rel="stylesheet" href="./css/magnific-popup.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <link id="theme-style" rel="stylesheet" href="./css/styles/default.css" />

        
        <!--/CSS styles-->
        <!--Javascript files-->
        <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="./js/TweenMax.min.js"></script>
        <script type="text/javascript" src="./js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="./js/jquery.carouFredSel-6.2.1-packed.js"></script>
        
        <script type="text/javascript" src="./js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="./js/jquery.dropdownit.js"></script>

        <script type="text/javascript" src="./js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="./js/ScrollToPlugin.min.js"></script>

        <script type="text/javascript" src="./js/bootstrap.min.js"></script>

        <script type="text/javascript" src="./js/jquery.mixitup.min.js"></script>

        <script type="text/javascript" src="./js/masonry.min.js"></script>

        <script type="text/javascript" src="./js/perfect-scrollbar-0.4.5.with-mousewheel.min.js"></script>

        <script type="text/javascript" src="./js/magnific-popup.js"></script>
        <script type="text/javascript" src="./js/custom.js"></script>

        <!--/Javascript files-->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>

        <div id="wrapper">
            <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

            <div id="sidebar">
                <div id="main-nav">
                    <div id="nav-container">
                        <div id="profile" class="clearfix">
                            <div class="portrate hidden-xs"></div>
                            <div class="title">
                                <h2>Arun Clarence</h2>
                                <h3>UI/UX Designer</h3>
                            </div>
                            
                        </div>
                        <ul id="navigation">
                            <li>
                              <a href="#biography">
                                <div class="icon icon-user"></div>
                                <div class="text">About Me</div>
                              </a>
                            </li>  
                            
                           <li>
                              <a href="#gallery">
                                <div class="icon icon-picture"></div>
                                <div class="text">Portfolio</div>
                              </a>
                          </li>

                            <li>
                              <a href="#contact">
                                  <div class="icon icon-calendar"></div>
                                  <div class="text">Contact Me</div>
                              </a>
                            </li>

                            <li class="external">
                              <a href="img/Arun_Resume.pdf" target="_blank">
                                  <div class="icon icon-download-alt"></div>
                                  <div class="text">Download CV</div>
                              </a>
                            </li>
                        </ul>
                    </div>        
                </div>
                
                <div class="social-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/arunclarence" target="_blank"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ArunClarence" target="_blank"><i class="icon-twitter"></i></a></li>
                        <li><a href="http://www.linkedin.com/pub/arun-clarence/46/608/275" target="_blank"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>    
            </div>

            <div id="main">
            
                <div id="biography" class="page home" data-pos="home">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <div class="row">
                                    <div class="col-sm-2 visible-sm"></div>
                                    <div class="col-sm-8 col-md-5">
                                        
                                        
                                    </div>
                                    <div class="clearfix visible-sm visible-xs"></div>
                                    <div class="col-sm-12 col-md-7">
                                        <h3 class="title">Bio</h3>
                                        <p>My journey into design began with a passion for computers and visual media during my school years. What started as curiosity about photo and video editing software soon evolved into a deeper interest in the digital space, leading me to pursue formal training in multimedia and computer hardware. I began my career as a video editor and gradually transitioned into web design, where I found my true calling in UI/UX.<br><br>
                                        

With over 10 years of experience in UI/UX design, I've developed a strong foundation in visual storytelling and user-centered design. I've worked with companies across US,UK,India and Bahrain, delivering engaging and intuitive digital experiences. Currently, I work as a Lead UI/UX Designer, partnering with clients in India and abroad to create impactful designs backed by strategy, creativity, and technical expertise. You can explore my work in the Portfolio section of this site.

</p>
                                    </div>  
                                    
                                </div>
                            </div>        
                        </div>
                    </div>

                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container_skill" ><h3 style="margin-left:42%;">Professional Skill</h3>
                                <div class="skillcontainer">
                                  <div class="skill_tools_name"><h4>Figma</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_fig"></div>
                                            	<div class="skill_percentage">95%</div>
                                        </div>
                                  <div class="skill_tools_name"><h4>Adobe XD</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_xd"></div>
                                            	<div class="skill_percentage">90%</div>
                                        </div>
                                    <div class="skill_tools_name"><h4>Photoshop</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_ps"></div>
                                            	<div class="skill_percentage">90%</div>
                                        </div>
                                     <div class="skill_tools_name"><h4>Illustrator</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_illu"></div>
                                            	<div class="skill_percentage">90%</div>
                                        </div>
                                        <div class="skill_tools_name"><h4>UX Pilot</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_illu"></div>
                                            	<div class="skill_percentage">90%</div>
                                        </div>
                                        <div class="skill_tools_name"><h4>UX Canvas.Ai</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_illu"></div>
                                            	<div class="skill_percentage">90%</div>
                                        </div>
                                        <div class="skill_tools_name"><h4>Framer</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_85"></div>
                                            	<div class="skill_percentage">85%</div>
                                        </div>
                                        <div class="skill_tools_name"><h4>ChatGpt</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_edit"></div>
                                            	<div class="skill_percentage">85%</div>
                                        </div>
                                        <div class="skill_tools_name"><h4>Claude AI</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_edit"></div>
                                            	<div class="skill_percentage">85%</div>
                                        </div>
                                         <div class="skill_tools_name"><h4>InDesign</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_html"></div>
                                            	<div class="skill_percentage">85%</div>
                                         </div>
                                           <div class="skill_tools_name"><h4>Non-Linear Editing</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_edit"></div>
                                            	<div class="skill_percentage">85%</div> 
                                        </div>
                                        <div class="skill_tools_name"><h4>HTML & CSS</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_60"></div>
                                            	<div class="skill_percentage">60%</div> 
                                        </div>
                                        
                                        <div class="skill_tools_name"><h4>Bolt.ai</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_hard"></div>
                                            	<div class="skill_percentage">50%</div>
                                        </div>
                                            <div class="skill_tools_name"><h4>After Effects</h4></div>
                                        <div class="skill_full">
                                            <div class="skill_percentage_hard"></div>
                                            	<div class="skill_percentage">50%</div> 
                                        </div>
                                        
                                </div>
                            </div>
                            <br>
                            <div class="section-container">
                            
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Educational Qualification</h3>
                                        </div>
                                        <ul class="ul-dates">
                                            <li>
                                                <div class="dates">
                                                   
                                                    <span>2012</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Web Design</h4>
                                                    <p>Arena Animation Academy,Thrissur<br><a href="http://arenatrichur.com/">www.arenatrichur.com</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2011</span>
                                                    
                                                </div>
                                                <div class="content">
                                                    <h4>Tally</h4>
                                                    <p>IT Computer Mission, Collage Road,Thrissur</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2010</span>
                                                    <span>2009</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Hardware & Networking </h4>
                                                    <p>IT Computer Mission, Collage Road,Thrissur</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2009</span>
                                                    
                                                </div>
                                                <div class="content">
                                                  <h4>Non-Linear Editing in FCP</h4>
                                                    <p>Chethana Media Institute<br><a href="http://www.chetanamedia.com/">www.chetanamedia.com</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2009</span>
                                                    <span>2007</span>                                                   
                                                </div>
                                                <div class="content">
                                                  <h4>Graphic Designer</h4>
                                                    <p>Arena Animation Academy, Thrissur<br><a href="http://arenatrichur.com/">www.arenatrichur.com</a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="title text-center">
                                           <br>
                                        </div>
                                        <ul class="ul-card">
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">Multimedia Animation</span>
                                                    <span class="year">2010</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Diploma</p>
                                                    <p class="where">Arena Multimedia</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">Plus Two</span><span class="year">2007</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Completed Higher Secondary</p>
                                                    <p class="where">Kerala State Board </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">SSLC</span><span class="year">2005</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Completed Secondary School Education</p>
                                                    <p class="where">Kerala State Board</p>
                                                </div>
                                            </li>
                                            
                                        </ul>

                                    </div>    
                                </div>    
                            </div>
                                
                        </div>

                        <div class="section color-2">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Professional Experience</h3>
                                        </div>

                                        <ul class="timeline">

                                        <li class="open">
                                                <div class="date">Nov 2020 - May 2025</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Impelsys India</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/Impelsys_logo.png" />
                                                        </div>
                                                      <div class="col-md-10">
                                                           <ul> 
                                                           <li>Joined as Senior UX Designer and promoted to Lead UI/UX Designer within six months.</li>
                                                           <li>Led the design for NCUK, one of the company's largest and longest-running projects, for 2.8 years.</li>
                                                           <li>Collaborated on global products with the American Heart Association, including WHO Training, E-Cards China, and AHA Dev Tracker.</li>
                                                           <li>Received an award for contributions to the Ministry of Corporate Affairs (India), working closely with senior government officials on critical design solutions.</li>
                                                           </ul>
                                                            <br>
                                                        <a href="https://www.impelsys.com///" target="_blank"> www.impelsys.com </a></div>
                                                    </div>
                                                </div>
                                            </li>
                                               <li class="open">
                                                <div class="date">May 2019-May 2020</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Otomeyt (Apar People World)</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/Apar_logo.png" />
                                                        </div>
                                                      <div class="col-md-10">
                                                            <ul>
                                                            <li>Served as UX Lead, overseeing the design of two products.</li>
                                                             <li>Designed a futuristic web application, Oto_Code, collaborating with AI and ML experts and top developers to deliver innovative solutions.</li>
                                                             </ul> 
                                                             <br>
                                                        <a href="https://aparpeopleworld.com//" target="_blank"> www.aparpeopleworld.com </a> <br> <a href="https://otomeyt.ai//" target="_blank"> www.otomeyt.ai </a></div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="open">
                                                <div class="date">May 2017-Jan 2019</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">RSP Design Consultants India Pvt.Ltd</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/RSP_logo.png" />
                                                        </div>
                                                      <div class="col-md-10">
                                                      <ul>
                                                      <li>Joined as the sole Graphic Designer after a successful one-month contract, later transitioning to a permanent role.</li>
                                                      <li>Designed presentation materials, newsletter templates, booklets, branding assets, and website visuals.</li>
                                                      </ul>  
                                                      <br>                                                      
                                                      <a href="http://www.rspindia.net/" target="_blank"> www.rspndia.net </a></div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="open">
                                                <div class="date">2014-2017</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Freelance Designer</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/my.png" />
                                                        </div>
                                                      <div class="col-md-10">
                                                           <ul>
                                                           <li>Worked on multiple projects for various clients, including multinational corporations, delivering design solutions across diverse industries.</li>
                                                           </ul>
                                                           <br>
                                                        <a href="http://www.asign.in/" target="_blank"> www.asign.in </a></div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="open">
                                                <div class="date">2014-2014</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Floret Media</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/floretlogo.png" />
                                                        </div>
                                                      <div class="col-md-10">
                                                      <ul>
                                                      <li>Served as Senior Web Designer, mentoring junior designers and delivering high-quality design outputs for the company.</li>
                                                      </ul>
                                                      <br>
                                                      <a href="http://www.floretmedia.com/" target="_blank"> www.floretmedia.com </a></div>
                                                    </div>
                                                </div>
                                            </li>        
                                            <li class="open">
                                                <div class="date">2013-2014</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">GL infotech</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/gllogo.png" />
                                                        </div>
                                                      <div class="col-md-10">
                                                            <ul>
                                                            <li>Transitioned to GL Infotech following a merger and worked as a Web Designer.</li>
                                                            <li>Developed skills in HTML, CSS, and responsive design coding structures, contributing to professional web design projects.</li>
                                                            <li>Mentored interns, sharing knowledge and fostering their professional growth.</li>
                                                            </ul>
                                                            <br>
                                                        <a href="http://www.glitinc.com/" target="_blank"> www.glitinc.com </a></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2012-2013</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Livelabz</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/livelogo.png" />
                                                        </div>
                                                        <div class="col-md-10">
                                                        <ul>
                                                        <li>Joined as a Web Designer in a web development company, focusing on website design and coding.</li>
                                                        <li>Gained foundational experience in web development, collaborating closely with a supportive team before the company merged with GL Infotech.</li>
                                                        </ul>
                                                        <br>                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2010-2011</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Burooj Printers</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/buroojlogo.png" />
                                                        </div>
                                                        <div class="col-md-10">
                                                            <ul>
                                                            <li>Began career in the creative field, focusing on print design, typography, and color theory.</li>
                                                            <li>Worked both on-site and remotely, delivering brochure designs and other creative assets while overcoming challenges in a new professional and cultural environment.</li>
                                                            </ul>  
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">March 2010</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Ivision Video Lab</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/ivisionlogo.png" />
                                                        </div>
                                                        <div class="col-md-10">
                                                            <ul>
                                                            <li>Joined after completing a Final Cut Pro (FCP) course, working in a collaborative and supportive environment.</li>
                                                            <li>Contributed to video editing projects, leveraging skills in motion graphics and media production.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2007</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Freelance Video Lab</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="img/lab/freelancelogo.png" />
                                                        </div>
                                                        <div class="col-md-10">
                                                        <ul>
                                                        <li>Began career as an intern while studying multimedia, gaining hands-on experience in visual and motion graphics.</li>
                                                        <li>Trained in music editing for wedding albums and progressed to video editing, laying the foundation for a career in creative design.</li>
                                                        </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>

                <div id="gallery" class="page">
                    <div class="pagecontents">
                        
                        <div class="section color-3" id="gallery-header">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h2>Portfolio</h2>
                                        <h5>Click on the Project Name for Redirection to the Full Browser View.</h5>
                                    </div>
                                    <div class="col-md-9">   
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section color-3" id="gallery-large">
                            <div class="section-container">
                                
    <ul id="grid" class="grid">

     <?php 
     if (!empty($datas) && is_array($datas)) {
         foreach($datas as $value) { 
             $portfolio_project = htmlspecialchars($value['portfolio_project'], ENT_QUOTES, 'UTF-8');
             $portfolio_link = htmlspecialchars($value['portfolio_link'], ENT_QUOTES, 'UTF-8');
             $portfolio_title = htmlspecialchars($value['portfolio_title'], ENT_QUOTES, 'UTF-8');
     ?>   

                                <li>
                                    <div>
                                        <img alt="image" src="./portfolio/<?php echo $portfolio_project; ?>" width="220" />
                                        <a href="./portfolio/<?php echo $portfolio_project; ?>" class="popup-with-move-anim">
                                            <div class="over">
                                                <div class="comein">
                                                    <i class="icon-search"></i>
                                                    <div class="comein-bg"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imagename">
                                        <span>
                                            <a href="<?php echo (strpos($portfolio_link, 'http') === 0) ? $portfolio_link : 'http://' . $portfolio_link; ?>" target="_blank">
                                                <?php echo $portfolio_title; ?>
                                            </a>
                                        </span>
                                    </div>
                                </li>
    <?php 
         }
     } else {
         echo '<li><p>No portfolio items found.</p></li>';
     }
    ?> 

                                </ul>
                                    
                            </div>
                        </div>

                    </div>
                    
                </div>
                <div id="contact" class="page stellar">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">