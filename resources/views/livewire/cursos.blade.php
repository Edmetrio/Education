<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Curso</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses-details-area blog-area pt-150 pb-20">
        <div class="container">
            <div class="row">
                @if($createData == false)
                <div class="col-md-8 mb-50">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2 class="text-center">Cursos</h2>
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
                            <hr>
                            <form>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Categoria:</strong>
                                            <select class="form-control" wire:model="categoria_id">
                                                <option>Seleccione o Serviço</option>
                                                @foreach($categoria as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('categoria_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nome:</strong>
                                            <input type="text" wire:model="nome" class="form-control" placeholder="Nome">
                                            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" wire:click.prevent="store()" class="btn btn-primary">Adicionar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif

                @if($updateData == true)
                <div class="col-md-8">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2>Curso</h2>
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
                            <hr>
                            <form>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Categoria:</strong>
                                            <select class="form-control" wire:model="edit_categoria_id">
                                                <!--  -->
                                                @foreach($categoria as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('categoria_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nome:</strong>
                                            <input type="text" wire:model="edit_nome" class="form-control" placeholder="Nome">
                                            @error('edit_nome') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" wire:click.prevent="update('{{$edit_id}}')" class="btn btn-primary">Alterar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif

                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Aplica-se já</h3>
                            <hr>
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>

                @if($showData == true)
<!--                 <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Serviço</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Criação</th>
                                    <th scope="col">Acções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($curso as $s)
                                <tr>
                                    <td>{{ $s->nome }}</td>
                                    <td>{{ $s->categorias->nome }}</td>
                                    <td>{{ $s->estado }}</td>
                                    <td>{{ $s->created_at->diffForhumans() }}</td>
                                    <td>
                                        <button wire:click="edit('{{$s->id}}')"><i class="fas fa-edit"></i></button>
                                        <button wire:click="delete('{{ $s->id }}')"><i class="fab fa-instagram"></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <div class="col-xs-12">
                        <div class="course-title">
                            <h3>Procurar Curso</h3>
                        </div>
                        <div class="course-form">
                            <form id="search" action="#">
                                <input type="search" wire:model="search" placeholder="Procurar..." />
                            </form>
                        </div>
                    </div>
                @foreach($curso as $s)
                <div class="col-md-11 mt-20">
                    <div class="single-event mb-10">
<!--                         <div class="event-date">
                            <img class="img-fluid" src="{{asset('../storage/app/public')}}/{{$s->icon}}" style="width: 100px; text-align: center;" />
                        </div> -->
                        <div class="event-content text-left">
                            <div class="event-content-left pl-10">
                                <h3>{{ $s->nome }}</h3>
                                <ul>
                                    <li>{{ $s->categorias->nome }}</li>
                                </ul>
                            </div>
                            <div class="float-right mr-10">
                                <ul class="event-content-righ">
                                    <li><button wire:click="edit('{{$s->id}}')" class="default-btn text-right"><i class="fas fa-edit"></i></button></li>
                                    <li class="float-right mt-3"><button wire:click="delete('{{ $s->id }}')" class="default-btn text-right"><i class="fas fa-trash"></i></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div>
                   {{$curso->links()}}
                </div>
                @endif
                <hr>
            </div>
        </div>
        <!-- Blog End -->
    </div>
</div>