    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Announcements</h2>

                <div class="box-icon">
                    <a href="/announcement" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-announcements" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-announcements" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                    <div id="panel-announcements" class="box-content">
                    <table class="table table-bordered table-hover">
                      <thead style="">
                <tr>
                    <th>Id_no.</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>slug</th>
                    <th>Description</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($posts as $post)
                    <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->titleAnnouncement}}</td>
                    <td>{{$post->dateAnnouncement}}</td>
                    <td>{{$post->slug}}</td>
                    <td class="ellipsi">{{$post->bodyAnnouncement}}</td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$posts->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-announcements").click(function(){
        $("#panel-announcements").slideUp("slow");
        });

                $("#down-announcements").click(function(){
        $("#panel-announcements").slideDown("slow");
    });
    });


    </script>