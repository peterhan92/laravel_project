@if (Session::has('flash_message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" arial-hidden="true">&times;</button>
    {{ session('flash_message')}}
    </div>
@endif