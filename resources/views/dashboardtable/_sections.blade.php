    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Sections</h2>

                <div class="box-icon">
                    <a href="/course" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-sections" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-sections" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-sections" class="box-content">

                <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Id_no.</th>
                    <th>Section</th>
                    <th>Time_Am</th>
                    <th>Time_Pm</th>
                    <th>Adviser</th>
               
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($sections as $section)
                    <tr>
                    <th>{{$section->id}}</th>
                    <td>{{$section->sectionName}}</td>
                    <td>{{$section->timeAm}}</td>
                    <td>{{$section->timePm}}</td>
                    <td>{{$section->adviser}}</td>

                    
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$sections->links()!!}

                    </div>         
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-sections").click(function(){
        $("#panel-sections").slideUp("slow");
        });

        $("#down-sections").click(function(){
        $("#panel-sections").slideDown("slow");
    });
    });


    </script>