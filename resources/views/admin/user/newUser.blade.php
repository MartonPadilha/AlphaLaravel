@extends('admin.master.layout')
@section('content')
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
      });
    </script>
    <div class="container">
        <h3 class="center">Adicionar Usuário</h3>
       <div class="row">
           <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" name="newUser_form">
            @csrf
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="name">
                    <label for="">Nome</label>
                </div>
    
                <div class="input-field col s7">
                    <input type="text" name="email">
                    <label for="">Email</label>
                    @if ($errors->all())
                    @foreach ($errors->all() as $error)
                        <div class="red-text text-darken-1">
                          {{$error}}
                        </div>
                    @endforeach
                @endif
                </div>
            </div>

            <div class="row">
            <div class="input-field col s8">
                    <p>
                        <label for="">Nível de Acesso</label>
                    </p>
                      <p>
                        <label>
                          <input type="radio" name="level" value="Administrador"/>
                          <span>Administrador</span>
                        </label>

                        <label>
                          <input type="radio" name="level" value="Usuário" checked/>
                          <span>Usuário</span>
                        </label>
                      </p>
                </div>
    
                <div class="input-field col s7">
                    <input type="password" name="password">
                    <label for="">Senha</label>
                    @if (session('status'))
                        <div class="red-text text-darken-1">
                            {{ session('status') }}
                        </div>
                    @endif
                </div> 
            </div>
    

            <button type="submit" class="btn deep-orange">Salvar</button>
            <a class="waves-effect btn" href="{{route('user.index')}}">Voltar</a>
           </form>
       </div>
    </div>
    <script>
      
    </script>

@endsection
