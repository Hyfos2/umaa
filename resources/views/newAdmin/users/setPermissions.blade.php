<div class="modal fade" id="set-permissions">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="bd p-15">
                <h5 class="m-0">Set Permission</h5>
            </div>

            <div class="modal-body">
                <form role="form"  method="POST" action ="{{url('set-user-permission')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" id="user_id">
                    <div class="form-group">
                        <label for="">Choose User Type</label>
                        <select name="user_type" class="form-control" required="required">
                            <option value="">Select User Type</option>
                            @foreach($userType as $item)
                                <option value="{{$item->id}}">
                                    {{$item->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @foreach($permissions as $permission)

                    <div class="form-group">

                        <table style="width:100%;">
                            <tr>
                                {{--<td><label>{{str_replace('_',' ',$permission->name)}}</label></td>--}}
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td><label>{{str_replace('_',' ',$permission->name)}}</label></td>
                                <td><input type ="checkbox"  name="permission[]" value="{{$permission->id}}"></td>
                            </tr>
                        </table>
                    </div>
                    @endforeach

                    <div class="text-right">
                        <button class="edit-modal btn btn-info" data-dismiss="modal">Close</button>
                        <button type="submit"  class="edit-modal btn btn-info">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>