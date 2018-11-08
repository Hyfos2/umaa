<div class="modal fade" id="new-subject">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="bd p-15">
                <h5 class="m-0">New Subject</h5>
            </div>



            <div class="modal-body">
                <form role="form"  method="POST" action ="{{url('subject')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Subject code" name="code" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Name" name="name" autocomplete="off">
                    </div>




                    <div class="form-group">
                        <select name="level" class="form-control bdc-grey-200">
                            <option value="">Select Level</option>
                            @foreach($levels  as $level)
                            <option value="{{$level->id}}">
                                {{$level->name}}
                            </option>
                            @endforeach
        
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="board" class="form-control bdc-grey-200">
                            <option value="">Select Board</option>
                            <option value="2">
                                Cambridge
                            </option>
                            <option value="1">
                                Zimsec
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