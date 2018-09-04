@extends('internal.welcome')
@section('content')
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

<div class="panel panel-default">
			<div class="tabbable tabs" id="wholeBody">
				<ul class="nav nav-tabs" id="settingsTable">
					<li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
					<li><a href="#preferences" data-toggle="tab">Update Password</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="profile">                
						<div>
							<div class="card">
            <div class="card-body settings">

                	<div class="col-md-12">
									@include('settings.profile')
						</div>
			</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="preferences"> 
						<div>
							<div class="card">
            <div class="card-body settings">
						  <div class="col-md-12">
						    @include('settings.preferences')
						  </div>
					</div>
							</div>
						</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>	
<div class="col-md-1"></div>
@include('newAdmin.alertMessages')
@stop