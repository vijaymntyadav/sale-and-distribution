@extends('master')
@section('report','active')
@section('sale_report.index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Sale<hr/></h2>
            </div>
        </div>
        {!! Form::open(['id' => 'hierarchy_wise_report_find']) !!}
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="manager">Sr.Manager/Manager:</label>
                    <select class="form-control" id="manager" name="manager">
                        <option selected value="0">choose an option</option>
                        @foreach($managers as $manager)
                            <option value="{{$manager->m_id}}">{{$manager->m_name}} ({{$manager->m_email}})</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="rm">RM:</label>
                    <select class="form-control" id="rm" name="rm">
                        <option selected value="0">choose an option</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="asm">ASM:</label>
                    <select class="form-control" id="asm" name="asm">
                        <option selected value="0">choose an option</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="executive">Sr.Executive/Executive:</label>
                    <select class="form-control" id="executive" name="executive">
                        <option selected value="0">choose an option</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="dealer">Dealer:</label>
                    <select class="form-control" id="dealer" name="dealer">
                        <option selected value="0">choose an option</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-4">
                <div class="form-group text-center">
                    <label for="sel1">Search Report</label>
                    <a class="btn btn-success btn-block hierarchy_wise_report_search">Search</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        {!! Form::open(['id' => 'location_wise_report_find']) !!}
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <div class="form-group">
                    <label for="division">Division:</label>
                    <select class="form-control" id="division" name="division">
                        <option selected disabled value="">choose an option</option>
                        @foreach($divisions as $division)
                            <option value="{{$division->division}}">{{$division->division}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="district">District:</label>
                    <select class="form-control" id="district" name="district">
                        <option selected disabled value="">choose an option</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="sub_district">Sub Locality:</label>
                    <select class="form-control" id="sub_district" name="sub_district">
                        <option selected disabled value="">choose an option</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="postal_code">Postal Code:</label>
                    <select class="form-control" id="postal_code" name="postal_code">
                        <option selected disabled value="">choose an option</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-4">
                <div class="form-group text-center">
                    <label for="sel1">Search Report</label>
                    <a class="btn btn-success btn-block location_wise_report_find_search">Search</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        <br/>
        <div class="row table-responsive">
            <div class="col-md-10 pagination_data" id="paginate_data">
               @include('admin.sale_report.paginate')
            </div>
        </div>
    </div>
    <script>
        let manager = document.getElementById('manager');
        let rm = document.getElementById('rm');
        let asm = document.getElementById('asm');
        let executive = document.getElementById('executive');
        let dealer = document.getElementById('dealer');
        let division = document.getElementById('division');
        let district = document.getElementById('district');
        let sub_district = document.getElementById('sub_district');
        let postal_code = document.getElementById('postal_code');
        $(document).on('click','.pagination a',function(event){
            event.preventDefault();
            let page_url = $(this).attr('href');
            $.ajax({
                url:page_url,
                success:function(data){
                    $('.pagination_data').html(data)
                }
            })
        });
        $(document).on('click','.location_wise_report_find_search',function(){
                let formData = {
                   division : division.value,
                   district : district.value,
                   sub_district : sub_district.value,
                   postal_code  : postal_code.value,
                };
               $.ajax({
                  url : '/location/wise/report/find',
                  data : {_token : "{{ csrf_token() }}",formData : formData},
                  success : function(data){
                      $('.pagination_data').html(data);
                  }
               });
        });
        $(document).on('click','.hierarchy_wise_report_search',function(){
               let formData = {
                 m_id : manager.value,
                 rm_id : rm.value,
                 asm_id : asm.value,
                 e_id : executive.value,
                 d_id : dealer.value,
               };
               $.ajax({
                  url : '/hierarchy/wise/report/find',
                  data : {_token : "{{ csrf_token() }}",formData : formData},
                  success : function(data){
                      $('.pagination_data').html(data);
                  }
               });
        });
        $(document).on('change','#manager',function(){
            $('#rm').empty();
            $('#dealer').empty();
            $('#asm').empty();
            $('#executive').empty();
            $('#asm').append('<option selected value="0">Choose An Option</option>');
            $('#executive').append('<option selected value="0">Choose An Option</option>');
          $.ajax({
             url : '/manager/wise/rm/find',
             data : {m_id:manager.value},
             success : function (data) {
                 $('#rm').append('<option selected value="0">Choose An Option</option>');
                 jQuery.each( data[0], function( item, value ) {
                     $('#rm').append('<option value=' + value.rm_id + '>' + value.rm_name + '(' + value.rm_email +')</option>');
                 });
                 $('#dealer').append('<option selected value="0">Choose An Option</option>');
                 jQuery.each( data[1], function( item, value ) {
                     $('#dealer').append('<option value=' + value.d_id + '>' + value.d_name + '(' + value.d_code +')</option>');
                 });
             }
          });
        });
        $(document).on('change','#rm',function(){
            $('#asm').empty();
            $('#dealer').empty();
            $('#executive').empty();
            $('#executive').append('<option selected value="0">Choose An Option</option>');
            $.ajax({
                url : '/rm/wise/asm/find',
                data : {m_id:manager.value,rm_id:rm.value},
                success : function(data){
                    $('#asm').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[0], function( item, value ) {
                        $('#asm').append('<option value=' + value.asm_id + '>' + value.asm_name + '(' + value.asm_email +')</option>');
                    });
                    $('#dealer').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[1], function( item, value ) {
                        $('#dealer').append('<option value=' + value.d_id + '>' + value.d_name + '(' + value.d_code +')</option>');
                    });
                }
            })
        });
        $(document).on('change','#asm',function(){
            $('#executive').empty();
            $('#dealer').empty();
             $.ajax({
                 url : '/asm/wise/executive/find',
                 data : {m_id:manager.value,rm_id:rm.value,asm_id:asm.value},
                 success : function(data){
                     $('#executive').append('<option selected value="0">Choose An Option</option>');
                     jQuery.each( data[0], function( item, value ) {
                         $('#executive').append('<option value=' + value.e_id + '>' + value.e_name + '(' + value.e_email +')</option>');
                     });
                     $('#dealer').append('<option selected value="0">Choose An Option</option>');
                     jQuery.each( data[1], function( item, value ) {
                         $('#dealer').append('<option value=' + value.d_id + '>' + value.d_name + '(' + value.d_code +')</option>');
                     });
                 }
             })
        });
        $(document).on('change','#executive',function(){
            $('#dealer').empty();
             $.ajax({
                 url : '/executive/wise/dealer/find',
                 data : {m_id:manager.value,rm_id:rm.value,asm_id:asm.value,e_id:executive.value},
                 success : function(data){
                     $('#dealer').append('<option selected value="0">Choose An Option</option>');
                     jQuery.each( data[0], function( item, value ) {
                         $('#dealer').append('<option value=' + value.d_id + '>' + value.d_name + '(' + value.d_code +')</option>');
                     });
                 }
             })
        });
        $(document).on('change','#division',function(){
            $('#district').empty();
            $('#sub_district').empty();
            $('#postal_code').empty();
            $('#sub_district').append('<option selected disabled value="">Choose An Option</option>');
            $('#postal_code').append('<option selected disabled value="">Choose An Option</option>');
            $.ajax({
              url : '/division/wise/district/find',
              data : {division:division.value},
              success : function(data){
                  $('#district').append('<option selected disabled value="">Choose An Option</option>');
                  jQuery.each( data, function( item, value ) {
                      $('#district').append('<option value="' + value.district + '">' + value.district  +'</option>');
                  });
              }
            })
        });
        $(document).on('change','#district',function(){
            $('#sub_district').empty();
            $('#postal_code').empty();
            $('#postal_code').append('<option selected disabled value="">Choose An Option</option>');
            $.ajax({
                url : '/district/wise/sub_locality/find',
                data : {division:division.value,district:district.value},
                success : function(data){
                    $('#sub_district').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#sub_district').append('<option value= "' + value.sub_district + '">' + value.sub_district  +'</option>');
                    });
                }
            })
        });
        $(document).on('change','#sub_district',function(){
            $('#postal_code').empty();
            $.ajax({
                url : '/sub_locality/wise/postal_code/find',
                data : {division:division.value,district:district.value,sub_district:sub_district.value},
                success : function(data){
                    $('#postal_code').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#postal_code').append('<option value="' + value.postal_code + '">' + value.postal_code  +'</option>');
                    });
                }
            })
        });
    </script>
@endsection



