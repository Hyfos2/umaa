<div class="modal fade" id="new-student">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="bd p-15">
                <h5 class="m-0">ADD TEACHER</h5>
            </div>
            <div class="modal-body">
                <form role="form"  method="POST" action ="{{route('register')}}">
                    {{ csrf_field() }}
                    <input type ="hidden" value="{{$schoolLevel}}" name="schoolLevel" >
                    <input type ="hidden" value="{{$type}}" name="userTypeId" >
                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Name" name="name" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Surname" name="surname" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="email" class="form-control bdc-grey-200"  placeholder="Email" name="email" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <select name="gender" class="form-control bdc-grey-200">
                            <option value="">Select Gender</option>
                            <option value="Female">
                                Female
                            </option>
                            <option value="Male">
                                Male
                            </option>
                        </select>
                    </div>


                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200 selectionDate"  placeholder="Date of Birth" name="dob" autocomplete="off">
                    </div>




                    <div class="form-group">

                        <select name="level"  id ="level" class="form-control bdc-grey-200">
                            <option value="">Select Level</option>
                            @foreach($levels as $item)
                                <option value="{{$item->id}}">
                                    {{$item->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="sublevel" id="subLevel" class="form-control bdc-grey-200">
                            <option value="">Select Class</option>
                        </select>
                    </div>
                    <label><i>Zimsec</i></label>
                    <div class="form-group">

                        @foreach($zimsecsubjects as $item)
                            <label for="sports">
                                {{$item->name}}
                            </label>
                            <input type="checkbox" name="zimsec[]" value="{{$item->id}}">
                        @endforeach
                    </div>
                        <label><i>Cambridge</i></label>
                    <div class="form-group">
                        @foreach($cambridgesubjects as $item)
                            <label for="sports">
                                {{$item->name}}
                            </label>
                            <input type="checkbox" name="cambridge[]" value="{{$item->id}}">
                        @endforeach
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary cur-p" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-primary cur-p">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>