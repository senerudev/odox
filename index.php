<?php

include('database/DB.php');
$db = new DB();
$db->userLogin('hakan','hakan');

//$db->getAccessLevel();
//$db->getAccessHirache();

 $db->getLocations() ;
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta charset="utf-8" />
    <title>odox | simply share</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for multipurpose use">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <!-- <link href="plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">     -->
	<link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"><link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css"><link href="plugins/introjs/css/introjs.min.css" rel="stylesheet" type="text/css">    
     
    <!-- Theme CSS -->
    <!-- <link href="css/theme.min.css" rel="stylesheet" type="text/css"> -->
    <link href="css/theme.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="dashboard "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <header class="header-1" id="header">
      <div class="vd_top-menu-wrapper">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
          <div class="vd_panel-header">
          	<div class="logo">
            	<a href="index.php.html"><img alt="logo" src="img/logo.png"></a>
            </div>
            <!-- logo -->
            <!-- <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
            		                	<span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
	                    <i class="fa fa-bars"></i>
                    </span>
                                		                    
                	<span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
	                    <i class="fa fa-ellipsis-v"></i>
                    </span> 
                                       
            </div> -->
            <div class="vd_panel-menu left-pos visible-sm visible-xs">
                                 
                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>  
                            
                              
            </div>
            <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>        
                          
                        <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   
                   	 
            </div>                                     
            <!-- vd_panel-menu -->
          </div>
          <!-- vd_panel-header -->
            
          </div>    
          <div class="vd_container">
          	<div class="row">
            	<div class="col-sm-5 col-xs-12">
            		
<div class="vd_menu-search">
  <form id="search-box" method="post" action="#">
    <input type="text" name="search" class="vd_menu-search-text width-80" placeholder="Search">
    <div class="vd_menu-search-category"> 
    	<!-- <span data-action="click-trigger"> 
    		<span class="separator"></span> <span class="text">Category</span> 
    		<span class="icon"> <i class="fa fa-caret-down"></i></span> 
    	</span> -->
      <div class="vd_mega-menu-content width-xs-2 center-xs-2 right-sm" data-action="click-target">
        <div class="child-menu">
          <div class="content-list content-menu content">
            <ul class="list-wrapper">
              <li>
                <label>
                  <input type="checkbox" value="all-files">
                  <span>All Files</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="photos">
                  <span>Photos</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="illustrations">
                  <span>Illustrations</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="video">
                  <span>Video</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="audio">
                  <span>Audio</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="flash">
                  <span>Flash</span></label>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
  </form>
</div>
                </div>
                <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    	<div class="vd_mega-menu pull-right">
            				<ul class="mega-ul">
    <li id="top-menu-1" class="one-icon mega-li"> 
      <a href="index.php.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-users"></i></span> 
		<span class="badge vd_bg-red">8</span>        
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   File Requests
               <!-- <div class="vd_panel-menu">
                     <span data-original-title="Find User" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-search"></i>
                    </span>                 
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div> -->
           </div>                 
		   <div class="content-grid column-xs-2 column-sm-3 height-xs-4">	
           <div data-rel="scroll">
               <ul class="list-wrapper">
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                         </a>
                        <div class="menu-text"> Gabriella Montagna
                            <div class="menu-info">
                                <div class="menu-date">London</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                </div>                                
                            </div>
                        </div> 
                     </li>
                    <li> 
                    		<a href="#"> 
                    			<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>  
                            </a>                            
                            <div class="menu-text">  Jonathan Fuzzy
                            	<div class="menu-info">
                                    <div class="menu-date">Londn</div>                                                                         
                                    <div class="menu-action">
                                        <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-check"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-times"></i>
                                        </span>                                                                            
                                    </div>                                
                            	</div>                            
                            </div> 
                     </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div> 
                         </a>    
                        <div class="menu-text">  Sakura Hinata
                            <div class="menu-info">
                                <div class="menu-date">Hawaii</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </div>                                
                            </div>                                                     
                        </div> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div> 
                         </a>    
                        <div class="menu-text">  Rikudou Sennin
                            <div class="menu-info">
                                <div class="menu-date">Califonia</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                                                        
                        </div> 
                    </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>  
                         </a>   
                        <div class="menu-text">  Kim Kardiosun
                            <div class="menu-info">
                                <div class="menu-date">Hawaii</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                                                          
                        </div> 
                     </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div>
                         </a>    
                        <div class="menu-text">   Chamara Gunarathne
                            <div class="menu-info">
                                <div class="menu-date">S</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                             
                        </div> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></div> 
                         </a>   
                        <div class="menu-text">  Celline Dior
                            <div class="menu-info">
                                <div class="menu-date">Los Angeles</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </div>                                
                            </div>                              
                        </div> 
                    </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></div>
                         </a>    
                        <div class="menu-text">  Goerge Bruno Marz
                            <div class="menu-info">
                                <div class="menu-date">Las Vegas</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_blue vd_bd-blue" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                              
                        </div> 
                    </li>                                                                                
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>  
    <li id="top-menu-3"  class="one-icon mega-li"> 
      <a href="index.php.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-globe"></i></span> 
		<span class="badge vd_bg-red">6</span>        
      </a>
      <div class="vd_mega-menu-content  width-xs-3 width-sm-4  center-xs-3 left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           		Notifications 
               <!-- <div class="vd_panel-menu">
                     <span data-original-title="Notification Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                   
