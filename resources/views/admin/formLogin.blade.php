<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{url(mix('site/css/style.css'))}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
              <form class="form-signin" method="POST" action="{{route('admin.login.do')}}">
                  @csrf
                  <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control" required>
                    <label for="inputEmail">Email</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control">
                    <label for="inputPassword">Senha</label>
                  </div>
                  @if ($errors->all())
                      @foreach ($errors->all() as $error)
                          <div class="alert alert-danger">
                            {{$error}}
                          </div>
                      @endforeach
                  @endif
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>