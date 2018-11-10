                                            <div class="tab-pane fade" id="custom-nav-form-2" role="tabpanel" aria-labelledby="custom-nav-form-2-tab">
                                                <table id="studentsF2" class="display" style="width:100%;margin-top:10px;">
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
              @foreach($form2  as $item)
            <tr>
                <td>{{$item->user->name}}</td>
                <td>{{$item->user->surname}}</td>
                <td>{{$item->user->gender}}</td>
                <td>{{$item->user->email}}</td>
                <td>
                     <a class="btn btn-outline-info" href="{{url('student-class/'.$item->id)}}">view more</a>
                 </td>
            </tr>
            @endforeach
           

        </tbody>

    </table>
                                            </div>