<!--                     <span class="text-menu" data-original-title="Settings" data-toggle="tooltip" data-placement="bottom">
                        Settings
                    </span>                                                              
                </div> -->
           </div>                 
		   <div class="content-list">	
           	   <div  data-rel="scroll">	
               <ul  class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa  fa-file-word-o"></i></div> 
                            <div class="menu-text"> Hokan Sent you private a doc
                            	<div class="menu-info"><span class="menu-date">12 Minutes Ago</span></div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class=" fa  fa-file-word-o"></i></div> 
                            <div class="menu-text">  Chamra added a doc to HR Department
                            	<div class="menu-info"><span class="menu-date">1 Hour 20 Minutes Ago</span></div>
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-file-pdf-o"></i></div> 
                            <div class="menu-text">  Julia added a pdf to XYZ project 
                            	<div class="menu-info"><span class="menu-date">8 Hours 35 Minutes Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-file-image-o"></i></div> 
                            <div class="menu-text">  Meega added an image to Marketing Department
                            	<div class="menu-info"><span class="menu-date">1 Day Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-file-pdf-o"></i></div> 
                            <div class="menu-text">  Snahoi added a pdf to whole organization
                            	<div class="menu-info"><span class="menu-date">1 Day Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-file-image-o"></i></div> 
                            <div class="menu-text">  Kalum added image to HR Department
                            	<div class="menu-info"><span class="menu-date">2 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>  
     
    <li id="top-menu-profile" class="profile mega-li"> 
        <a href="#" class="mega-link"  data-action="click-trigger"> 
            <span  class="mega-image">
                <img src="img/avatar/avatar-10.jpg" alt="" />               
            </span>
            <span class="mega-name">
                Hokan <i class="fa fa-caret-down fa-fw"></i> 
            </span>
        </a> 
      <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
        <div class="child-menu"> 
        	<div class="content-list content-menu">
                <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit Profile</div> </a> </li>
                    
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-cogs"></i></div> <div class="menu-text">Settings</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
                    <li class="line"></li>                
                </ul>
            </div> 
        </div> 
      </div>     
  
    </li>               
       
    <li id="top-menu-settings" class="one-big-icon hidden-xs hidden-sm mega-li" data-intro="<strong>Toggle Right Navigation </strong><br/>On smaller device such as tablet or phone you can click on the middle content to close the right or left navigation." data-step=2 data-position="left"> 
    	<a href="#" class="mega-link"  data-action="toggle-navbar-right"> 
           <span class="mega-icon">
                <i class="fa fa-comments"></i> 
            </span> 
<!--            <span  class="mega-image">
                <img src="img/avatar/avatar.jpg" alt="example image" />               
            </span> -->           
			<!-- <span class="badge vd_bg-red">8</span>                -->
        </a>              
       
    </li>
	</ul>
