@extends('admin.master.layout')
@section('content')
    <div class="container">
        <h3 class="center">Gerenciamento de Fotos</h3>
        <div class="row">
            <a href="{{route('work.create')}}" class="btn blue">Adicionar</a>
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
                            @if ($work->author == Auth::user()->id)
                            <a href="{{route('work.edit', ['works' => $work->id])}}"><i class="far fa-edit"></i></a>
                            @endif
                            <form action="{{route('work.destroy', ['works' => $work->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
