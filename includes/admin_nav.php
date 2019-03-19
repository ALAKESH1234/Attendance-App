<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>          
            </button>
            <div>
                <a class="navbar-brand" href="#">
                <img alt="LCB" src="./assets/images/logo.jpg" style="width:40px; margin-top: -7px;">
                </a>
            </div>
                
        </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                    <li><a class="navbar-brand" href="index.php">HOME</a></li>
                    <li><a href="about.php">About</a></li>
                        <?php
                        if(!isset($_SESSION['email'])) {
                            echo '<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                            <li><a href="#registert"data-toggle="modal">Teacher register</a></li>
                            <li><a href="#registers"data-toggle="modal">Student register</a></li>


                            </ul>
                                </li>


                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="#logina"data-toggle="modal">Admin Login</a></li>
                                <li><a href="#logins"data-toggle="modal">Student Login</a></li>
                                <li><a href="#logint"data-toggle="modal">Teacher Login</a></li>


                            </ul>
                            </li>';
                        }
                        
                        if($_SESSION['role']=='admin') {
                        echo'  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">teachers <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#addt"data-toggle="modal">Add</a></li>
                                <li><a href="edit_teacher.php">Update</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">department <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add</a></li>
                            <li><a href="#">delete</a></li>
                                <li><a href="#">edit</a></li>
                        </ul>
                        </li>';require_once 'modals/add_teacher_modal.php';
                        }
                       
                        ?>
                        
                       
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            <?php
                
                    require_once 'modals/student_register_modal.php';
                    require_once 'modals/admin_login_modal.php';
                    require_once 'modals/teacher_login_modal.php';
                    require_once 'modals/student_login_modal.php';
                    require_once 'modals/teacher_register_modal.php';
                    
            ?>
</nav>
        