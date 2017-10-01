    <div class="box col-md-7">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Course Offered</h2>

                <div class="box-icon">
                    <a href="/course" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-course" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-course" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-course" class="box-content">

                <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Id_no.</th>
                    <th>Title</th>
                    <th>slug</th>
                    <th>Image</th>
                    <th>Description</th>
               
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($courses as $course)
                    <tr>
                    <th>{{$course->id}}</th>
                    <td>{{$course->titleCourse}}</td>
                    <td>{{$course->slug}}</td>
                    <td class="ellipsi">{{$course->imageCourse}}</td>
                    <td class="ellipsi">{{$course->bodyCourse}}</td>

                    
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$courses->links()!!}

                    </div>         
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-course").click(function(){
        $("#panel-course").slideUp("slow");
        });

                $("#down-course").click(function(){
        $("#panel-course").slideDown("slow");
    });
    });


    </script>