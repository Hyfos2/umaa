<div class="modal fade" id="new-sport">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="bd p-15">
                <h5 class="m-0">New Sport</h5>
            </div>



            <div class="modal-body">
                <form role="form"  method="POST" action ="{{url('sport')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Sport Name" name="name" autocomplete="off">
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