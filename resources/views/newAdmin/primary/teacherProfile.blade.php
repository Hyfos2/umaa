<div class="modal fade" id="teacherProfile">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-teachercontent" >
            <div class="modal-body modal-tchrprofile">

                    <div class="bd bgc-white">
                        <div class="peers fxw-nw@lg+ ai-s">

                            <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                                <div class="layers">
                                    <div class="layer w-100">

                                        <div id="tabs">

                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#attendance">Attendance</a></li>
                                                <li><a data-toggle="tab" href="#daily-exercise">Daily Exercises</a></li>
                                                <li><a data-toggle="tab" href="#end-of-term">End Of term</a></li>
                                                <li><a data-toggle="tab" href="#register">Register</a></li>
                                            </ul>

                                            <div class="tab-content">
                                                @include('newAdmin.primary.teacherProfile.register')
                                                @include('newAdmin.primary.teacherProfile.dailyExercise')
                                                @include('newAdmin.primary.teacherProfile.endOfTerm')
                                                @include('newAdmin.primary.teacherProfile.attendance')
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                                <div class="card">
                                    <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>