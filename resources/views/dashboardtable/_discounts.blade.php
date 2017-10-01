    <div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well">
                <h2>Discounts</h2>

                <div class="box-icon">
                    <a href="discount" id="up" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-eye"></i></a>
                    <a  id="up-discounts" class="btn btn-minimize btn-round btn-default"><i
                            class="fa fa-chevron-up"></i></a>
                    <a  id="down-discounts" class="btn btn-close btn-round btn-default"><i
                            class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                <div id="panel-discounts" class="box-content">
                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Id_no.</th>
                    <th>Title</th>
                    <th>Percentage</th>
                </tr>   
                      </thead>
                <tbody>
                    @foreach($discounts as $discount)
                    <tr>
                        <th>{{$discount->id}}</th>
                        <td class="ellipsi">{{$discount->titleDiscount}}</td>
                        <td>{{$discount->percent}}</td>
                    </tr>   
                    @endforeach
                   
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$discounts->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#up-discounts").click(function(){
        $("#panel-discounts").slideUp("slow");
        });

                $("#down-discounts").click(function(){
        $("#panel-discounts").slideDown("slow");
    });
    });


    </script>