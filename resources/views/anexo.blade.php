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
                            <h2>Anexos</h2>
                            <span>Por favor, Insira seus dados</span>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <div>
                                    <label for="formFilelg" class="form-label">Cópia de Passaporte</label><br>
                                    <span style="font-size: 12px;">Anexa a cópia de passaporte em pdf ou imagem</span>
                                    <input class="form-control form-control-lg" id="formFilelg" type="file">
                                </div>
                                <div>
                                    <label for="formFilelg" class="form-label">Certificado/Declaração de notas</label><br>
                                    <span style="font-size: 12px;">Anexa o certificado ou declaração de notas em pdf</span>
                                    <input class="form-control form-control-lg" id="formFilelg" type="file">
                                </div>
                                <div>
                                    <label for="formFilelg" class="form-label">Comprovativo de Pagamento</label><br>
                                    <span style="font-size: 12px;">Anexa o comprovativo de pagamento</span>
                                    <input class="form-control form-control-lg" id="formFilelg" type="file">
                                </div>
                                <div class="button-box">
                                    <button type="submit" class="default-btn">Cadastrar</button>
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