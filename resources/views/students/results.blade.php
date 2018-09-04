@extends('internal.welcome')
@section('content')
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-5">
		<div class="card" id="poorStudents">
            <div class="card-body ">
                <div class="card-block report">
				<span>
					<strong><u>Personal Details</u></strong>
				</span>
					<div class="reportTable">
						<table class="responsive " style="margin-left:100px; margin-top:20px;">

							<thead>
							<tr>
								<th>Name :</th>
								<td class="secondHeading">{{ucfirst($student->name)}}</td>
							</tr>
							<tr>
								<th>Surname :</th>
								<td class="secondHeading">{{ucfirst($student->surname)}}</td>
							</tr>
							<tr>
								<th>Email :</th>
								<td class="secondHeading">{{$student->email}}</td>
							</tr>
							<tr>
								<th>Gender :</th>
								<td class="secondHeading">{{ucfirst($student->gender)}}</td>
							</tr>
							<tr>
								<th>Level :</th>
								<td class="secondHeading">{{$student->levelName}}</td>
							</tr>
							</thead>
						</table>
					</div>
                </div>
            </div>
			<div class="card-body">
				<div class="card-block">
				<span>
					<strong><u>Subject Details</u></strong>
				</span>
					<table class="table table-hover subjectDetailsTable" id="sample-table-1">
						<thead>
						<tr>
							<th class="center">Subject Name</th>
							<th>Actual Mark</th>
							<th>Grade</th>
							<th>Teacher's Remark</th>
						</tr>
						</thead>
						<tbody>

						</tbody>
						@foreach($marksRecords as $val)
						<tr>
						<td><strong>{{$val->name}}</strong></td>
						<td>{{$val->mark}}</td>
						<th>{{$val->grade}}</th>
						<td>{{$val->comment}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
			<div class="card-body">
				<span>
					<strong><u>Other Details</u></strong>
				</span>
				<div class="otherDetails">
					<p>
						<span>Total Marks: <strong>{{$totalMark}}</strong></span>
						<span>Out of : <strong>{{$subjectTotalMarks}}</strong></span>
					</p>
					{{--<p>--}}
						{{--<span>Class Position:</span>--}}
						{{--<span>Out of :</span>--}}
					{{--</p>--}}

				</div>
				<div class="sportDetails">
					<p>

						<span>
							Co-curricular activities:@foreach($studentSports as $item) <span><strong>{{$item->name}},</strong></span>  @endforeach
						</span>

					</p>
				</div>

			</div>
        </div>
		
	</div>

	<div class="col-md-3">
		
	</div>
</div>
@stop