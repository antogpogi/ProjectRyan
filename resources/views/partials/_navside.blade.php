           <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a href="/dashboard"><span><i class="fa fa-home fa-2x"></i> Dashboard</span></a></li>
                        <li><a class="" href="/course"><span> Courses offered</span></a></li> 
                        <li><a class="" href="/news"><span> Latest News</span></a></li>
                        <li><a class="" href="/events"><span> Events</span></a> </li>
                        <li class="{{ Request::is('/announcement') ? "ajax-link" : ""}}"><a class="" href="/announcement"><span> Announcement</span></a>
                            <li class="nav-header hidden-md">School</li>
                        <li><a href="/admin"><span> Admin</span></a></li>
                        <li><a class="" href="/staff"><span> Staff</span></a></li>
                        <li><a class="" href="/faculty"><span> Faculty</span></a></li>
                        <li><a class="" href="/pta"><span> PTA</span></a></li>
                        <li><a href="/discount"><span> Discounts</span></a></li>
                        <li><a href="/tuition"><span> Tuitions</span></a></li>                     
                    </ul>
                </div>
            </div>