<div class="modal fade" id="new-subject">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">New Subject</h5>
                           
                        </div>
            <div class="modal-body">
                <form role="form"  method="POST" action ="{{route('register')}}">
                    {{ csrf_field() }}
                   
                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="English" name="name" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="HCS234" name="surname" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="Zimsec" name="board" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <select name="level" class="form-control">
                            <option value="">Select Level</option>
                            <option value="Female">
                                Form One 
                            </option>
                            <option value="Male">
                                Form Two
                            </option>
                        </select>
                    </div>


                    <div class="text-right">
                        <button class="btn btn-outline-info" data-dismiss="modal">Cancel</button>
                        <button type="submit"  class="btn btn-outline-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
