@extends ('layouts.app')
    @section ('content')
    <div class="card-header">
                <h4>Maak een artikel</h4>
                  <div class="card-body">
         <form method="POST" action="/createarticle">
        {{ csrf_field() }}

         Username:
         <br />
         <input type="text" name="user_name" required />
         <br />
         Titel:
         <br />
         <input name="title" type="text" required/>
         <br />
         Artikel:
         <br />
         <input class="form-control" type="text" name="description" required/>
         <input type="submit" class="btn btn-primary" value="Opslaan" />
</form>

@endsection
