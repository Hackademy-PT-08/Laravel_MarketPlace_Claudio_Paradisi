<x-layout>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h1>Aggiungi un quadro su Larazon.it</h1>
                </div>
            </div>
        </div>
        <form id="storeForm" class="my-5" method="POST" action="{{route('pictures.store')}}" enctype="multipart/form-data" >
            <!-- enctype="multipart/form-data" è essenziale per immettere i file nel form -->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo del quadro</label>
                <input id="titleInput" type="text" class="form-control" name="title" value="{{old('title')}}" >
            </div>
            <div class="mb-3">
                <label for="article" class="form-label">Descrizione del quadro</label>
                <textarea id="descriptionInput" class="form-control"  name="description" rows="10" cols="30">{{old('title')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Inserisci un'immagine per il quadro</label> <br>
                <input type="file" name="image" id="" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input id="priceInput" type="number" class="form-control" name="price" value="{{old('price')}}" >
            </div>
            <input type="hidden" name="id" value="">
            <button id="myInput" type="submit" class="btn btn-primary">Invia</button>
        </form>
    </section>    
</x-layout>