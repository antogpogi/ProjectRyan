@extends('main')

@section('title','| Create Discount')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}


@endsection

@section('box-content')
    <p class="lead">This is the Tuition Post</p>
        <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="fa fa-thumb-tack"></i> Tuition</h2>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-8">
                        {!! Form::model($tuition,['route' => ['tuition.update',$tuition->id],'method' => 'PUT'])!!}
                        <div class="form-group">
                            <div class="col-md-5">
                                 {{Form::label('category','Category:')}}
                                 {{ Form::select('title', ['PRE-SCHOOL' => 'PRE-SCHOOL','ELEMENTARY' => 'ELEMENTARY','JUNIOR HIGH SCHOOL'=> 'JUNIOR HIGH SCHOOL','SENIOR HIGH SCHOOL'=> 'SENIOR HIGH SCHOOL'], null, ['class' => 'form-control']) }} 
                                 <br>
                                {{Form::label('level','Level:')}}
                                {{Form::text('level',null,array('placeholder' => 'Title...','class' => 'form-control capital-letter','required' => ''))}}
 
                                <br>
                                {{Form::label('down payment','Payment:')}}
                                {{Form::text('downPayment',null,array('placeholder' => 'Payment...','class' => 'form-control','required' => '','onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;"','onkeyup = "javascript:this.value=Comma(this.value);"'))}}
                                <br> 
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                {{Form::label('computer fee','Computer Fee:')}}                                   
                                {{Form::text('computerFee',null,array('placeholder' => 'Computer Fee...','class' => 'form-control','required' => '','onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;"','onkeyup = "javascript:this.value=Comma(this.value);"'))}}
                                <br>
                                {{Form::label('montly fee','Monthly Fee:')}}
                                {{Form::text('monthlyFee',null,array('placeholder' => 'Monthly Fee...','class' => 'form-control','required' => '','onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;"','onkeyup = "javascript:this.value=Comma(this.value);"'))}}                                                                                             
                                <br>

                                <br>
                                </div>
                            </div>

                        </div>
                    </div>
                            <br>
                            <br>

                            <div class="col-md-4">
                                <div class="well">
                                     <dl class="dl-horizontal">
                                   
                                   
                                    </dl>
                                  <br>
                                        <dl class="dl-horizontal">
                                   
                                    
                                         </dl>
          
                                <hr>
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <a href="/tuition" class="Btn btn-block Btn-yellow">Cancel</a>
                                        
                                    </div>

                                    <div class="col-sm-6">
                                         {{Form::submit('Submit',array('class' => 'Btn btn-block Btn-blue ','style' => ''))}}
                                        
                                    </div>
                                </div>

                                </div>
                            </div>

                </div>
            </div>
            {{Form::close()}}

        </div>
    </div>
</div>



@endsection

@section('scripts')
    
    {!! Html::script('js/parsley.min.js')!!}
    {!! Html::script('calendar/jquery-1.12.4.js')!!}
    {!! Html::script('calendar/jquery-ui.js')!!}
    
    <script type="text/javascript">
      function Comma(Num) { //function to add commas to textboxes
        Num += '';
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        return x1 + x2;
    }
    </script>

@endsection