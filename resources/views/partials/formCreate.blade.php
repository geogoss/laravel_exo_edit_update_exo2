<section class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un membre</h1>

        <form class="w-75 mx-auto" action="/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Nom</label>
                <input name="nom" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Age</label>
                <input name="age" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">

                <label for="addTreeInputLatin" class="form-label">Genre</label>
                <select name="genre" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                    <option value="nonbinaire">nonbinaire</option>
                    <option value="Bisexuelle">Bisexuelle</option>
                    <option value="Trans">Trans</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</section>
{{-- <section class="mb-5">
  <div class="w-75 mx-auto">
    <table class="table table-striped table-danger">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">Genre</th>
            <th scope="col">Action</th>
          </tr>
        </thead>


        <tbody>
          @foreach ($animals as $item)
          <tr>
            <th scope="row">{{$item->id}} </th>
            <td>{{$item->nom}} </td>
            <td>{{$item->age}} </td>
            <td>{{$item->genre}} </td>
            <td>
              <div class="d-flex justify-content-center text-center mx-3 mb-5">
                <form action="/animal/delete/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                </form>
                <button class="btn btn-primary">
                    @csrf
                    <a class="text-decoration-none text-white" href="/edit/{{ $item->id }} ">Modifier</a>
                </button>
        
            </div>
        
            </td>
          </tr>
              
          @endforeach
        </tbody>
      </table>
</div>

</section> --}}
