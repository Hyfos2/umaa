 <div class="tab-pane fade show active" id="custom-nav-form-1" role="tabpanel" aria-labelledby="custom-nav-form-1-tab">
                                              


<table id="form1Teacher" class="display" style="width:100%;margin-top:10px;">
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
            @foreach($formOneTrs  as $item)
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


                                            