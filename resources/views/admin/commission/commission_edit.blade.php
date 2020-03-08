@extends('master')
@section('commission','active')
@section('commission_index','active')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Update Commission</h3>
            </div>
            <div class="col-md-7 col-md-offset-2">
                <div class="text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                {!! Form::open(['class'=>'form-horizontal','method'=>'PATCH','route'=>['commission.update',$edit->id]]) !!}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Commission : </label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="commission" name="commission" value="{{$edit->commission}}" placeholder="Enter Commission" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender">Status :</label>
                    <div class="col-sm-10">
                        <select class="select_product_category_design" name="status" required>
                            <option @if($edit->status == 'active') selected="selected" @endif>active</option>
                            <option @if($edit->status == 'deactivate') selected="selected" @endif>deactivate</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

