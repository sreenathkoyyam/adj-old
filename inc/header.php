

      <div class="grid_12 header-repeat">
       
        <div id="branding">
                <div class="floatleft">
                <h3 style="color: #fff;">Dashboard</h3>
                   <!--  <img src="img/logo_dash.png" alt="Logo" />-->
                  </div> 
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello <?php echo $_SESSION['admin_name'];?></li>
                           <!--  <li><a href="#">Config</a></li> -->
                            <li><a href="admin.php">Logout</a></li>
                        </ul>
                        <br />
                      <!--   <span class="small grey">Last Login: 3 hours ago</span> -->
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-form-style"><a href="dashboard.php"><span>Site Owners</span></a></li>
               <!-- <li class="ic-typography"><a href="javascript:"><span>Controls</span></a>
                    <ul>
                        <li><a href="form-controls.html">Forms</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="form-controls.html">Full Page Example</a> </li>
                        <li><a href="table.html">Page with Sidebar Example</a> </li>
                    </ul>
                </li> -->
                <!-- <li class="ic-typography"><a href="typography.html"><span>Typography</span></a></li>
				<li class="ic-charts"><a href="charts.html"><span>Charts & Graphs</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="image-gallery.html">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li> -->

            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem" id="cust">Site Owner</a>
                          <ul class="submenu">
                                <li id="new_cust"><a><label id="sub1" >Create Site Owner</label></a> </li>
                            </ul>
                             <ul class="submenu">
                                <li id="new_cust"><a><label id="sub2" >Thumbnail Upload</label></a> </li>
                            </ul>
                            <ul class="submenu">
                                <li id="new_cust"><a><label id="sub3" >Image Upload</label></a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem" id="set">Settings</a>
                            <ul class="submenu">
                                <li id="new_cust"><a><label id="sub4" >ThumbNails View</label></a> </li>
                            </ul>
                            <ul class="submenu">
                                <li id="new_cust"><a><label id="sub5" >Images View</label></a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem" ><label id="ch_pwd">Change Password</label></a>
                          
                        </li>
                                                <li><a class="menuitem" href="master.php" ><label id="master">Master Settings</label></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
     