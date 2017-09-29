  <div class="navko navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">

                <span>SVLA</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right theme-container animated tada">            
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('admin.logout')}}">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>