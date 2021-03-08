<section>
    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Gender</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($members as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->surname}}</td>
                        <td>{{$item->genders->gender}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</section>