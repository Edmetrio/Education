@extends('templates.templatesSegundo')

@section('content')

<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>Cadastre-Se</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Register start -->
<div class="register-area pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-text">
                            <h2>Informação Acadêmica</h2>
                            <span>Por favor, Insira seus dados</span>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <label for="" style="padding: 5px; ">Escola</label>
                                <input type="text" name="escola" id="escola" placeholder="Nome da Escola Secundária ou Universidade">
                                <label for="" style="padding: 10px;">Término do ensino</label><br>
                                <input type="date" name="termino" id="termino" placeholder="Término do Ensino">
                                <label for="" style="padding: 10px;">País em que se formou</label><br>
                                <select name="" id="">
                                    <option value="">Selecciona o País em que se formou</option>
                                    <option value="">Moçambique</option>
                                    <option value="">África do Sul</option>
                                </select><br><br>
                                <label for="" style="padding: 10px;">Certificado</label>
                                <input type="date" name="certiicado" id="certificado">
                                <label for="" style="padding: 5px;">Idioma de Proficiência</label><br>
                                <div class="button-box">
                                    <input type="checkbox">
                                    <label>Português</label><br>
                                    <input type="checkbox">
                                    <label for="Inglês">Inglês</label><br>
                                    <input type="checkbox">
                                    <label>Francês</label><br>
                                    <input type="checkbox">
                                    <label>Italino</label><br>
                                    <input type="checkbox">
                                    <label>Outro</label>
                                </div>
                        </div>
                        <label for="" style="padding: 10px;">Exame de Proficiência</label><br>
                        <select name="exame" id="exame">
                            <option value="">Selecciona o Exame de Proficiência</option>
                            <option value="">Não, nunca fiz</option>
                            <option value="">Ainda, mas vou fazer</option>
                            <option value="">Sim, já fiz</option>
                        </select><br>
                        <div class="button-box">
                        <a type="submit" class="default-btn" href="{{url("superior")}}">Cadastrar</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Register end -->

@endsection