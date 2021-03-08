<section class="my-5">
    <h1 class="text-center">Add Member</h1>
    <div class="container mt-5">
        <form action="/members" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Surname</label>
                <input type="text" name="surname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select name="gender_id" >
                @foreach ($genders as $item)
                    <option value="{{$item->id}}">{{$item->gender}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</section>