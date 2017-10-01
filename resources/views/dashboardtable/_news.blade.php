    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>News</h2>

                <div class="box-icon">
                    <a href="/news" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-news" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-news" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div class="box-content">
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
                
                    @foreach ($news as $lnew)
                    <tr>
                    <th>{{$lnew->id}}</th>
                    <td>{{$lnew->titleNews}}</td>
                    <td>{{$lnew->slug}}</td>
                    <td class="ellipsi">{{$lnew->imageNews}}</td>
                    <td class="ellipsi">{{$lnew->bodyNews}}</td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$news->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-news").click(function(){
        $("#panel-news").slideUp("slow");
        });

                $("#down-news").click(function(){
        $("#panel-news").slideDown("slow");
    });
    });


    </script>