<div class="tab-pane fade" id="custom-nav-communicator" role="tabpanel" aria-labelledby="custom-nav-communicator-tab">


                                            <table id="communicators" class="display" style="width:100%;margin-top:10px;">
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
            @foreach($comm  as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->email}}</td>
                <td>
                     <a class="edit-modal btn btn-info" href="{{url('student-class')}}">Classes</a>
                 </td>
            </tr>
            @endforeach

        </tbody>

    </table>
                                            </div>
