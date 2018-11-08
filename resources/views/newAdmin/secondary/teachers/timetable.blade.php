<div class="modal fade" id="new-time-table">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="bd p-15">
                <h5 class="m-0">CREATE TIME TABLE</h5>
            </div>
            <div class="modal-body">
                <form role="form"  method="POST" action ="{{url('timetable')}}">
                    {{ csrf_field() }}
                    <input type ="hidden" value="{{$schoolLevel}}" name="schoolLevel" >
                    <input type ="hidden" value="{{$type}}" name="userTypeId" >

                    <div class="form-group">

                        <select name="level"  id ="timetableLevel" class="form-control bdc-grey-200">
                            <option value="">Select Level</option>
                            @foreach($levels as $item)
                                <option value="{{$item->id}}">
                                    {{$item->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="sublevel" id="timetableSubLevel" class="form-control bdc-grey-200">
                            <option value="">Select Class</option>
                        </select>
                    </div>


                      <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  id="timeTableTeacher" placeholder="Search for a teacher" name="teacherId" autocomplete="off">
                    </div>


                    <div class="form-group">
                        <select name="weekday"  class="form-control bdc-grey-200">
                            <option value="">Select Day</option>
                            <option value="monday">Monday</option><option value="tuesday">Tuesday</option><option value="wednesday">Wednesday</option><option value="thursday">Thursday</option><option value="friday">Friday</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200 " id="timeTableSubjectId" placeholder="Search for a subject"  name="subjectId">
                    </div>

                  

                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"   placeholder="start_time" name="start_time" autocomplete="off">
                    </div>

                     <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="End Time" name="end_time" autocomplete="off">
                    </div>

                  <!--<div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Pick Color" name="color" autocomplete="off">
                    </div> -->


                    <div class="text-right">
                        <button class="btn btn-primary cur-p" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-primary cur-p">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>