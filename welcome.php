	
<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
        <title>Welcome</title>
        <link href="img/favicon.jpeg" rel="icon">
        
        <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    </head>
   
    
<body id="page-top">
    
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <img id="logo" src="img/favicon.jpeg"><br><br>
      <a class="navbar-brand js-scroll" href="http://www.gat.ac.in/">Global Academy of Technology</a>
        
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          
        <span></span>
        <span></span>
        <span></span>
      </button>
        
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
            
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Study Materials</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#resume">Calender</a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link js-scroll" href="#timetable">Time Table</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Reach Us</a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link js-scroll" href="logout.php">Log out</a>
          </li>
            
        </ul>
      </div>
    </div>
  </nav>
    
  <div id="home" class="intro route bg-image" style="background-image:url(img/sem3.jpg);">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Department of Computer Science</h1>
          <p class="intro-subtitle"><span class="text-slider-items">CSE Subjects, C/C++, Python, Java, HTML/CSS/JS,  DBMS......  </span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>
    
  <section id="about" class="about-mf sect-pt4 route">
      
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/logo.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">College: </span> <br><span>Global Academy of Technology</span></p>
                      <p><span class="title-s">Website: </span> <br><span>http://www.gat.ac.in/</span></p>
                      <p><span class="title-s">Phone: </span> <br><span>+91 9591510211,+91 9243190105</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skills</p>
                  <span>Placements</span> <span class="pull-right">80%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="80" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Academics</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Faculties</span> <span class="pull-right">77%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="70" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Students</span> <span class="pull-right">65%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                                        <br><br>
                    <p style="font-size:25px;">The Department of CSE Infrastructure Details</p>
                    <p style="font-family:Times New Roman;color:black; font-size:18px;"> <br> 
    <a href="img\LAB-1A-converted.pdf" class="scroll">* Alan Turing Lab</a><br>
    <a href="img\LAB-1B.pdf" class="scroll">* Edsger Dijkstra Lab</a><br>
    <a href="img\LAB-2A-converted.pdf" class="scroll" >* Charles Babbage Lab</a><br>
    <a href="img\LAB-2B-converted.pdf" class="scroll" >*  Ivan Sutherland Lab</a><br>
    <a href="img\LAB-3-converted.pdf" class="scroll" >* Gordon Moore Lab</a><br>
    <a href="img\LAB-4-converted.pdf" class="scroll" >* Von Neumann Lab</a><br>
    <a href="img\RD-lab.pdf"  class="scroll" >* Research and Development Center</a><br>
    <a href="img\Other-details.pdf" class="scroll" >* Other Details</a><br>
