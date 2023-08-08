@if ($errors->any())

<div class="container my-5 alert-danger">
    <div class="row">
        <div class="col-12">
       
        @foreach ($errors->all() as $error)

        <p style="color:red;">{{$error}}</p>
    
        @endforeach

       
        </div>
    </div>
</div>
@endif