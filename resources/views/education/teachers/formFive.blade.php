 <div class="tab-pane fade" id="custom-nav-form-5" role="tabpanel" aria-labelledby="custom-nav-form-5-tab">
                                              

                                              <table id="form5Teacher" class="display" style="width:100%;margin-top:10px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($formFiveTrs  as $item)
            <tr>
                <td>{{$item->user->name}}</td>
                <td>{{$item->user->surname}}</td>
                <td>{{$item->user->gender}}</td>
                <td>{{$item->user->email}}</td>
                <td>
                     <a class="btn btn-outline-info" href="{{url('teacher-classes/'.$item->id)}}">Classes</a>
                 </td>
            </tr>
            @endforeach

        </tbody>

    </table>
                                            </div>