</p>
                    <br>
                    
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="20"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="21"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="22"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="23"></li>
  </ol>
        
      <div class="carousel-inner">  
    <div class="carousel-item active">
      <img src="img/12.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/18.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/4.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/5.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item">
      <img src="img/6.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/7.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/8.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/9.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/10.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/11.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/13.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/14.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/15.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/16.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/17.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/19.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/20.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/21.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/22.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/23.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item ">
      <img src="img/24.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  <br>
                    </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About Us
                    </h5>
                  </div>
                    <p style="font-family:Times New Roman; color:black;"> 
                      The Department of Computer Science and Engineering, since its inception in 2001, has always attracted the best of engineering aspirants from all over the country and abroad. It is successful in producing skilled and competent Computer Engineers and Entrepreneurs ready to satisfy the needs of the industry and society at large.
                  </p>
                    <p style="font-size:35px;">Why CSE @ GAT?</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                        <a style="font-family:Times New Roman;color:red;  font-size:20px;">NBA Accredited upto 30-06-2022</a><br>
                        The department is equipped with adequate infrastructure to support academic, research and extra-curricular activities for the all-round development of our students with 40 well-qualified, skilled and experienced faculty members. The department frequently organizes workshops, talks and faculty development programs regularly for the benefit of the student and faculty community. The department has an impressive placement track record with 85% of the students placed in reputed organizations.
                  </p>
                                         <p style="font-size:35px;">Infrastructure</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                        The Department of Computer Science has excellent classrooms and well equipped laboratories. State-of-the art technical equipment in laboratories, rich collection of books in department library and extensive e-learning opportunities provide students flexible and seamless learning experience. The department not only offers scope for research and study but also provides ample opportunities for holistic development of our students.
                        Each and every student is given an exclusive computer system to carryout laboratory work and projects. The department has high speed internet connectivity with Wi-Fi  access.</p>
                    
                    <p style="font-size:35px;">Programs offered</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                        Undergraduate – Bachelor of Engineering<br>
                        Postgraduate – Master of Technology<br>
                        Doctoral program<br>
                        
                                                <p style="font-size:35px;">Events and Activities</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                      The Department of CSE is bustling with activities for students and faculty members throughout the year. The students are provided with a myriad of opportunities and platforms for enhancing their technical knowledge as well as to showcase their cultural talents. The department also encourages faculty participation in various technical events.</p>
                    
                    <p style="font-size:35px;">Events Conducted for Faculty Members</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                        1. A 5-day Faculty Readiness Workshop on “InfyTQ based Foundation Program” was conducted and hosted by Department of CSE in association with Infosys Campus Connect from 22nd– 26th July, 2019.<br><br>
                        
                        2. “A 13-day FDP on Artificial Intelligence and Machine Learning”, in association with IIIT,Allahabad was conducted and hosted by Department of CSE,GAT from 1st– 13th July, 2019.<br>
                        <br>
                        3. Three Day Faculty Development Program on “System Software and Compiler Design / Operating Systems Laboratory”Workshop.<br>
                        <br>
                        4. Two Day Faculty Development Program on “ARM 7 & Keil IDE”Workshop.<br><br>
                        
                        5. A 5-days Faculty Development Program on “Big Data Analytics” from 25th July, 2016 to 29th July,  2016.<br>
                    <br>
                    </p>
                    
                    <p style="font-size:35px;">Value Added Programs for CSE Students</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                        
                      1. A 3 – days workshop on “Python Programming” was conducted and hosted by the Department of Computer Science and Engineering in association with Vueron Systems Pvt. Ltd. from 12thOctober 2019 to 14thOctober 2019 for 3rd semester students of GAT.<br><br>
                        
                        2. Around 112 students participated in a 6-day workshop on “Blockchain and its applications” conducted and hosted by the Department of Computer Science and Engineering in association with IIIT, Allahabad and Curl Analytics from 19thSeptember 2019 to 24thSeptember 2019.<br><br>
                        
                        3. A one-day session on on “Winning attitude”was conducted by Dr. Guruprasad N. on 18th September, 2019 for 3rd semester and 5th semester students of CSE & ISE. Click here for photos.<br><br>
                        
                        4. Around 80 students participated in a 5-day workshop on “Big Data Analytics and Machine Learning” conducted and hosted by the Department of Computer Science and Engineering in association with IIIT, Allahabad from 29thApril 2019 to 3rdMay 2019.<br><br>
                        
                        5. Two Day Workshop on “Mobile Application Development using React Native”on 16th November and 17th November 2018.<br><br>
                        
                        6. Two Day Workshop on “Virtualization & Cloud by VMware”on 15th November and 16th November 2018.<br><br>
                        
                        7. Two Day workshop on “Android Apps Development” Workshop on 5th October 2018 and 6th October 2018.<br><br>
                        
                        8. Microsoft Certification on “Cross Platform Mobile Application and Development using JAVA Script” – October 2018.<br><br>
                        
                        9. Two Day Workshop on  “Network Designing using Cisco Packet tracer”on on 27th February to 1st March 2018.<br><br>
                        
                        10. Two Day Workshop on “UML Modelling and Design Patterns”on 13th and 15th May 2017 for final year students.<br><br>
                        
                        11. Department techno-cultural fest“Genesys” hosted on 22nd and 23rd Feb 2017.<br><br>
                        
                        12. Certification program on “VSpere 6.0”conducted for third year CSE students in January 2017.<br><br>
                        
                        13. Two Day Workshop on“Python Programing” on on 27th and 28th August 2016.<br><br>
                        
                        14. Two Day Workshop on “Arduino Programming & Applications of IOT”on on 27th and 28th August 2016.<br><br>
                        
                        15. Two Day Workshop on “Raspberry – PI & Applications of IOT”on 27th and 28th August 2016.<br><br>
                        
                        16. Two Day Workshop on “Network Simulator -2”on 5th and 6th April 2016.<br><br>
                        
                        17. One day Workshop on “Image Processing Using MATLAB”on 29th October 2015.<br><br></p>
                    
                    <p style="font-size:35px;">Events and Activities</p>
                    <p style="font-family:Times New Roman;color:black;"> 
                        
                      1. Mrs.Kangavalli R, Associate Professor, Dept of CSE<br>
                        2. Mrs.Priyanga P, Associate Professor, Dept of CSE<br>
                        3. Mr.Shyam Sundar Bhushan, Associate Professor, Dept of CSE<br> </p>
                 </div>
              </div>
            </div>
        </div>
      </div>
          </div>
        </div>
  </section>
