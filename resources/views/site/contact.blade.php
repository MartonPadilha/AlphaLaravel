@extends('site.master.layout')
@section('content')
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLegfBqUcQLkSTWYyUEUqnIAWPnPhn-5c&callback=initMap">
</script>

<div class="jumbotron jumbotron-fluid" style="height: 40vh; background-image: url('{{asset('assets/images/1280x400/instalacoes.jpg')}}')">
	<div class="container">
	</div>
  </div>
  <div class="container">
        <h3 class="wthree_head">LOCALIZAÇÃO</h3>
        <p class="agileits_w3layouts_para w3_agile_para">Nossa empresa está de portas abertas para recebê-lo! Conheça nossa estrutura e nossos processos e comprove que nossos produtos atendem às mais rígidas normas internacionais de qualidade.</p>      
    </div>
      

<div class="agileits_w3layouts_mail_grids">	
    <div class="col-md-7 w3l_mail_left">
        <div id="map">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1755.1124465738596!2d-53.89313854177375!3d-28.382274635832317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fc32959b640d71%3A0x5a92ef863c677b9c!2sR.%20Augusto%20Fengler%2C%20427%20-%20Jardim%2C%20Iju%C3%AD%20-%20RS%2C%2098700-000!5e0!3m2!1spt-BR!2sbr!4v1579203365488!5m2!1spt-BR!2sbr"  frameborder="0" style="border:0;" allowfullscreen=""></iframe> --}}
        </div>
    </div>
    <div class="col-md-5 w3l_mail_right">
        <h3>Informações para Contato</h3>
        <ul>
            <li><span><i class="fa fa-home fa-lg" aria-hidden="true"></i></span> Rua Augusto Fengler 427, Jardim. Ijuí - RS</li>
            <li><span><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span> 55 3332-1170</li>
            <li><span><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></span> 55 98408-0143</li>
            <li><span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span> <a href="mailto:contato@alphajvg.com.br">contato@alphajvg.com.br</a></li>
        
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="banner-bottom">
    <div class="container">
        <h3 class="wthree_head">ENTRE EM CONTATO CONOSCO</h3>
            <p class="agileits_w3layouts_para w3_agile_para">Ficaremos felizes em falar com você! </p>
        <div class="agileinfo_mail_grids">
            <form action="#" method="post">
                <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-13">
                        <span class="input__label-content input__label-content--chisato" data-content="Nome">Nome</span>
                    </label>
                </span>
                <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-14">
                        <span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
                    </label>
                </span>
                <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-15">
                        <span class="input__label-content input__label-content--chisato" data-content="Assunto">Assunto</span>
                    </label>
                </span>
                <textarea name="Message" placeholder="Sua mensagem aqui..." required=""></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

</div>
<!-- //mail -->
<!-- map -->
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -28.3823946, lng: -53.8906462},
        zoom: 16
        });
        }
</script>
<!-- //map -->
<script src="js/classie.js"></script>
<script>
    (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function() {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function() {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
            // in case the input is already filled..
            if( inputEl.value.trim() !== '' ) {
                classie.add( inputEl.parentNode, 'input--filled' );
            }

            // events:
            inputEl.addEventListener( 'focus', onInputFocus );
            inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
            classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
            if( ev.target.value.trim() === '' ) {
                classie.remove( ev.target.parentNode, 'input--filled' );
            }
        }
    })();
</script>
@endsection