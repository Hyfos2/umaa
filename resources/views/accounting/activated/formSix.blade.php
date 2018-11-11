 <div class="tab-pane fade" id="custom-nav-form-6" role="tabpanel" aria-labelledby="custom-nav-form-6-tab">


                                               <table id="f6" class="display" style="width:100%;margin-top:10px;">
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
             @foreach($form6  as $item)
            <tr>
                <td>{{$item->user->name}}</td>
                <td>{{$item->user->surname}}</td>
                <td>{{$item->user->gender}}</td>
                <td>{{$item->user->email}}</td>
                <td>
                      <a class="btn btn-outline-info" href="{{url('student-account/'.$item->id)}}">view transactions</a>
                 </td>
            </tr>
            @endforeach
           

        </tbody>

    </table>
                                               

                                            </div>
