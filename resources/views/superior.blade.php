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
                            <h2>Informação Superior</h2>
                            <span>Por favor, Insira seus dados</span>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <label for="" style="padding: 5px; ">Grau de Ensino</label><br>
                                <select name="ensino" id="ensino">
                                    <option value="">Seleccione o ensino</option>
                                    <option value="">Licenciatura</option>
                                    <option value="">Mestrado</option>
                                </select><br>
                                <label for="" style="padding: 10px;">Curso de Deseja</label><br>
                                <span style="font-size: 12px;">Digite o curso que deseja</span>
                                <input type="text" name="curso" id="curso" placeholder="Gestão de Empresas">
                                <label for="" style="padding: 10px;">Ano de Entrada</label><br>
                                <select name="entrada" id="entrada">
                                    <option value="">Selecciona o ano de Emtrada</option>
                                    <option value="">Setembro de 2021</option>
                                    <option value="">Janeiro de 2022</option>
                                    <option value="">Maio de 2022</option>
                                    <option value="">Janeiro de 2022</option>
                                </select><br>
                                <label for="" style="padding: 10px;">Pacotes</label><br>
                                <select name="pacote" id="pacote">
                                    <option value="">Selecciona o pacote</option>
                                    <option value="">1 Pacote - 2.750,00Mt</option>
                                    <option value="">2 Pacotes - 5.500,00Mt</option>
                                    <option value="">4 Pacotes - 11.000,00Mt</option>
                                    <option value="">6 Pacote - 16.000,00Mt</option>
                                </select><br>
                                <label for="" style="padding: 10px;">Orçamento Anual</label>
                                <input type="text" name="orcamento" id="orcamento" placeholder="$3000,00">
                                <label for="" style="padding: 10px;">Países Interesse</label>
                                <input type="text" name="paises" id="paises" placeholder="Lisboa, Portugal">
                                <label for="" style="padding: 5px;">Idioma de Proficiência</label><br>
                                <div class="button-box">
                                    <input type="checkbox">
                                    <label>Português</label><br>
                                    <input type="checkbox">
                                    <label for="Inglês">Inglês</label><br>
                                    <input type="checkbox">
                                    <label>Francês</label><br>
                                    <input type="checkbox">
                                    <label>Italiano</label><br>
                                    <input type="checkbox">
                                    <label>Outro</label>
                                </div>
                                <div class="button-box">
                                    <a type="submit" class="default-btn" href="{{url("anexo")}}">Cadastrar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Register end -->

@endsection