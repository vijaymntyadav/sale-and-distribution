@extends('master')
@section('report','active')
@section('hierarchy_wise_product.index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Products<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'hierarchy_wise_product.search','method' => 'POST']) !!}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                        <span class="input-group-btn"><button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button></span>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <br/>
        <div class="row table-responsive">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>M_Name</th>
                        <th>RM_Name</th>
                        <th>ASM_Name</th>
                        <th>E_Name</th>
                        <th>D_Name</th>
                        <th>P_Code</th>
                        <th>P_Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Pieces</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($hierarchies->count() ==! 0)
                        @foreach($hierarchies as $hierarchy)
                            <tr>
                                <td>{{ ($hierarchies->currentpage()-1) * $hierarchies ->perpage() + $loop->index + 1 }}</td>
                                @if($hierarchy->m_id == 0)
                                <td><div class="td_design">&nbsp;</div></td>
                                @else
                                <td><a href="#" data-toggle="m_email" title="{{$hierarchy->m_email}}">{{$hierarchy->m_name}}</a></td>
                                @endif
                                @if($hierarchy->rm_id == 0)
                                <td><div class="td_design">&nbsp;</div></td>
                                @else
                                <td><a href="#" data-toggle="rm_email" title="{{$hierarchy->rm_email}}">{{$hierarchy->rm_name}}</a></td>
                                @endif
                                @if($hierarchy->asm_id == 0)
                                <td><div class="td_design">&nbsp;</div></td>
                                @else
                                <td><a href="#" data-toggle="asm_email" title="{{$hierarchy->asm_email}}">{{$hierarchy->asm_name}}</a></td>
                                @endif
                                @if($hierarchy->e_id == 0)
                                <td><div class="td_design">&nbsp;</div></td>
                                @else
                                <td><a href="#" data-toggle="e_email" title="{{$hierarchy->e_email}}">{{$hierarchy->e_name}}</a></td>
                                @endif
                                @if($hierarchy->d_id == 0)
                                <td><div class="td_design">&nbsp;</div></td>
                                @else
                                <td><a href="#" data-toggle="d_name" title="{{$hierarchy->d_name}}">{{$hierarchy->d_code}}</a></td>
                                @endif
                                <td>{{$hierarchy->product_code}}</td>
                                <td>{{$hierarchy->product_name}}</td>
                                <td>{{$hierarchy->category}}</td>
                                <td>{{$hierarchy->price}}/-</td>
                                <td>{{$hierarchy->pieces}}pieces</td>
                                <td>
                                    <div class="modal fade" id="delete_modal_{{$hierarchy->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Track Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Track ?</p>
                                                    <p>Once You Delete These Track,This Track Record Will Be Delete Permanently</p>
                                                </div>
                                                {!! Form::open(['route'=>['hierarchy_wise_product.destroy',$hierarchy->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs " data-toggle="modal" data-target="#delete_modal_{{$hierarchy->id}}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">No Product Available</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $hierarchies->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="m_email"]').tooltip();
            $('[data-toggle="rm_email"]').tooltip();
            $('[data-toggle="asm_email"]').tooltip();
            $('[data-toggle="e_email"]').tooltip();
            $('[data-toggle="d_name"]').tooltip();
        });
    </script>
@endsection



