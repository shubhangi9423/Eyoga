<?php include("config.php");?>
<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"> <span>E-YOGA</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>SHUBHANGI</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="home.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                                                           </ul>
                                </li>
                               
                                <li><a href="asana.php"><i class="fa fa-female"></i>Add Asana <span class="fa fa-chevron-down"></span></a>
            
                                        </li>
                                         
								<li><a><i class="fa fa-photo"></i> Gallary <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
									<li>
									 <a href="image.php">
									    Images
									 </a>
									</li>
                                     <li>
									  <a href="video.php">
									    Videos
									  </a>
									 </li>   
                                    </ul>
                                </li>
								<li><a><i class="fa fa-photo"></i> Our Products <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
									<li>
									 <a href="drink.php">
									    Drinks
									 </a>
									</li>
                                     <li>
									  <a href="mat.php">
									    Mats
									  </a>
									 </li> 
									  <li>
									  <a href="cloth.php">
									    Cloths
									  </a>
									 </li>   
                                    </ul>
                                </li>
							<li> <a href="news.php"><i class="fa fa-edit"></i> News <span class="fa fa-chevron-down"> </a>
                                    
                                </li>
 <li> <a href="Feedback.php"><i class="fa fa-edit"></i> FeedBacK <span class="fa fa-chevron-down"> </a>
                                    
                                </li>
 
                            </ul>
                        </div>
                       
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">SHUBHANGI
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                           
                                           <span>
											<?php
											 $sql = mysql_query("SELECT * FROM tblcontact  ");
    
   
    while($row=mysql_fetch_array($sql))
    {
    ?>
         <span class="image">
                                        <img src=" ../user/user/<?=$row["uimage"]?>" height="30px" width="40px">
                                    </span>
                                        <span><?=$row['username']?></span>
										
                                        <span class="message">
                                       <?=$row['comment']?> 
                                    </span>
									 <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="feedback1.php?id=<?=$row['coid']?>" ></a></strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
									</br>
                                        </a>
                                    </li>
									<?php
									}
									?>
									</span>
                                   
									
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
             <div class="right_col" role="main">