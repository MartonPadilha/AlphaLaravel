@extends('admin.master.layout')
@section('content')
    <div class="container">
        <h3 class="center">Gerenciamento de Fotos</h3>
        <div class="row">
            <a href="{{route('work.create')}}" class="btn green">Adicionar</a>
        </div>

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
            <div class="d-none messageBox"></div>
          </div>
        </div>
       
        <table class="data_table">
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
                        <td>{{date('d-m-Y', strtotime($work->date))}}</td>
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
                                <form name="formDelete">
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
        {{-- action="{{route('work.destroy', ['works' => $work->id])}}" method="POST" --}}

    </div>
    <script>
        $(function(){
            $('form[name="formDelete"]').submit(function(e){
                e.preventDefault()
                $.ajax({
                    url: "{{route('work.destroy', ['works' => $work->id])}}",
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
