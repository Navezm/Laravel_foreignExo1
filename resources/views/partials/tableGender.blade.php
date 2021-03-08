<section>
    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gender</th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($genders as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->gender}}</td>
                        <td>
                            @foreach ($item->members as $item)
                                <p>{{$item->nom}} {{$item->prenom}}</p>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</section>