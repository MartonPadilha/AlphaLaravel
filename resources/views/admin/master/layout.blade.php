<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alpha - Automação de Sistemas Elétricos</title>
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Painéis Elétricos Instalação Elétrica Instalações Elétricas Solução Elétrica Montagem de Paineis Montagem de Iluminação
    Manutenção Elétrica Solução Fotovoltaica Energia Solar Painel Solar Elétrica para Armagenazem Elétrica para fabrica Cubículos de Energia
    Alfa Alpha Alfa Ijui Alpha Ijui Projeto Elétrico Engenharia Elétrica" />
    <link href="{{url(mix('site/css/myStyle.css'))}}" rel="stylesheet" type="text/css" media="all" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link href="{{url(mix('site/css/materialize.min.css'))}}" rel="stylesheet" type="text/css" media="all" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    {{-- DataTables --}}
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
          $('.modal').modal();
        });
    </script>
</head>

<body>
    <header>
        <nav style="padding-right: 15px;">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">
                    <img src="{{asset('assets/images/logo/Versão_para_fundo_preto.png')}}" alt="">
                </a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('work.index')}}">Obras</a></li>
                    <li><a href="{{route('user.index')}}">Usuários</a></li>
                    <li><a href="{{route('admin.logout')}}">Sair</a></li>
                </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile">
            <li><a href="{{route('work.index')}}">Obras</a></li>
            <li><a href="{{route('user.index')}}">Usuários</a></li>
            <li><a href="{{route('admin.logout')}}">Sair</a></li>
        </ul>
    </header>
    @yield('content')
    <script>
        $('.data_table').DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                },
                "select": {
                    "rows": {
                        "_": "Selecionado %d linhas",
                        "0": "Nenhuma linha selecionada",
                        "1": "Selecionado 1 linha"
                    }
                }
            }
        });
        $(document).ready(function(){
            Materialize.updateTextField();
            $('.sidenav').sidenav();
            $('.modal').modal();
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<link href="{{url(mix('site/css/materialize.min.css'))}}" rel="stylesheet" type="text/css" media="all" />
</body>
</html>

