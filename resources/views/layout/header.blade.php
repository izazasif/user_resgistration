<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <!-- <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a> -->
          <img class="brand" src="{{ asset('logo.png') }}" style="height:70px;" alt="bootstraper logo">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
       
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           
            <!-- /.messages-menu -->

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!-- <img class="brand" src="{{ asset('user2.png') }}" style="height:70px;" alt="bootstraper logo"> -->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <!-- <span class="hidden-xs">{{Auth::user()->name}}</span> -->
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                <!-- <img class="brand" src="{{ asset('user2.png') }}" style="height:70px;" alt="bootstraper logo"> -->

                  <p>
                    <!-- {{Auth::user()->name}} -->
                    <!-- <small>Member since Nov. 2012</small> -->
                  </p>
                </li>
             
                <!-- Menu Footer-->
                <li class="user-footer">
                  <!-- <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div> -->
                 
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="pull-right right1">
                    <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      
      <!-- /.container-fluid -->
    </nav>
  </header>