@extends('internal.welcome')
@section('content')

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <div role="main" class="application-main ">

        <div id="js-pjax-container" data-pjax-container="">
            <div class="container">
                <div id="dashboard" class="dashboard columns">
                    @include('newAdmin.alertMessages')
                    @include('internal.student.breadcrumb')


                    <div class="dashboard-sidebar column one-third pr-5 pt-3">
                    </div>

                    <div id="your_teams" class="js-repos-container user-repos" data-pjax-container="">
                    </div>

                </div>

                <div class="border-bottom border-gray-dark d-flex py-3 flex-items-center mb-3">
                    <h3 class="f5 flex-auto">Balance Statement</h3>
                </div>

                <div class="row">
                    <div class="col-12">

                            <div class="Box p-3 my-3">

                                <table>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Transaction Date</th>
                                        <th>Description</th>
                                        <th>Debit</th>
                                        <th>Credit</th>
                                    </tr>
                                    @foreach($studentAccount as $item)
                                    <tr>
                                        <td>{{$item->reference}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->description}} for {{$item->term}} term</td>
                                        <td>{{$item->debit}}</td>
                                        <td>{{$item->credit}}</td>
                                    </tr>
                                        @endforeach
                                </table>
                                <table>
                                    <tr><th>
                                            Account Balance : @if($balance->balance >0)
                                                {{$balance->balance}}  ( <i>your account is credited ${{$balance->balance}})</i>)
                                                                  @else
                                            {{$balance->balance}}   (<i>you owe the school  ${{substr($balance->balance,-3)}}</i>)
                                                                  @endif
                                        </th></tr>
                                </table>
                            </div>

                    </div>
                </div>



            </div>

        </div>
        <div class="modal-backdrop js-touch-events"></div>
    </div>
@stop