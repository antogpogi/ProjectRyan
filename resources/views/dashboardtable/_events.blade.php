    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Events</h2>

                <div class="box-icon">
                    <a href="events" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-events" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-events" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-events" class="box-content">

                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Id_no.</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>slug</th>

                </tr>   
                      </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <th>{{$event->id}}</th>
                        <td>{{$event->titleEvents}}</td>
                        <td>{{$event->dateEvents}}</td>
                        <td>{{$event->timeAmEvents}}</td>
                        <td>{{$event->timePmEvents}}</td>
                        <td>{{$event->slug}}</td>



                    </tr>   
                    @endforeach
                   
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$events->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-events").click(function(){
        $("#panel-events").slideUp("slow");
        });

                $("#down-events").click(function(){
        $("#panel-events").slideDown("slow");
    });
    });


    </script>