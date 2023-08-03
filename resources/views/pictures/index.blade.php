<x-layout>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h1>Qui puoi vedere tutti i quadri presenti in Larazon.it</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($pictures as $picture)
                <div class="col-12 col-md-3">
                    <div class="card my-card" style="width: 18rem;">
                    @if($picture->image !== '')
                        <img src="{{asset('storage/' . $picture->image) }}" class="card-img-top" alt="{{$picture->title}}">
                    @else  
                    <img src="https://picsum.photos/200/120" class="card-img-top" alt="{{$picture->title}}">
                    @endif
                        <div class="card-body">
                                <h5 class="card-title">{{$picture->title}}</h5>
                                <p class="card-text">{{substr($picture->description,0,23)}}...</p>
                                <span class="badge cardBg">€{{$picture->price}}</span>
                                <a href="#" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>