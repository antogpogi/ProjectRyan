    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Staff</h2>

                <div class="box-icon">
                    <a href="/staff" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-staff" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-staff" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-staff" class="box-content">

                <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Middlename</th>
                    <th>slug</th>
                    <th>Position</th>
                    <th>Image</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($staff as $staf)
                    <tr>
                    <td>{{$staf->firstName}}</td>
                    <td>{{$staf->lastName}}</td>
                    <td>{{$staf->middleName}}</td>
                    <td>{{$staf->slug}}</td>
                    <td>{{$staf->position}}</td>
                    <td class="ellipsi">{{$staf->imageStaff}}</td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$staff->links()!!}

                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-staff").click(function(){
        $("#panel-staff").slideUp("slow");
        });

                $("#down-staff").click(function(){
        $("#panel-staff").slideDown("slow");
    });
    });


    </script>