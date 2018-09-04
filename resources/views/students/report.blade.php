@extends('internal.welcome')
@section('content')


<div class="row">
	<div class="col-md-3">
		<div class="card" id="bestStudents">
            <div class="card-body">
                <div class="card-block ">    

            <ul class="list-group" id="listGroup">
                <table class="responsive">

                    @foreach($user AS $item)
                        <tr>
                            <th>Name</th>
                            <td>{{$item->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Surname</th>
                            <td>{{$item->user->surname}}</td>
                        </tr>
                        <tr>
                            <th>Form</th>
                            <td>{{$item->level->id}}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{$item->user->gender}}</td>
                        </tr>
                        @endforeach
                    </table>
            
        </ul>
                    
                </div>
            </div>
        </div>
	</div>
	

		<div class="col-md-9">
			<div class="card" id="poorStudents">
            <div class="well">Subjects Informations</div>
            <div class="card-body">
                <div class="card-block ">
                    <ul class="list-group" id="listGroup">
                        <table class="responsive">

                            <thead>
                                <tr>
                                    <th>Subject Name</th>
                                    <th>Mark</th>
                                    <th>Grade</th>
                                    <th>Comment</th>

                                </tr>
                            </thead>
                            <tbody>


                            @foreach($user AS $item)
                                @foreach($item->subjectmark as $val)
                                    <tr>
                                        <td>{{$val->subjectId}}</td>
                                        <td>{{$val->mark}}</td>
                                        <th>U</th>
                                        <td>{{$val->comment}}</td>
                                    </tr>
                                @endforeach
                            @endforeach

                            </tbody>

                        </table>
                    </ul>
                </div>
            </div>
        </div>
		</div>
</div>

@stop