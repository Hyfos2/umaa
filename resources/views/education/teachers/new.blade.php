<div class="modal fade" id="new-teacher">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">New Teacher</h5>
                           
                        </div>
            <div class="modal-body">
                <form role="form"  method="POST" action ="{{route('register')}}">
                    {{ csrf_field() }}
                   
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
                           
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="sublevel" id="subLevel" class="form-control">
                            <option value="">Select Class</option>
                        </select>
                    </div>
                    <label><i>Zimsec</i></label>
                    <div class="form-group">

                      
                    </div>
                        <label><i>Cambridge</i></label>
                    <div class="form-group">
                      
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
