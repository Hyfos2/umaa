@extends('internal.welcome')
@section('content')

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
                        <h3 class="f5 flex-auto">Pay Fees</h3>
                    </div>

                <div class="row">
                    <div class="col-12">
                        <div >
                            <div class="Box p-3 my-3">

                                <form role="form" class="form-horizontal"  method="POST" action ="{{url('accounts')}}">
                                    {{ csrf_field() }}
                                    {{--<input type ="hidden" value="{{$schoolLevel}}" name="schoolLevel" >--}}
                                    {{--<input type ="hidden" value="{{$type}}" name="userTypeId" >--}}
                                    <div class="form-group">
                                        <select name="option"  class="form-control bdc-grey-200">
                                        <option value="">Select Option</option>
                                            {{--<option value="debit">--}}
                                                {{--Debit Card--}}
                                            {{--</option>--}}
                                        <option value="ecocash">
                                        Ecocash
                                        </option>
                                            <option value="telecash">
                                        Telecash
                                        </option>
                                            {{--<option value="master">--}}
                                                {{--Master Card--}}
                                        {{--</option>--}}
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="term"  class="form-control bdc-grey-200">
                                        <option value="">Select Term</option>
                                            <option value="first">
                                                First Term
                                            </option>
                                        <option value="second">
                                       Second Term
                                        </option>
                                            <option value="third">
                                      Third term
                                        </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="07XX" name="number" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="$10.00" name="amount" autocomplete="off">
                                    </div> 
                                    
                                    <div class="form-group">
                                        <textarea name="description" id="" cols="69" rows="5" placeholder="paying fees"></textarea>
                                                        </div>

                                    {{--<div class="form-group">--}}
                                        {{--<select name="gender" class="form-control bdc-grey-200">--}}
                                            {{--<option value="">Select Gender</option>--}}
                                            {{--<option value="Female">--}}
                                                {{--Female--}}
                                            {{--</option>--}}
                                            {{--<option value="Male">--}}
                                                {{--Male--}}
                                            {{--</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<div class="timepicker-input input-icon form-group">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon bgc-white bd bdwR-0">--}}
                                                    {{--<i class="ti-calendar">--}}
                                                    {{--</i></div>--}}
                                                {{--<input type="text" class="form-control bdc-grey-200 start-date" name="dob" placeholder="Date of Birth" data-provide="datepicker" autocomplete="off">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                    {{--<div class="form-group">--}}
                                        {{--<input type ="text" class="form-control bdc-grey-200"  placeholder="Allergies" name="allergy" autocomplete="off">--}}
                                    {{--</div>--}}

                                    <div class="form-group">
                                        {{--<select name="level"  id ="level" class="form-control bdc-grey-200">--}}
                                            {{--<option value="">Select Level</option>--}}
                                            {{--@foreach($levels as $item)--}}
                                                {{--<option value="{{$item->id}}">--}}
                                                    {{--{{$item->name}}--}}
                                                {{--</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    </div>

                                    {{--<div class="form-group">--}}
                                        {{--<select name="sublevel" id="subLevel" class="form-control bdc-grey-200">--}}
                                            {{--<option value="">Select Class</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<input type ="text" class="form-control bdc-grey-200"  placeholder="Parent Name" name="parentname" autocomplete="off">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type ="email" class="form-control bdc-grey-200"  placeholder="Parent Email" name="parentemail" autocomplete="off">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type ="text" class="form-control bdc-grey-200"  placeholder="Parent Cellphone" name="cellphone" autocomplete="off">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type ="text" class="form-control bdc-grey-200"  placeholder="Parent Address" name="address" autocomplete="off">--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--@foreach($sports as $item)--}}
                                            {{--<label for="sports">--}}
                                                {{--{{$item->name}}--}}
                                            {{--</label>--}}
                                            {{--<input type="checkbox" name="sports[]" value="{{$item->id}}">--}}
                                        {{--@endforeach--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--@foreach($zimsecsubjects as $item)--}}
                                            {{--<label for="sports">--}}
                                                {{--{{$item->name}}--}}
                                            {{--</label>--}}
                                            {{--<input type="checkbox" name="zimsec[]" value="{{$item->id}}">--}}
                                        {{--@endforeach--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--@foreach($cambridgesubjects as $item)--}}
                                            {{--<label for="sports">--}}
                                                {{--{{$item->name}}--}}
                                            {{--</label>--}}
                                            {{--<input type="checkbox" name="cambridge[]" value="{{$item->id}}">--}}
                                        {{--@endforeach--}}
                                    {{--</div>--}}

                                    <div class="text-right">

                                        <button type="submit"  class="btn btn-primary cur-p">Submit</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>



                </div>

            </div>
            <div class="modal-backdrop js-touch-events"></div>
        </div>
@stop