<table class="table">
    <thead>
    <tr>
        <th>S.No</th>
        <th>Employee Name</th>
        <th>Position</th>
        <th>Challan No</th>
        <th>Organization Name</th>
        <th>Number</th>
        <th>Total Amount</th>
        <th>Total Due</th>
        <th>Option</th>
    </tr>
    </thead>
    <tbody>
    @if($sales->count() ==! 0)
        @foreach($sales as $sale)
            <tr>
                <td>{{ ($sales->currentpage()-1) * $sales ->perpage() + $loop->index + 1 }}</td>
                <td>
                    <a href="#" data-toggle="email" title="{{$sale->em_email}}">{{$sale->em_name}}</a>
                </td>
                <td>{{$sale->position}}</td>
                <td>{{$sale->challan_no}}</td>
                <td>{{$sale->organization_name}}</td>
                <td>{{$sale->mobile_number}}</td>
                <td>{{$sale->total_amount}}/-</td>
                <td>{{$sale->total_outstanding}}/-</td>
                <td>
                    <a class="btn btn-success btn-xs btn-block" href="{{route('sale_report.show',$sale->id)}}" target="_blank">Details</a>
                    <br/>
                    <div class="modal fade" id="delete_modal_{{$sale->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Sale Report Delete</h4>
                                </div>
                                <div class="modal-body text-center text-danger">
                                    <p>Are You Want To Delete This Sale Report?</p>
                                    <p>Once You Delete These Sale Report,This Sale Report Record Will Be Delete Permanently</p>
                                </div>
                                {!! Form::open(['route'=>['sale_report.destroy',$sale->id],'method' => 'DELETE']) !!}
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$sale->id}}">Delete</button>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="12">No Sale Available</td>
        </tr>
    @endif
    </tbody>
</table>
{!! $sales->links() !!}
<script>
    $(document).ready(function(){
        $('[data-toggle="email"]').tooltip();
    });
</script>
