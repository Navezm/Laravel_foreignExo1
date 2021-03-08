<section>
    <div class="container mt-5">
        <form action="/genders" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Ajouter un genre</label>
              <input type="text" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</section>