<!--/ ************************************************************************************************************************************* /-->
  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Study Materials
            </h3>
            <p class="subtitle-a">
              Check out all sem notes from here..... 
            </p>
            <div class="dropdown">
                <div id="myDropdown" class="dropdown-content scroll">
                    <a href="sem3.html" style="color: blue">Sem 3</a>
                    ||
                    <a href="sem4.html" style="color: blue">Sem 4</a>
                    ||
                    <a href="sem5.html" style="color: blue">Sem 5</a>
                    ||
                    <a href="sem6.html" style="color: blue">Sem 6</a>
                </div>
            </div> <br><br>
              <p class="subtitle-a">
              Check out 7th sem notes from here..... 
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="http://cms.gat.ac.in/course/view.php?id=542">
              <div class="work-img">
                <img src="img/ins.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">15CS743</h2>
                    <div class="w-more">
                      <span class="w-ctegory">INFORMATION AND NETWORK SECURITY</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="http://cms.gat.ac.in/course/view.php?id=540">
              <div class="work-img">
                <img src="img/san.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">15CS754</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Storage Area Networks</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="http://cms.gat.ac.in/course/view.php?id=539">
              <div class="work-img">
                <img src="img/ml.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">15CS73</h2>
                    <div class="w-more">
                      <span class="w-ctegory">MACHINE LEARNING</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="http://cms.gat.ac.in/course/view.php?id=538">
              <div class="work-img">
                <img src="img/aca.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">15CS72</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Advanced Computer Architectures</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="http://cms.gat.ac.in/course/view.php?id=537">
              <div class="work-img">
                <img src="img/wta.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">15CS71</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Technology and Its Applications</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--/ ************************************************************************************************************************************* /-->
    
    <section id="resume" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
             calender
            </h3>
            <p class="subtitle-a">
              events...
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row" id="pdf">
        <object data="img/dept.pdf" type="application/pdf"   height="1190px" width="71%"></object>
        <span style="text-align: center;">If your browser isn't supporting the above file, 
          <a href="https://drive.google.com/file/d/1FxC-BfsWeOZerJb6_X6kUTjujGEw3lpc/view?usp=sharing" style="color: blue">Click Me</a> to view or download it.</span> 
      </div>
    </div>
  </section>
    
    
    <section id="timetable" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
             Time Table
            </h3>
            <p class="subtitle-a">
              classes......
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row" id="pdf">
        <object data="img/TT.pdf" type="application/pdf"   height="1190px" width="71%"></object>
        <span style="text-align: center;">If your browser isn't supporting the above file, 
          <a href="https://drive.google.com/file/d/1Rvd9c90DgSfvZD_hJJWr_nfUD2N9QeRY/view?usp=sharing" style="color: blue">Click Me</a> to view or download it.</span> 
      </div>
    </div>
  </section>
    
    
    
    
<!--/ ************************************************************************************************************************************* /-->
    
    <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Academics
            </h3>
            <p class="subtitle-a">
              information about our academics... 
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="faculties.html">
              <div class="work-img">
                <img src="img/faculty.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Faculties</h2>
                    <div class="w-more">
                      <span class="w-ctegory">INFORMATION</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="technology.html">
              <div class="work-img">
                <img src="img/tech.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Technology</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Different Domains</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="students.html">
              <div class="work-img">
                <img src="img/students.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">students</h2>
                    <div class="w-more">
                      <span class="w-ctegory">information</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
          </div>
        </div>
  </section>
    
   <!--/ ************************************************************************************************************************************* /--> 
    
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/wallp.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message
                    </h5>
                    <p>Please reload the page, after hitting Send It button.</p>
                  </div>
                  <div>
                      <form action="contact.php" method="post" role="form" data-netlify="true" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send It</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Reach Us
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> Global Academy of Technology, Rajarajeshwari nagar, (off Mysore Road), Ideal Homes Township, Bangalore-560098, Karnataka, India</li>
                      <li><span class="ion-ios-telephone"></span> +91 8028603158</li>
                      <li><span class="ion-email"></span> webmaster@gat.ac.in</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/Global-Academy-Of-Technology-101130559932290/"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/followgat/"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href="https://www.linkedin.com/school/global-academy-of-technology/about/"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      <li><a href="https://twitter.com/CollegeGAT"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <div class="credits">
                 	&copy; Designed by <a href="https://www.linkedin.com/in/dhairya-anand-14675518a/">Dhairya Anand</a>
                  And        <a href="https://www.linkedin.com/in/ayush-dhar-529480193/">Ayush Dhar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
       <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
          <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/jq.js"></script>
    </body>
</html>