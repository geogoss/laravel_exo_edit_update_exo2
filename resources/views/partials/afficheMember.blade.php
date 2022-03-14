<section class="m-5 row">
    <a href="/deleteAll" class="btn btn-warning">Delete all</a>

    @foreach ($members as $item)
        <div class="card col-4 m-5 mx-auto" style="width: 18rem;">
            <a href="/show/{{ $item->id }} ">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $item->id }} </li>
                    <li class="list-group-item">{{ $item->nom }} </li>
                    <li class="list-group-item">{{ $item->age }}</li>
                    <li class="list-group-item">{{ $item->genre }}</li>
                    <li class="d-flex justify-content-center text-center mx-3 mb-5">
                        <form action="/delete/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                        </form>
                        <button class="btn btn-primary">
                            @csrf
                            <a class="text-decoration-none text-white" href="/edit/{{ $item->id }} ">Modifier</a>
                        </button>        
                    </li>
                </ul>
            </a>
        </div>
    @endforeach
</section>