<!-- Head menu search form ends -->                         
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 

  </header>
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">

	<div class="navbar-menu clearfix">
        <!-- <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu." data-step=4 >
                <i class="fa fa-sitemap"></i>
            </span>                   
        </div> -->
    	<h3 class="menu-title hide-nav-medium hide-nav-small">Repositories</h3>
        <div class="vd_menu">
        	 <ul>
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
            <span class="menu-text">Private Repo</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="index.php.html">
                        <span class="menu-text">Doc 1 </span>
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/icon-doc.gif" />
                        </span>  
                    </a>
                </li>              
                <li>
                    <a href="index-ecommerce.php.html">
                        <span class="menu-text">Doc 2</span> 
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/icon-doc.gif" />
                        </span> 
                    </a>
                </li> 
                <li>
                    <a href="index-analytics.php.html">
                        <span class="menu-text">Image 1</span>  
                        
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/image-icon.gif" />
                        </span>
                    </a>
                </li> 
                <li>
                    <a href="index-event-management.php.html">
                        <span class="menu-text">Pdf 1</span>  
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/pdf-icon.png" />
                        </span>
                    </a>
                </li>                                                                                                  
            </ul>   
      	</div>
    </li>  
 	<li>
    	<a href="javascript:void(0);" data-action="click-trigger">
    		<img src="img/icons/googledrive_icon.png" class="menu-icon">
            <span class="menu-text"> Google</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a> 
       	
       	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="index.php.html">
                        <span class="menu-text">Doc 1 - </span>
                        <span class="menu-text">Hokan Joff</span>
                    </a>
                </li>              
                <li>
                    <a href="index-ecommerce.php.html">
                        <span class="menu-text">Doc 2</span> 
                       <span class="menu-text">Hokan Joff</span>
                    </a>
                </li> 
                <li>
                    <a href="index-analytics.php.html">
                        <span class="menu-text">Image 1</span>
                        <span class="menu-text">Hokan Joff</span>  
                    </a>
                </li> 
                <li>
                    <a href="index-blogging.php.html">
                        <span class="menu-text">Image 2</span>  
                        <span class="menu-text">Hokan Joff</span>
                        
                    </a>
                </li>  
                <li>
                    <a href="index-event-management.php.html">
                        <span class="menu-text">Pdf 1</span>  
                        <span class="menu-text">Hokan Joff</span>
                    </a>
                </li>                                                                                                  
            </ul>   
      	</div>
    </li>       
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<img src="img/icons/drop-box-icon.png" class="menu-icon"> 
            <span class="menu-text">Drop Box</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
       	
       	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="index.php.html">
                        <span class="menu-text">Doc 1 </span>
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/icon-doc.gif" />
                        </span>  
                    </a>
                </li>              
                <li>
                    <a href="index-ecommerce.php.html">
                        <span class="menu-text">Doc 2</span> 
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/icon-doc.gif" />
                        </span> 
                    </a>
                </li> 
                <li>
                    <a href="index-analytics.php.html">
                        <span class="menu-text">Image 1</span>  
                        
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/image-icon.gif" />
                        </span>
                    </a>
                </li> 
                <li>
                    <a href="index-event-management.php.html">
                        <span class="menu-text">Pdf 1</span>  
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/pdf-icon.png" />
                        </span>
                    </a>
                </li>                                                                                                  
            </ul>   
      	</div>
    </li> 
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	 <img src="img/icons/alfresco_mini.png" class="menu-icon">
            <span class="menu-text">Alfresco</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       </a>
       
            	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="index.php.html">
                        <span class="menu-text">Doc 1 </span>
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/icon-doc.gif" />
                        </span>  
                    </a>
                </li>              
                <li>
                    <a href="index-ecommerce.php.html">
                        <span class="menu-text">Doc 2</span> 
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/icon-doc.gif" />
                        </span> 
                    </a>
                </li> 
                <li>
                    <a href="index-analytics.php.html">
                        <span class="menu-text">Image 1</span>  
                        
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/image-icon.gif" />
                        </span>
                    </a>
                </li> 
                <li>
                    <a href="index-event-management.php.html">
                        <span class="menu-text">Pdf 1</span>  
                        <span class="menu-badge"><!-- <span class="badge vd_bg-yellow ">NEW</span> -->
                        	<img src="img/icons/pdf-icon.png" />
                        </span>
                    </a>
                </li>                                                                                                  
            </ul>   
      	</div>
    </li>                 
</ul>
<!-- Head menu search form ends -->         </div>             
    </div>
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="pages-logout.php.html">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                
            </li>
        </ul>
    </div>     
