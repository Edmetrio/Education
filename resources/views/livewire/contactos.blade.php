<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Contactos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area pt-150 pb-20"> 
            <div class="container">     
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Endereço</h3>
                                    <p>Salvador Allende, nº. 42</p>
                                    <p>Maputo, Moçambique</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="img/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Telefone</h3>
                                    <p>Chamadas, Mensagens e WhatsApp</p>
                                    <p>+258 86 86 912 5903</p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <img src="img/contact/contact3.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Nossas Redes Sociais</h3>
                                    <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/firsteducationmz"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://instagram.com/firsteducationmz"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/+258869125903"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reply-area">
                            <h3>Deixe uma Mensagem</h3>
                            @if ($message = Session::get('status'))
                            <div>
                                <p class="alert alert-success" class="table p-field p-col-12 p-md-6 table-striped" style="text-align: center;">{{ $message }}</p>
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Opss!</strong> Algum problema com seu formulário<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <p>Mandem-nos uma mensagem!</p>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Nome</p>
                                        <input type="text" wire:model="nome">
                                        <span class="text-danger">
                                            @error('nome')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="email" wire:model="email">
                                        <span class="text-danger">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Assunto</p>
                                        <input type="text" wire:model="assunto">
                                        <p>Mensagem</p>
                                        <textarea wire:model="mensagem" cols="15" rows="10"></textarea>
                                        <span class="text-danger">
                                            @error('mensagem')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <button wire:click.prevent="store()" type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>