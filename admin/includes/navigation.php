<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white; font-size: 14px;">BW Galaxy Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php"></a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['admin_name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" style="color: white; font-size: 14px;"><i class="fa fa-fw fa-dashboard"></i> Admin Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" style="color: white; font-size: 14px;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Members<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="member.php?source=view_all_member" style="color: white; font-size: 14px;">View all Members</a>
                            </li>
                            <li>
                                <a href="member.php?source=add_member" style="color: white; font-size: 14px;">Add Members</a>
                            </li>
                        </ul>
                    </li>
                    
                      
                    <!-- <li class="active">
                        <a href="posts.php?source=comments"><i class="fa fa-fw fa-file"></i>Comments</a>
                    </li> -->
                    
                    <li>
                        <a href="#" style="color: white; font-size: 14px;"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>