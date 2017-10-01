    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Faculty</h2>

                <div class="box-icon">
                    <a href="faculty" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-faculty" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-faculty" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-faculty" class="box-content">

                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Middlename</th>
                    <th>Slug</th>
                    <th>Level</th>
                    <th>Advisory Class</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($faculty as $fac)
                    <tr>
                    <td>{{$fac->firstName}}</td>
                    <td>{{$fac->lastName}}</td>
                    <td>{{$fac->middleName}}</td>
                    <td>{{$fac->slug}}</td>
                    <td>{{$fac->level}}</td>
                    <td>{{$fac->advisoryClass}}</td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$faculty->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-faculty").click(function(){
        $("#panel-faculty").slideUp("slow");
        });

                $("#down-faculty").click(function(){
        $("#panel-faculty").slideDown("slow");
    });
    });


    </script>