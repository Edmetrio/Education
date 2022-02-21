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
                            <h2>Informação Pessoal</h2>
                            <span>Por favor Insira seus dados</span>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="text" name="nome" placeholder="Nome Completo">
                                <label>Sexo</label>
                                <div class="form-check_input" style="float: left; position: relative; padding-bottom: 50px; padding-top: 10px; left: 0px;">
                                    <input class="form-check-input" type="radio" id="" name="Masculino">Masculino<br>
                                    <input class="form-check-input" type="radio" id="" name="Feminino" value="">Feminino
                                </div>
                                <input type="text" name="user-name" placeholder="Nacionalidade">
                                <input type="date" name="data" placeholder="Data de Nascimento">
                                <input type="text" name="passaporte" placeholder="Número do Passaporte">
                                <input type="text" name="telefone" placeholder="Número de Telefone">
                                <input type="email" name="email" placeholder="E-mail">
                                <div class="button-box">
                                    <a type="submit" class="default-btn" href="{{url("academico")}}">Cadastrar</a>
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