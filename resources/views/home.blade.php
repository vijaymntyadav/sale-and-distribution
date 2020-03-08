@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 card_box_three card-1">
                            <div class="text-center padding_col_3">
                                Total Sr.Manager/Manager : {{count($manager)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 card_box_three card-1">
                            <div class="text-center padding_col_2">
                                Total Regional Manager : {{count($rm)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 card_box_three card-1">
                            <div class="text-center padding_col_3">
                                Total Area Sales Manager : {{count($asm)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 card_box_three card-1">
                            <div class="text-center padding_col_3">
                                Total Sr.Executive/Executive : {{count($e)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 card_box_three card-1">
                            <div class="text-center padding_col_2">
                                Total Dealer : {{count($dealer)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 card_box_three card-1">
                            <div class="text-center padding_col_3">
                                Total User : {{count($admin)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
