<div class="modal fade" id="add-transaction">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Record Transaction</h5>
                           
                        </div>
            <div class="modal-body">
                <form role="form"  method="POST" action ="{{url('pay-fees')}}">
                    {{ csrf_field() }}
                     <input type ="hidden" class="form-control" name="studentId" value="{{$id}}" autocomplete="off">
                      <div class="form-group">
                        <select name="method" class="form-control">
                            <option value="">Select Payment Method</option>
                            <option value="Bank">
                                Bank Transfer
                            </option>
                            <option value="Cash">
                                Cash
                            </option> <option value="Ecocash">
                                Ecocash
                            </option> <option value="Telecash">
                                Telecash
                            </option>
                        </select>
                    </div>
                   
                   
                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="100.00" name="amount" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="Tuition Fee" name="description" autocomplete="off">
                    </div>

                
                
                    <div class="text-right">
                        <button class="btn btn-outline-info" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-outline-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

