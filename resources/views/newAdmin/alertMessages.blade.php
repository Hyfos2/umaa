@if (session('alert'))
    <div id="notificationMessage">
        {{ session('alert') }}
    </div>
@endif

@if (session('message'))
    <div class="alert alert-danger" id="message">
        {{ session('message') }}
    </div>
@endif

<div id="dailyExercises">
   Marks Saved..
</div>

