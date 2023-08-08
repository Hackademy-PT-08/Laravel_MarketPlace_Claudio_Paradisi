<x-layout>
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
                                <a href="{{route('pictures.edit', $picture->id)}}" class="btn btn-primary">Modifica</a>
                                <form action="{{route('pictures.destroy', $picture->id)}}" method="POST">

                                    @csrf

                                    @method('DELETE')
                                    
                                    <input class="btn btn-danger" type="submit" value="Elimina">
                                </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

</x-layout>