@extends('admin.master.layout')
@section('content')
    <div class="container">
        <h3 class="center">Gerenciamento de Usuários</h3>
        @if (Auth::user()->level == "Administrador")
        <div class="row">
            <a href="{{route('user.create')}}" class="btn green">Adicionar</a>
        </div>
        @endif

        <div class="row">
            <div class="col-sm-12">
                @if (session('status'))
                    <div class="waves-effect waves-light btn text-center" id="time_out">
                        <span>{{ session('status') }}</span>
                    </div>
                @else
                    <div class="waves-effect waves-light btn" style="visibility: hidden">
                        <span>teste</span>
                    </div>
                @endif
                <div class="messageBox d-none"></div>
          </div>
        </div>

        <script>
            let time_out = document.querySelector('#time_out')
                window.setTimeout(function() {
                    $("#time_out").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                    });
                }, 5000);
        </script>
       
        <table class="data_table">
            <thead>
                <tr>
                   <th>Nome</th>
                   <th>Email</th>
                   <th>Nível</th>
                   <th>Obras Postadas</th>
                   <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>
                        <td>
                            {{$user->works->count()}}
                        </td>
                        <td>
                            @if (Auth::user()->level == "Administrador" || Auth::user()->id == $user->id)
                                <a class="waves-effect btn blue" href="{{route('user.edit', ['user' => $user->id])}}"><i class="material-icons">edit</i></a>
                            @endif

                            @if (Auth::user()->level == "Administrador" && Auth::user()->id != $user->id)
                                <a class="waves-effect btn red modal-trigger" href="#modalDelete{{$user->id}}"><i class="material-icons">delete</i></a>
                            @endif

                            <!-- Modal Excluir -->
                            <div id="modalDelete{{$user->id}}" class="modal">
                                <div class="modal-content">
                                <h4>Excluir</h4>
                                <p>Você tem certeza que deseja excluir esse usuário?</p>
                                </div>
                                <div class="modal-footer">
                                <form name="formDeleteUser">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="waves-effect waves-light btn modal-trigger">Sim</button>
                                    <a href="#!" class="modal-close btn red">Não</a>
                                </form>
                                </div>
                            </div> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(function(){
            $('form[name="formDeleteUser"]').submit(function(e){
                e.preventDefault()
                $.ajax({
                    url: "{{route('user.destroy', ['user' => $user->id])}}",
                    type: 'post',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response){
                        $('.messageBox').removeClass('d-none').addClass('waves-effect waves-orange btn').html(response.message)
                    }
                })
            })
        })
    </script>
@endsection
