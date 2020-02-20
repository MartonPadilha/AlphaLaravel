<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários</title>
</head>
<body>
@extends('admin.master.layout')
@section('content')
    <div class="container">
        <h3 class="center">Gerenciamento de Usuários</h3>
        @if (Auth::user()->level == "Administrador")
        <div class="row">
            <a href="{{route('user.create')}}" class="btn green">Adicionar</a>
        </div>
        @endif
       
        <table>
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
                            {{-- {{while($user->works->author == $user->id){
                                $i++
                            }}} --}}
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
                                <form action="{{route('user.destroy', ['user' => $user->id])}}" method="POST">
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
@endsection
</body>
</html>