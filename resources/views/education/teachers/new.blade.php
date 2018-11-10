<div class="modal fade" id="new-teacher">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">New Teacher</h5>
                           
                        </div>
            <div class="modal-body">
                <form role="form"  method="POST" action ="{{route('register')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="userTypeId" value=2>
                   
                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="Name" name="name" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="Surname" name="surname" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="email" class="form-control"  placeholder="Email" name="email" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <select name="gender" class="form-control">
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
                        <input type ="text" class="form-control selectionDate"  placeholder="Date of Birth" name="dob" autocomplete="off">
                    </div>

                    <div class="form-group">

                        <select name="level"  id ="level" class="form-control">
                            <option value="">Select Level</option>
                            @foreach($level as $item)
                             <option value="{{$item->id}}">{{$item->name}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="sublevel" id="subLevel" class="form-control hidden">
                            <option value="">Select Class</option>
                        </select>
                    </div>
                    <label><i>Zimsec</i></label>
                    <div class="form-group">
                        
                        <div class="form-check-inline form-check">
                            @foreach($zimsec   as  $item)
                                <label for="inline-checkbox1" class="form-check-label ">
                                    <input type="checkbox" name="zimsec[]" value="{{$item->id}}" class="form-check-input">{{$item->name}}
                                </label>
                            @endforeach
                                            </div>
                      
                    </div>
                        <label><i>Cambridge</i></label>
                    <div class="form-group">
                        
                        <div class="form-check-inline form-check">
                            @foreach($cambridge as $item)
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox"  name="cambridge[]" value="{{$item->id}}" class="form-check-input">{{$item->name}}
                                                </label>
                                                @endforeach
                                            </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-outline-info" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-outline-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
