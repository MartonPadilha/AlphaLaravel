@extends('admin.master.layout')
@section('content')
    <div class="container">
        <h3 class="center">Gerenciamento de Fotos</h3>
        <div class="row">
            <a href="{{route('work.create')}}" class="btn green">Adicionar</a>
        </div>
       
        <table>
            <thead>
                <tr>
                   <th>Título</th>
                   <th>Descrição</th>
                   <th>Categoria</th>
                   <th>Autor</th>
                   <th>Data</th>
                   <th>Imagem</th>
                   <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                    <tr>
                        <td>{{$work->title}}</td>
                        <td>{{$work->description}}</td>
                        <td>{{$work->category}}</td>
                        <td>{{$work->author_fk->name}}</td>
                        <td>{{$work->date}}</td>
                        <td><img width="120" src="{{asset($work->file)}}" alt="{{$work->title}}"></td>
                        <td>
                            @if ($work->author == Auth::user()->id || Auth::user()->level == "Administrador")
                                <a class="waves-effect btn blue" href="{{route('work.edit', ['works' => $work->id])}}"><i class="material-icons">edit</i></a>
                                <a class="waves-effect btn red modal-trigger" href="#modalDelete{{$work->id}}"><i class="material-icons">delete</i></a>   
                            @endif

                            <!-- Modal Excluir -->
                            <div id="modalDelete{{$work->id}}" class="modal">
                                <div class="modal-content">
                                <h4>Excluir</h4>
                                <p>Você tem certeza que deseja excluir essa obra?</p>
                                </div>
                                <div class="modal-footer">
                                <form action="{{route('work.destroy', ['works' => $work->id])}}" method="POST">
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