</div>    <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
	<div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>                
            </span>  
            <div class="menu-container">               
        		 <div class="navbar-search-wrapper">
        		 	<div class="navbar-search vd_bg-black-30"><input type="text" disabled="disabled" placeholder="add files here" class="vd_menu-search-text no-bg no-bd vd_white width-70" name="friends_files"></div><br />
				    <div class="navbar-search vd_bg-black-30">
				        <span class="append-icon"><i class="fa fa-search"></i></span>
				        <input type="text" placeholder="Search" class="vd_menu-search-text no-bg no-bd vd_white width-70" name="search">
				        
				    </div>
				</div>  
            </div>        
                                                 
    </div>
	<div class="navbar-menu clearfix">
    	<div class="content-list content-image content-chat">
            <ul class="list-wrapper no-bd-btm pd-lr-10">
                <li class="group-heading vd_bg-black-20">Local Office</li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div> 
                            <div class="menu-text">Jessylin
                                <div class="menu-info">
                                    <span class="menu-date">Administrator </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></div> 
                            <div class="menu-text">Rodney Mc.Cardo
                                <div class="menu-info">
                                    <span class="menu-date">Designer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></div> 
                            <div class="menu-text">Theresia Minoque
                                <div class="menu-info">
                                    <span class="menu-date">Engineering </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li class="group-heading vd_bg-black-20">London </li>                                                                                                                                 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-4.jpg" alt="example image"></div> 
                            <div class="menu-text">Greg Grog
                                <div class="menu-info">
                                    <span class="menu-date">Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></div> 
                            <div class="menu-text">Stefanie Imburgh
                                <div class="menu-info">
                                    <span class="menu-date">Dancer</span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-6.jpg" alt="example image"></div> 
                            <div class="menu-text">Matt Demon
                                <div class="menu-info">
                                    <span class="menu-date">Musician </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li>
                
                <li class="group-heading vd_bg-black-20">Singapore </li>
                
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></div> 
                            <div class="menu-text">Jeniffer Anastasia
                                <div class="menu-info">
                                    <span class="menu-date">Senior Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>                    
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></div> 
                            <div class="menu-text">Daniel Dreamon
                                <div class="menu-info">
                                    <span class="menu-date">Sales Executive </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li> 
                
                 <li class="group-heading vd_bg-black-20">New Zeland </li>
                
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></div> 
                            <div class="menu-text">Jeniffer Anastasia
                                <div class="menu-info">
                                    <span class="menu-date">Senior Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>                    
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></div> 
                            <div class="menu-text">Daniel Dreamon
                                <div class="menu-info">
                                    <span class="menu-date">Sales Executive </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                
                

            </ul>
        </div>

            
    </div>
    <div class="navbar-spacing clearfix">
    </div>
</div>    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <!-- <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.php.html">Home</a> </li>
                <li class="active">Default Dashboard</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div> -->
          <!-- vd_head-section -->
          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
             
              
              <!-- adding own company departments -->
              <div class="col-xs-3">
                    <div class="vd_status-widget vd_bg-red  widget">
					    
					<!-- vd_panel-menu --> 
					                                 
				   	<a class="panel-body" href="#">                                
				        <div class="clearfix">
				            <!-- <span class="menu-icon">
				                <i class="icon-bars"></i>
				            </span> -->
				            <!-- <span class="menu-value">
				                24
				            </span>   -->
				        </div>   
				        <div class="menu-text clearfix">
				            Production
				        </div>  
				     </a>                                                                
					</div>                    
				</div>
				
				
				<div class="col-xs-3">
                    <div class="vd_status-widget vd_bg-blue  widget">
					    
					<!-- vd_panel-menu --> 
					                                 
				   	<a class="panel-body" href="#">                                
				        <div class="clearfix">
				            <!-- <span class="menu-icon">
				                <i class="icon-bars"></i>
				            </span> -->
				            <!-- <span class="menu-value">
				                24
				            </span> -->  
				        </div>   
				        <div class="menu-text clearfix">
				            Human Resourses 
				        </div>  
				     </a>                                                                
					</div>                    
				</div>
				
				
				<div class="col-xs-3">
                    <div class="vd_status-widget vd_bg-green  widget">
					    
					<!-- vd_panel-menu --> 
					                                 
				   	<a class="panel-body" href="#">                                
				        <div class="clearfix">
				            <!-- <span class="menu-icon">
				                <i class="icon-bars"></i>
				            </span> -->
				            <!-- <span class="menu-value">
				                24
				            </span>  --> 
				        </div>   
				        <div class="menu-text clearfix">
				            Finance
				        </div>  
				     </a>                                                                
					</div>                    
				</div>
				
				
				<div class="col-xs-3">
                    <div class="vd_status-widget vd_bg-red  widget">
					    
					<!-- vd_panel-menu --> 
					                                 
				   	<a class="panel-body" href="#">                                
				        <div class="clearfix">
				            <!-- <span class="menu-icon">
				                <i class="icon-bars"></i>
				            </span> -->
				            <!-- <span class="menu-value">
				                24
				            </span> -->  
				        </div>   
				        <div class="menu-text clearfix">
				            Marketing
				        </div>  
				     </a>                                                                
					</div>                    
				</div>
              
              <div class="vd_panel-menu  hidden-xs">
  			<!-- menu -->
  
		  <!-- <div class="menu">
		    <div data-action="click-trigger"> <span class="menu-icon mgr-10"><i class="fa fa-filter"></i></span>Filter <i class="fa fa-angle-down"></i> </div>
		    <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target">
		      <div class="child-menu">
		        <div class="content-list content-menu">
		          <ul class="list-wrapper pd-lr-10">
		            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Filter User</div> </a> </li>
		            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-calendar"></i></div> <div class="menu-text">Filter Date</div> </a> </li>
		          </ul>
		        </div>
		      </div>
		    </div>
		  </div> -->
