    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Tuitions</h2>

                <div class="box-icon">
                    <a href="/tuition" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-tuitions" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-tuitions" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                    <div id="panel-tuitions" class="box-content">

                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Id_no.</th>
                    <th>Category</th>
                    <th>Title</th>                   
                    <th>Down_Payment</th>
                    <th>Computer_Fee</th>
                    <th>Monthly_Fee</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($tuitions as $tuition)
                    <tr>
                    <th>{{$tuition->id}}</th>
                    <td>{{$tuition->level}}</td>
                    <td>{{$tuition->title}}</td>   
                    <td>{{$tuition->downPayment}}</td>         
                    <td>{{$tuition->computerFee}}</td>
                    <td>{{$tuition->monthlyFee}}</td>                
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$tuitions->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-tuitions").click(function(){
        $("#panel-tuitions").slideUp("slow");
        });

                $("#down-tuitions").click(function(){
        $("#panel-tuitions").slideDown("slow");
    });
    });


    </script>