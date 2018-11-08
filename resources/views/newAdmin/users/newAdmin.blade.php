<div class="modal fade" id="new-admin">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="bd p-15">
                <h5 class="m-0">New Admin</h5>
            </div>



            <div class="modal-body">
                <form role="form"  method="POST" action ="{{route('register')}}">
                    {{ csrf_field() }}
                    {{--{{$type}}--}}
                    @if(empty($type))
                        <input type ="hidden" value="0" name="userTypeId" >
                        @else
                    <input type ="hidden" value="{{$type}}" name="userTypeId" >
                    @endif
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



                    <div class="text-right">
                        <button class="btn btn-primary cur-p" data-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-primary cur-p">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>