<!-- vd_panel-menu --> 
            </div>
              
		  <!-- menu --> 
		</div>
		
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          
          <div class="vd_content-section  pd-0 clearfix">
            
            <!-- <div id="map" style="height:1000px; width:100%;"></div> -->
            
            <div id="map-canvas" style="height:1000px; width:100%;"></div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright &copy;2014 Odox Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
  <div class="vd_chat-menu hidden-xs">
      <div class="vd_mega-menu-wrapper">
          
      </div>      
  </div>

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="js/caroufredsel.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script>

<script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
<!-- <script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script> -->

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<!-- Flot Chart  -->
<!-- <script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.categories.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.animator.min.js"></script> -->

<!-- Vector Map -->
<!-- <script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->

<!-- Calendar -->
<!-- <script type="text/javascript" src='plugins/moment/moment.min.js'></script>
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script> -->

<!-- Intro JS (Tour) -->
<!-- <script type="text/javascript" src='plugins/introjs/js/intro.min.js'></script> -->

<!-- Sky Icons -->
<script type="text/javascript" src='plugins/skycons/skycons.js'></script>

<!-- Google Map -->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  -->
<!-- <script type="text/javascript" src="js/jquery.gmap.min.js"></script> -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<script type="text/javascript">
$(window).load(function () 
	{
		$.fn.UseTooltip = function () {
			var previousPoint = null;
			$(this).bind("plothover", function (event, pos, item) {        
					if (item) {
						if (previousPoint != item.dataIndex) {
		
							previousPoint = item.dataIndex;
		
							$("#tooltip").remove();
							var x = item.datapoint[0].toFixed(2),
							y = item.datapoint[1].toFixed(2);
		
							showTooltip(item.pageX, item.pageY,
								"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
								"<div style='padding: 0 10px 10px;'>" +
								"<div>" + item.series.label +": <strong>"+ Math.round(y)  +"</strong></div>" +
								"<div> Profit: <strong>$"+ Math.round(y)*7  +"</strong></div>" +
								"</div>"
							);
						}
					} else {
						$("#tooltip").remove();
						previousPoint = null;            
					}
			});
		};
		 
		function showTooltip(x, y, contents) {
			$('<div id="tooltip">' + contents + '</div>').css({
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 20,    
				size: '10',  
//				'border-top' : '3px solid #1FAE66',
				'background-color': '#111111',
				color: "#FFFFFF",
				opacity: 0.85
			}).appendTo("body").fadeIn(200);
		}



	// Notification
	  //setTimeout(function() { notification("topright","notify","fa fa-exclamation-triangle vd_yellow","Welcome to Vendroid","Click on <i class='fa fa-question-circle vd_red'></i> Question Mark beside filter to take a view layout tour guide"); },1500)	 ; 
	  
	  

});
</script>
<!-- Specific Page Scripts END -->


</body>
</html>
