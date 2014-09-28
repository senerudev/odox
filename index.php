
<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<?php

include('database/DB.php');
$db = new DB();
//$db->userLogin('hakan@seneru.com','hakan');
if(null !== $db->getSession('username')){
?>

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
    <link href="plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
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
                <?php echo $db->getSession('profile-name'); ?> <i class="fa fa-caret-down fa-fw"></i> 
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
                    <!-- <a href="user_shared_repo/hack_2014.docx"> -->
                    	
                    	<a href="http://www.amitpatil.me/wp-content/uploads/2012/05/drag_drop_file_upload.jpg" id="dragout" class="dragme" draggable="true" data-downloadurl="application/jpg:drag_drop_file_upload.jpg:http://www.amitpatil.me/wp-content/uploads/2012/05/drag_drop_file_upload.jpg">Doc 1
                    	
                        <!-- <span class="menu-text">Doc 1 </span> -->
                    </a>
                </li>   
                
                <script type="text/javascript">
		var files = [document.getElementById("dragout"),document.getElementById("dragout2"),document.getElementById("dragout3")],
			fileDetails = [];
		
		// Some forward thinking, utilise the custom data attribute to extend attributes available.
		if(typeof files[0].dataset === "undefined") {
			// Grab it the old way
			fileDetails[0] = files[0].getAttribute("data-downloadurl");
			fileDetails[1] = files[1].getAttribute("data-downloadurl");
		} else {
			fileDetails[0] = files[0].dataset.downloadurl;
			fileDetails[1] = files[1].dataset.downloadurl;
		}
		
		files[0].addEventListener("dragstart",function(evt){
			evt.dataTransfer.setData("DownloadURL",fileDetails[0]);
		},false);
		files[1].addEventListener("dragstart",function(evt){
			evt.dataTransfer.setData("DownloadURL",fileDetails[1]);
		},false);
	</script>
	           
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
    <!-- <div class="navbar-spacing clearfix"></div> -->
    <br /><br />
    	<h3 class="menu-title hide-nav-medium hide-nav-small">Recived Files</h3>
        <div class="vd_menu">
        	 <ul>
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
            <span class="menu-text">Expand</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
	           
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
    	</div>
    
    <!-- <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="logout.php">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                
            </li>
        </ul>
    </div>  -->  
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
<script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script>

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
<script>

/*****************************************************************
Table of Contents

1.) Document Ready State
	-google map
	- Initialize
	- Back Top
	- Tags Input
	- Tool Tips	
	- Pop Over
	- Pretty Photo
	- Data Tables
	- Custom Scrollbar
	- Mega Menu Hover Checking
	- Resize Screen Checking
	- Menu Size Button
	- Content Resizing
	- Sub Menu of Top Menu Button
	- Open Menu Trigger
	- Expand Tree Menu Button
	- Custom Input Wrapper
	- Widget Minimize Button
	- Widget Close Button
	- Widget Refresh Button
	- Chat Close Button
	- Notification Button
	- Sticky Menu
	
	

!Note: You can search using the title above
*****************************************************************/



/* Document Ready State. 
   Used: Global */	
jQuery(document).ready(function($)
	{
		"use strict";
		
		var phone_width = 464;		
		var tablet_width = 751;
		var desktop_width = 975;
		
		/* Initialize 
		   Used: On Application Init
		*/
		
		initialize();
		
		function initialize(){
			
 var locations = [
          ['Colombo Sri Lanka', 6.9215305,79.8648533, 2],
          ['Sweden', 59.8332794,17.6584471, 1]
      ];
      
      <?php 
      $str = "";
      foreach ($db->getLocations() as $key => $value) {
           $location = explode(",", $value);
          // $str .= "['{$key}', {$location[0]}, {$location[1]}, ],"
      }

      ?>
			// map 
     

			// var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
			  var mapOptions = {
			    zoom: 4,
          center: new google.maps.LatLng(-33.92, 151.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
			  };
			
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			
			var contentString = '<iframe scrolling="yes" class="foo"  frameBorder="0" src="iframe.html" width="650px" height="360px" />';
			
			//var contentString = '<div style="width: 300px; padding:10px;"><h3 style="padding-bottom: 5px;"  class="vc_main-color">Our Headquarter</h3><p>Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.<br/></p></div>';
			
			//var contentString = ' <div class="child-menu"><div class="title" >Departments</div><div class="content-list"><div data-rel="scroll"><ul class="list-wrapper pd-lr-10"><li><a href="javascript:void(0);" onclick="showFileUploader()" ><div class="menu-icon vd_yellow"></div><div class="menu-text"> Management </div></a></li><li><a href="#"><div class="menu-icon vd_blue"></div><div class="menu-text"> Finance </div></a></li><li><a href="#"><div class="menu-icon vd_red"></div><div class="menu-text"> Production </div></a></li><li><a href="#"><div class="menu-icon vd_green"></div><div class="menu-text"> Marketing </div></a></li><li><a href="#"><div class="menu-icon vd_red"></div><div class="menu-text"> Human Resources </div></a></li></ul></div></div></div><button title="" data-original-title="" type="button" class="btn vd_btn vd_bg-red" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> Popover on right </button>';
			
			  // var infowindow = new google.maps.InfoWindow({
			  	
			  //     content: contentString
			  // });
			var marker;
      var i = 0;
      var infowindow = new google.maps.InfoWindow();

			  // var marker = new google.maps.Marker({
			  //     position: myLatlng,
			  //     map: map,
			  //     title: 'Uluru (Ayers Rock)'
			  // });
			  
			  // google.maps.event.addListener(marker, 'click', function() {
			  //   infowindow.open(map,marker);
			  // });

      for (i = 0; i < locations.length; i++) {
          marker = new google.maps.Marker({
              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
              map: map
          });

          google.maps.event.addListener(marker, 'click', (function (marker, i) {
              return function () {
                  infowindow.setContent(contentString);
                  infowindow.open(map, marker);
              }
          })(marker, i));
      }

			
			google.maps.event.addDomListener(window, 'load', initialize);
			
			// $('#map').gMap({
		
			 // address: 'Los Angeles, United States',
			 // maptype: 'ROADMAP',
			 // zoom: 14,
			 // markers: [
				// {
					// address: "Los Angeles, United States",
					// html: '<div style="width: 300px; padding:10px;"><h3 style="padding-bottom: 5px;"  class="vc_main-color">Our Headquarter</h3><p>Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.<br/></p></div>',
					// icon: {
						// image: "img/blue.png",
						// iconsize: [42, 51],
						// iconanchor: [21,51]
					// },						
				// }
			 // ],
			 // doubleclickzoom: false,
			 // controls: {
				 // panControl: true,
				 // zoomControl: true,
				 // mapTypeControl: true,
				 // scaleControl: false,
				 // streetViewControl: false,
				 // overviewMapControl: false
				 // },            
			// });
// 			
			// $('#filters a').click(function(){
				// var filter = $(this).data('filter');
				// var lat= 0;
				// var long = 0;
				// switch(filter)
				// {
				// case "US":
				  // lat = 40;
				  // long = -100;
				  // break;
				// case "CN":
				  // lat = 35;
				  // long = 103;
				  // break;
				// case "ID":
				  // lat = 0;
				  // long = 117;
				  // break;
				// case "FR":
				  // lat = 47;
				  // long = 2;		  
				  // break;
				// }
				// $('#map').gMap('centerAt',
					// {
						// latitude:lat,
						// longitude: long,
						// zoom: 5
					// }
				// );
// 				
// 			
			// });	
			
			
			
			// Nav-toggle Active
			if ($('body').hasClass('nav-medium')) {
				$('[data-action^="nav-medium"]').addClass('active');
			}
			if ($('body').hasClass('nav-small')) {
				$('[data-action^="nav-small"]').addClass('active');
			}	
			
			// Active Menu
			var active_page = $('body').attr('data-active');
			$('.navbar-menu .vd_menu > ul > li#'+active_page).addClass('active');
			$('.navbar-menu .vd_menu > ul > li#'+active_page+' > a').append('<span class="menu-active"><i class="icon-caret-left"></i></span>');
			
			
			calculateContentHeight();
	
			if ($(window).width() <= desktop_width ) {
					checkWindowTablet();
			}else{
					checkWindowDesktop();
			};									

			checkStickyMenu();
			checkBackTop();
			checkMegaMenu();
		}			
		// Calculate height function
		function calculateContentHeight(){
			var height=$('.vd_navbar-left .navbar-tabs-menu').height() + $('.vd_navbar-left .navbar-menu').height() + $('.vd_navbar-left .navbar-spacing').height()  + 8;
			var height_right=$('.vd_navbar-right .navbar-tabs-menu').height() + $('.vd_navbar-right .navbar-menu').height() + $('.vd_navbar-right .navbar-spacing').height()  + 8;			
			$('.vd_content-wrapper, .vd_content-wrapper > .vd_container').css('min-height', (height > height_right ) ? height : height_right );
		};
				
							
							

		$(window).load(function() {
				/* Back Top. 
				   Used: For future development */		
				$('[data-action^="backtop"]').click(function(e){
						e.preventDefault();
						$('body,html').animate({scrollTop:0},800);
				});		
				
		
				/* Tags Input. 
				   Used: < data-rel = "tags-input" > */
				$('[data-rel^="tags-input"]').tagsInput({width:'auto'});
				
				/* Tags Input. 
				   Used: < data-rel = "switch" > */
				$('[data-rel^="switch"]').bootstrapSwitch();			
					
				/* Tool Tips. 
				   Used: < data-toggle = "tooltip" > */
				$('[data-toggle^="tooltip"]').tooltip();	
				
				
				/* Pop Over. 
				   Used: < data-toggle = "popover" > */	
				$('[data-toggle^="popover"]').popover();
		
				/* Pretty Photo. 
				   Used: - For Grouping:  <a data-rel="prettyPhoto[portfolio-group]"> 
						 - For Single Image: <a data-rel="prettyPhoto"> 
				*/
				$('a[data-rel^="prettyPhoto"]').each(function() {
					$(this).attr('rel', $(this).data('rel'));
				});
				$("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square'});	
				
				/* Custom Scrollbar. 
				   Used: <div data-rel="scroll" data-scrollHeight="400" >
				*/
				$('html.no-touch [data-rel^="scroll"]').mCustomScrollbar({
					  set_height: function(){$(this).css('max-height',$(this).data('scrollheight')); return $(this).data('scrollheight'); },
					  mouseWheel:"auto",   
					  autoDraggerLength:true,  			
					  autoHideScrollbar:true,
					  advanced:{  
						updateOnBrowserResize:true,   
						updateOnContentResize:true   
					  }, // removed extra commas 
				});
				$('html.touch [data-rel^="scroll"]').css({
					'height' : function(){return($(this).data('scrollheight')) },
					'max-height': function(){return($(this).data('scrollheight')) },
					'overflow-y' :'scroll',
				});			
		});
		
		/* Mega Menu Hover Checking. 
		   Used: When Resizing Screen
		*/
		$( window ).resize(function() {
			checkMegaMenu();
		});	
				
		function checkMegaMenu(){
			if ($(window).width() <= tablet_width ) {		
				$('.vd_mega-menu .hover-target').removeClass('hover-target').addClass('hover-target-temp');			
			} else {
				$('.vd_mega-menu .hover-target-temp').removeClass('hover-target-temp').addClass('hover-target');							
			}
			
		}



		/* Resize Screen Checking 
		   Used: When Resizing Screen
		*/
				
		function checkWindowTablet(){
				if ($('body').hasClass('no-responsive')){
					return(false);
				}
				if (!$('body').hasClass('nav-left-hide')) {	
					$('body').addClass('nav-left-hide');
				}
				if (!$('body').hasClass('nav-right-hide')) {	
					$('body').addClass('nav-right-hide');
				}			
				$('body').removeClass('remove-navbar');
				$('body').removeClass('remove-header');
				$('body').removeClass('fullscreen');	
				resizeAffixPanel();
		}
		function checkWindowDesktop(){
				if ($('body').hasClass('no-responsive')){
					return(false);
				}
				if ($('body').hasClass('nav-left-hide') ) {	
					if (!$('body').hasClass('nav-left-start-hide')){
						$('body').removeClass('nav-left-hide');								
					} else{
						$('body').addClass('nav-left-hide');					
					}
				}
				if ($('body').hasClass('nav-right-hide')) {	
					if (!$('body').hasClass('nav-right-start-hide')){
						$('body').removeClass('nav-right-hide');
					} else{
						$('body').addClass('nav-right-hide');						
					}
				}			
				$('body').removeClass('remove-navbar');
				$('body').removeClass('remove-header');
				$('body').removeClass('fullscreen');	
				resizeAffixPanel();									
		}
		
		if ($("body").hasClass('responsive')){		

			$(window).setBreakpoints({
				breakpoints: [480, 751, 975]
			});
			$(window).bind('exitBreakpoint751', function () {
				$(window).bind('enterBreakpoint480', function () {
						checkWindowTablet();
				});
			});
			
			$(window).bind('exitBreakpoint480', function () {
				$(window).bind('enterBreakpoint751', function () {
					checkWindowTablet();
				});
			});		
			
			$(window).bind('exitBreakpoint751', function () {
				$(window).bind('enterBreakpoint975', function () {
					checkWindowDesktop();
				});
			});	
			
			$(window).bind('exitBreakpoint975', function () {
				$(window).bind('enterBreakpoint751', function () {
					checkWindowTablet();
	
				});
			});			
		}



		/* Menu Size Button
		   Used: When Resizing Screen
		*/
		
		$('[data-action^="nav-left-medium"]').click(function() {	
			navbarResize('left','medium');		
			resizeAffixPanel();															
		});					
		$('[data-action^="nav-left-small"]').click(function() {
			navbarResize('left','small');	
			resizeAffixPanel();																		
		});	
		
		$('[data-action^="nav-right-medium"]').click(function() {	
			navbarResize('right','medium');	
			resizeAffixPanel();																		
		});					
		$('[data-action^="nav-right-small"]').click(function() {
			navbarResize('right','small');	
			resizeAffixPanel();																	
		});																
		$('[data-action^="toggle-navbar-left"]').click(function() {
			toggleNavbar('left');			
			resizeAffixPanel();							
		});			
		$('[data-action^="toggle-navbar-right"]').click(function() {
			toggleNavbar('right');			
			resizeAffixPanel();										
		});			
		
		
		function navbarResize(direction, size){
			var opposite= (size=="small")? "medium":"small"
			// if nav size state
			if ($('body').hasClass('nav-'+direction+'-'+size)){
				$('body').removeClass('nav-'+direction+'-'+size);
				if (size=='small' && $('body').hasClass('enlarge-'+direction+'-to-medium')){
					$('body').addClass('nav-'+direction+'-medium');				
				}
			// if nav normal 			
			} else {
				$('body').removeClass('nav-'+direction+'-'+opposite);		
				$('body').addClass('nav-'+direction+'-'+size);											
			}			
			$('.vd_navbar-'+direction+' .navbar-tabs-menu .menu-container').removeAttr('style');	
			$('.vd_navbar-'+direction+' .navbar-tabs-menu [data-action^="expand-navbar-tabs-menu"] .badge').removeAttr('style');				
			
		}
	
		function toggleNavbar(direction){
			var opposite= (direction=="left")? "right":"left";
			// $('body').removeClass('remove-navbar');	
			$('body').removeClass('fullscreen');
						
			// if nav-direction is hiding	
			if ($('body').hasClass('nav-'+direction+'-hide')) {				
				$('body').removeClass('nav-'+direction+'-hide');
//				navToggle(direction, "show");							
				// if there is nav-opposite AND (nav-direction start with hiding OR smaller screen)
				if (!$('body').hasClass('no-nav-'+opposite) && !$('body').hasClass('nav-'+opposite+'-hide') && ($('body').hasClass('nav-'+direction+'-start-hide') || $(window).width() < desktop_width) ){					
//					navToggle(opposite, "hide");					
					$('body').addClass('nav-'+opposite+'-hide');			
				}																
			}	else	
			// if nav-opposite is hiding					
			if ($('body').hasClass('nav-'+opposite+'-hide') && $(window).width()>= desktop_width ){
				$('body').removeClass('nav-'+opposite+'-hide');	
				$('body').addClass('nav-'+direction+'-hide');									
			}  else {												
				$('body').addClass('nav-'+direction+'-hide');				
			}				
		}		

		$('.navbar-tabs-menu [data-action^="expand-navbar-tabs-menu"]').click(function() {
			$(this).next().animate({width:'toggle', opacity:'toggle'},300,"swing");
			$(this).find(".badge").toggle('fast');			
		});
						

		/* 
			Content Resizing
			Used: When Click on container
		*/
		$('.vd_container').click(function() {
			if ($(window).width() <= desktop_width){	
				if (!$('body').hasClass('nav-right-hide')){		
					toggleNavbar('right');			
					resizeAffixPanel();						
				} else if (!$('body').hasClass('nav-left-hide')){
					toggleNavbar('left');			
					resizeAffixPanel();						
				}
				
			} 
		});		
	    // Affix Setting Function.  	  
	    function resizeAffixPanel(){
		    $('.sidebar-affix .panel').css('width',($('.vd_content-section').innerWidth()-114)/3+'px');
		    if ($(window).width()<=tablet_width)	{
				  $('.sidebar-affix .panel').removeAttr('style');		  
		    }
	    }

		
		
		//  Content Resizing Button
		$('[data-action^="remove-navbar"]').click(function() {
//			$(this).siblings().removeClass('active');
			// if remove-navbar state				
			if ($('body').hasClass('remove-navbar')){
				$('body').removeClass('remove-navbar');	
				if (!$('body').hasClass('nav-left-start-hide')){
					$('body').removeClass('nav-left-hide');	
				};	
				if (!$('body').hasClass('nav-right-start-hide')){
					$('body').removeClass('nav-right-hide');					
				};
					
//				$('[data-action^="remove-navbar"]').removeClass('active');								
			// if nav normal state			
			} else {
				$('body').removeClass('fullscreen');	
				$('body').removeClass('remove-header');							
				$('body').addClass('remove-navbar');
				$('body').addClass('nav-left-hide');	
				$('body').addClass('nav-right-hide');					
//				$('[data-action^="remove-navbar"]').addClass('active');								
			}				
		});	
		$('[data-action^="remove-header"]').click(function() {
//			$(this).siblings().removeClass('active');
			// if remove-navbar state				
			if ($('body').hasClass('remove-header')){
				$('body').removeClass('remove-header');	
//				$('[data-action^="remove-header"]').removeClass('active');								
			// if nav normal state			
			} else {
				$('body').removeClass('fullscreen');
				$('body').removeClass('remove-navbar');
				if (!$('body').hasClass('nav-left-start-hide')){
					$('body').removeClass('nav-left-hide');	
				};	
				if (!$('body').hasClass('nav-right-start-hide')){
					$('body').removeClass('nav-right-hide');					
				};											
				$('body').addClass('remove-header');	
//				$('[data-action^="remove-header"]').addClass('active');								
			}				
		});	
		$('[data-action^="fullscreen"]').click(function() {
//			$(this).siblings().removeClass('active');
			// if remove-navbar state				
			if ($('body').hasClass('fullscreen')){
				$('body').removeClass('fullscreen');	
				if (!$('body').hasClass('nav-left-start-hide')){
					$('body').removeClass('nav-left-hide');	
				};	
				if (!$('body').hasClass('nav-right-start-hide')){
					$('body').removeClass('nav-right-hide');					
				};			
//				$('[data-action^="fullscreen"]').removeClass('active');								
			// if nav normal state			
			} else {
				$('body').removeClass('remove-header');
				$('body').removeClass('remove-navbar');									
				$('body').addClass('fullscreen');	
				$('body').addClass('nav-left-hide');	
				$('body').addClass('nav-right-hide');				
//				$('[data-action^="fullscreen"]').addClass('active');								
			}				
		});	
		
		$('[data-action^="boxedtofull"]').click(function() {
			if ($('body').hasClass('boxed-layout')){
				$('body').removeClass('boxed-layout');
				$('body').addClass('full-layout');	
				$('[data-action^="boxedtofull"]').addClass('active');							
			}
			else if ($('body').hasClass('full-layout')){
				$('body').removeClass('full-layout');
				$('body').addClass('boxed-layout');	
				$('[data-action^="boxedtofull"]').removeClass('active');								
			}									
		});


		
		/* Sub Menu of Top Menu Button. 
		   Used: Input at login, register, forget password */			
		$('[data-action^="submenu"]').click(function() {
			// if submenu state				
			if ($('body').hasClass('submenu')){
				$('body').removeClass('submenu');														
			} else {								
				$('body').addClass('submenu');					
				setCenterMenu();											
			}				
		});	
		


		
		/* Open Menu Trigger
		   Used: < data-action="click-trigger" >
		         < data-action="click-target" >		   
		*/			
		$('[data-action^="click-trigger"]').click(function(e) {
			e.preventDefault();
			if ($(this).parent().hasClass("hover-trigger") && $(this).siblings().hasClass("hover-target")){
				return(0);
			}			
			// check if not children of click-target then slideup
			if ( $(this).parent().parent().parent().data("action") != "click-target" && $(this).parent().parent().parent().parent().parent().data("action") != "click-target"    )  {
				$('[data-action^="click-target"]').slideUp('fast',  function(){ //calculateContentHeight();														
					});				
			} else{
			// check if children of click-target then slideup all the parent kids
				$(this).parent().siblings().children('[data-action^="click-trigger"]').removeClass('open');	
				$(this).parent().siblings().children('[data-action^="click-target"]').slideUp('fast',  function(){//calculateContentHeight(); 
				    
					});
						
			}
			// if this is close
			if (! $(this).hasClass('open')){


				if ($(this).parent().parent().parent().data("action") != "click-target"){
					$('[data-action^="click-trigger"]').removeClass('open');
				};
				$(this).addClass('open');
				$(this).parent().children('[data-action^="click-target"]').slideDown('fast',  function(){    if ($('.navbar-menu').outerHeight() < $('.navbar-menu .vd_menu').outerHeight() + $('.navbar-spacing ').outerHeight()){calculateContentHeight()};
			
				});	
				
				
			// if this is open			
			} else {
				$(this).removeClass('open');
				// check if children of click-target then slideup				
				//if ($(this).parent().parent().parent().data("action") == "click-target"){
					$(this).parent().children('[data-action^="click-target"]').slideUp('fast',  function(){
						
					});				
				//}				
			}
			$('body').removeClass('expand-all');
										
		});		
								
		// Click outside click-target			
		$(document).click(function(event) {
			 if (( $(event.target).closest('[data-action^="click-trigger"]').get(0) == null ) && ( $(event.target).closest('[data-action^="click-target"]').get(0) == null ) && ( $(event.target).closest('[data-action^="expand-all"]').get(0) == null)) { 
				 $('[data-action^="click-target"]').hide();
				 $('[data-action^="click-trigger"]').removeClass('open');	
	 			 $('body').removeClass('expand-all');				 			 
				 calculateContentHeight();
			}			
		});
		
		
		
		/* Expand Tree Menu Button
		   Used: < data-action="expand-all" >   */			
		$('[data-action^="expand-all"]').click(function() {
			$('[data-action^="click-target"]').slideUp('fast',  function(){
					calculateContentHeight();					
					
			});								
			$('[data-action^="click-trigger"]').removeClass('open');					
			if ($('body').hasClass('expand-all')){
				$('body').removeClass('expand-all');																	
			// if nav normal state			
			} else {
				$(this).closest('.navbar-menu').find('.vd_menu .child-menu').slideDown('fast',  function(){
					calculateContentHeight();					
					
				}).find('[data-action^="click-trigger"]').addClass('open');						
				$('body').addClass('expand-all');					
			}						
		});	
		
		
				
		/* Custom Input Wrapper. 
		   Used: Input at login, register, forget password */			
    	$('.vd_input-wrapper input').blur(function(){
    			$(this).parent(".vd_input-wrapper").removeClass("focus");
    	})
             .focus(function() {		
    	        $(this).parent(".vd_input-wrapper").addClass("focus");
    	});		
		

		/* Widget Minimize Button
		   Used: < data-action="minimize" > in panel widget   */	
		$('[data-action^="minimize"]').click(function() {
			if ($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).closest(".widget").children('.panel-body, .panel-body-list').slideDown('fast');	
			} else{
				$(this).addClass('active');
				$(this).closest(".widget").children('.panel-body, .panel-body-list').slideUp('fast');	
			}			
		});	
		
		/* Widget Close Button
		   Used: < data-action="close" > in panel widget   */
		$('[data-action^="close"]').click(function() {
			$(this).closest(".widget").hide();			
		});	
		
		
		/* Widget Refresh Button
		   Used: < data-action="refresh" > in panel widget   */
		$('[data-action^="refresh"]').click(function() { 
			$(this).closest(".widget").block({ 
				message: '<h2><i class="fa fa-spinner fa-spin vd_green"></i></h2>',
				css: { 
					border: 'none', 
					padding: '15px', 
					background: 'none',
				},
				overlayCSS: { backgroundColor: '#FFF' },
				timeout: 2000 
			}); 			
		});				
		
		
		
		
		/* Chat Close Button
		   Used: < data-action="chat-close" > in panel   */
		$('[data-action^="chat-close"]').click(function() {
			$('.vd_chat-menu').remove();
		});
		
		
		
		
		/* Notification Button
		   Used: < data-action="notification" >   */		
		$('[data-action^="notification"]').click(function(e){
				e.preventDefault();
				var position=$(this).data('position');
				var type=$(this).data('type');
				var icon=$(this).data('icon');
				var title=$(this).data('title');
				var message=$(this).data('message');

				
				notification(position,type,icon,title,message);
				
		});
					
		$('[data-toggle^="tabajax"]').click(function(e) {
			e.preventDefault();
			var $this = $(this),
				loadurl = $this.attr('href'),
				targ = $this.attr('data-target');
		
			$.get(loadurl, function(data) {
				$(targ).html(data);
			});
		
			$this.tab('show');
			return false;
		});
		
		/* Sticky Menu. 
		   Used: Global */	
		var headerHeight = $("header").height();
		var submenuHeight = 0;


		
		function checkStickyMenu(){
			if ( !$("body").hasClass("nav-top-fixed") || $("body").hasClass("boxed-layout")) return(false);
		
			if($(window).scrollTop() > headerHeight-submenuHeight   &&  $(window).width() >= desktop_width){
				// #Back-Top visible
				
				if($("body").hasClass("sticky-menu-active"))
					return false;
				$("body").addClass("sticky-menu-active");
				if(!$("body").hasClass("fullscreen") && !$("body").hasClass("remove-header")){
					$("body").css('padding-top',headerHeight);		
				}
				$('header').css({
							top: -headerHeight,
							opacity:'.5',
							transition: 'none',
						}).stop(true, true).animate({
							top: 0,
							opacity: '1'
					}, 1000, function(){
						$('header').removeAttr('style');
						// Animation complete.
				});			
			} else if( $(window).scrollTop() <= 0||  $(window).width() < desktop_width){
				if ($("body").hasClass("sticky-menu-active")){
					$("body").css('padding-top',0);
					$("body").removeClass("sticky-menu-active");
					$("body").removeAttr('style');
				}
			}
		}		
		
		function checkBackTop(){
			if($(window).scrollTop() > headerHeight-submenuHeight){
				$('#back-top').addClass('visible');
			}  else if( $(window).scrollTop() <= 0 ){
				$('#back-top').removeClass('visible');		
			}
		}		
		$(window).on("scroll", function(){
				checkStickyMenu();	
				checkBackTop();			
		});
		$(window).on("resize", function(){
				checkStickyMenu();
				checkBackTop();
		});


		
		
			
					

		
});


// Device Touch Support Checker
function isTouch() {
	return $('html').hasClass('touch') ? 1 : 0
}

function isMobile() {
	return $('html').hasClass('mobile') ? 1 : 0
}
function isPhone() {
	return $('html').hasClass('phone') ? 1 : 0
}
function isTablet() {
	return $('html').hasClass('tablet') ? 1 : 0
}

// Scroll To Function
function scrollTo(element, offset) {
	pos = element ? $(element).offset().top : 0;
	$('html,body').animate({
		scrollTop: pos + (offset ? offset : 0)
	}, 'slow');
}

var stack_topleft = {"dir1": "down", "dir2": "right", "push": "bottom"};
var stack_topright = {"dir1": "down", "dir2": "left", "push": "bottom"};
var stack_bottomleft = {"dir1": "up", "dir2": "right", "push": "bottom"};
var stack_bottomright = {"dir1": "up", "dir2": "left", "push": "bottom"};

			
function notification(position, notif_type,icon_class,notif_title,notif_text){
	var output_title, output_stack;
	if (notif_title==""){output_title="";} else {
		output_title='<h5><strong>'+notif_title+'</strong></h5>';							
	};
	
	switch (position) {
		case 'topright' : output_stack = stack_topright; break;
		case 'topleft' : output_stack = stack_topleft; break;
		case 'bottomright' : output_stack = stack_bottomright; break;
		case 'bottomleft' : output_stack = stack_bottomleft; break;																
	}

	
	$.pnotify({
//				title: 'My Title',
		title_escape: true,
		text: '<div class="content-list content-image"><div class="list-wrapper mgtp-10 mgbt-xs-10"><div><div class="menu-icon"><i class="'+icon_class+'"></i></div> <div class="menu-text">'+output_title+'<p class="lh-sm">'+notif_text+'</p> </div></div></div></div>',
		cornerclass: '',
		type: notif_type,
		icon: 'false',
		width: '320px',
		closer_hover: false,
		sticker: true,
		opacity: 1,
		animation: {
			effect_in: 'shake',
			effect_out: 'fade'
		},
		addclass: 'stack-'+position,
		stack: output_stack			
		
	});		
}


 // show the pop up when user click on map pointer & then show the file uploader view 
function showFileUploader(){
	console.log("show file uploader viewer");
	$("#popOver").on("click",function(){ console.log("button clicked run"); });
	//alert("ok");
}

</script>

<!-- Specific Page Scripts END -->


</body>
</html>
<?php }else{
  header('location:login.php');
}
?>
