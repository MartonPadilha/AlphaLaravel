<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{url(mix('site/css/style.css'))}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url(mix('site/css/login.css'))}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url(mix('site/css/bootstrap.min.css'))}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="background-image: url('{{asset('assets/images/backgrounds/Modelo 2.png')}}'); background-repeat: no-repeat; background-size: cover; background-position: right; height: 100vh">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
              <form class="form-signin" name="formLogin">
                  @csrf
                  <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control" required>
                    <label for="inputEmail">Email</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control">
                    <label for="inputPassword">Senha</label>
                  </div>
                    <div class="alert alert-danger d-none messageBox">
                    </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                 </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
      <script>
        $(function(){
          $('form[name="formLogin"]').submit(function(event){
            event.preventDefault()
            $.ajax({
              url: "{{route('admin.login.do')}}",
              type: 'post',
              data: $(this).serialize(),
              dataType: 'json',
              beforeSend: function(){
                  $(".messageBox").addClass('loading')
              },
              success: function(response){
                if (response.success) {
                  $('.messageBox').removeClass('loading')
                  window.location.href = "{{route('admin')}}"
                } else {
                  $('.messageBox').removeClass('loading')
                  $('.messageBox').removeClass('d-none').html(response.message)
                }
              }
            })
          })
        })
      </script>
</body>
</html>