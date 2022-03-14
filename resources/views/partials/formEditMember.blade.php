<section class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un membre</h1>

        <form class="w-75 mx-auto" action="/update/{{ $edit->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Nom</label>
                <input name="nom" type="text" value="{{ $edit->nom }} " class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Age</label>
                <input name="age" type="text" value="{{ $edit->age }} " class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">Genre</label>
                <select name="genre" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    <option value="Homme" @if($edit->genre == 'Homme') ? selected : null @endif>Homme</option>
                    <option value="Femme" @if($edit->genre == 'Femme') ? selected : null @endif>Femme</option>
                    <option value="Nonbinaire" @if($edit->genre == 'Nonbinaire') ? selected : null @endif>Nonbinaire</option>
                    <option value="Bisexuelle" @if($edit->genre == 'Bisexuelle') ? selected : null @endif>Bisexuelle</option>
                    <option value="Trans" @if($edit->genre == 'Trans') ? selected : null @endif>Trans</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</section>
