 <div class="tab-pane fade show active" id="custom-nav-admin" role="tabpanel" aria-labelledby="custom-nav-admin-tab">

 	  <table id="admins" class="display" style="width:100%;margin-top:10px;">
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
            @foreach($admin as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->email}}</td>
                <td>
                     <a class="edit-modal btn btn-info" href="{{url('student-class')}}">Delete</a>
                 </td>
            </tr>
            @endforeach

        </tbody>

    </table>


 </div>