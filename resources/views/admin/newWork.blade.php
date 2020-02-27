@extends('admin.master.layout')
@section('content')
                <script>
              document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                var instances = M.FormSelect.init(elems, options);
              });
                </script>
    <div class="container">
        <h3 class="center">Adicionar Trabalho</h3>
       <div class="row">
           <form action="{{route('work.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="title">
                    <label for="">Título</label>
                </div>
    
                <div class="input-field col s7">
                    <input type="text" name="description">
                    <label for="">Descrição</label>
                </div>
            </div>

            <div class="row">
            <div class="input-field col s8">
                    <p>
                        <label for="">Categoria</label>
                    </p>
                      <p>
                        <label>
                          <input name="category" type="radio" value="Instalação" checked />
                          <span>Instalação</span>
                        </label>

                        <label>
                          <input name="category" type="radio" value="Painéis"/>
                          <span>Painéis</span>
                        </label>

                        <label>
                          <input name="category" type="radio"  value="Manutenção"/>
                          <span>Manutenção</span>
                        </label>

                        <label>
                          <input name="category" type="radio" value="Outros"/>
                          <span>Outros</span>
                        </label>
                      </p>
                </div>
    
                <div class="input-field col s4">
                        <input type="date" class="datepicker" name="date">
                        <label for="">Data</label>
                </div>  
            </div>
    
            <div class="file-field input-field">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Imagem</span>
                        <input type="file" name="file">
                    </div>
                     <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn deep-orange">Salvar</button>
            <a class="waves-effect btn" href="{{route('user.index')}}">Voltar</a>

           </form>
       </div>
    </div>

@endsection
