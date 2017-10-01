    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>PTA</h2>

                <div class="box-icon">
                    <a href="/pta" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-ptas" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-ptas" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-ptas" class="box-content">

                                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Id_no.</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Middle_initials</th>
                    <th>Position</th>
                    <th>slug</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($ptas as $pta)
                    <tr>
                    <th>{{$pta->id}}</th>
                    <td>{{$pta->ptaFname}}</td>   
                    <td>{{$pta->ptaLname}}</td>         
                    <td>{{$pta->ptaMi}}</td>
                    <td>{{$pta->ptaPosition}}</td>
                    <td>{{$pta->slug}}</td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$ptas->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-ptas").click(function(){
        $("#panel-ptas").slideUp("slow");
        });

                $("#down-ptas").click(function(){
        $("#panel-ptas").slideDown("slow");
    });
    });


    </script>