<x-layout>

    

    <x-form-errors />

   <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Crea un profilo</h1>
            </div>
            <div class="col-12"> 
                <form class="my-form" action="/register" method="post">

                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Nome</label>

                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="mb-3">

                        <label class="form-label" for="email">Email</label>

                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>

                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password_confirmation">Conferma password</label>

                        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-dark" type="submit" value="Registrati">
                    </div>
                </form>
            </div>
        </div>
   </div>
   <br><br><br>

</x-layout>