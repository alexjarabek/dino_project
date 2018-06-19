@if(Session::has('success'))
    <div class="alert alert-success" role="alert"><strong>Success: {{Session::get('success')}}</strong></div>
@endif