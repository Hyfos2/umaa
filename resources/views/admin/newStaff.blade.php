<div class="modal fade" id="new-member">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">New Member</h5>
                           
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

                        <select name="userTypeId"  class="form-control">
                            <option value="">Select Position</option>
                            <option value="1">Administrator</option>
                            <option value="4">Accountant</option>
                            <option value="6">Communicator</option>
                            <option value="5">Education Manager</option>
                        </select>
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
