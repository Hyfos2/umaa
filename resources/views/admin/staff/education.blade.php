<div class="tab-pane fade" id="custom-nav-education" role="tabpanel" aria-labelledby="custom-nav-education-tab">



                                            <table id="educator" class="display" style="width:100%;margin-top:10px;">
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
            @foreach($edu  as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <a class="btn btn-outline-info" href="javascript:void(0);" onclick="deleteFxn();">Delete</a>
                 </td>
            </tr>
            @endforeach

        </tbody>

    </table>
                                            </div>