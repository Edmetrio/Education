<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>lista das Universidades</h2>
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
                            <h2 class="text-center">Universidade</h2>
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
                                            <strong>Pais:</strong>
                                            <select class="form-control" wire:model="pais_id">
                                                <option>Seleccione o Pais</option>
                                                @foreach($pais as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('pais_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Universidade:</strong>
                                            <input type="text" wire:model="universidade" class="form-control" placeholder="Nome">
                                            @error('universidade') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Abertura:</strong>
                                            <input type="date" wire:model="abertura" class="form-control" placeholder="2000">
                                            @error('abertura') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Fecho:</strong>
                                            <input type="date" wire:model="fecho" class="form-control">
                                            @error('fecho') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Link:</strong>
                                            <input type="text" wire:model="link" class="form-control" placeholder="http://firsteducation.edu.mz/">
                                            @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Anexo:</strong>
                                            <input type="file" wire:model="anexo" class="form-control">
                                            @if($anexo)
                                            <img src="{{$anexo->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
                                            @endif
                                            @error('anexo') <span class="text-danger">{{ $message }}</span> @enderror
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
                            <h2>Poost</h2>
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
                                            <strong>Pais:</strong>
                                            <select class="form-control" wire:model="edit_pais_id">
                                                <option value="{{ $edit_pais_id }}">{{ $edit_pais_nome }}</option>
                                                @foreach($pais as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('edit_pais_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>  
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Universidade:</strong>
                                            <input type="text" wire:model="edit_universidade" class="form-control" placeholder="Universidade do Porto">
                                            @error('edit_universidade') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Abertura:</strong>
                                            <input type="date" wire:model="edit_abertura" class="form-control" placeholder="2000">
                                            @error('edit_abertura') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Fecho:</strong>
                                            <input type="date" wire:model="edit_fecho" class="form-control">
                                            @error('edit_fecho') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Link:</strong>
                                            <input type="text" wire:model="edit_link" class="form-control">
                                            @error('edit_link') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Anexo:</strong>
                                            <input type="file" wire:model="edit_anexo" class="form-control">
                                            @if($new_anexo)
                                            <img src="{{$new_anexo->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
                                            @else
                                            <img src="{{ asset('storage')}}/{{$old_anexo}}" style="width: 15%; text-align: center;" alt="" />
                                            @endif
                                            <input type="hidden" wire:model='old_anexo'>
                                            @error('edit_anexo') <span class="text-danger">{{ $message }}</span> @enderror
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
                                <!-- <li><a href="{{url("inscricao")}}">Inscrições universitárias</a></li>
                                <li><a href="{{url("bolsa")}}">Bolsas de Estudos</a></li>
                                <li><a href="{{url("online")}}">Cursos Online</a></li>
                                <li><a href="{{url("fundacao")}}">Ano de Fundação</a></li>
                                <li><a href="#">Prdução de CV</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                @if($showData == true)
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">País</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Criação</th>
                                    <th scope="col">Acções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inscricao as $s)
                                <tr>
                                    <td>{{ $s->pais->nome }}</td>
                                    <td>{{ $s->universidade}}</td>
                                    <td><img class="img-fluid" src="{{asset('storage')}}/{{$s->anexo}}" style="width: 30px; text-align: center;" /></td>
                                    <td><a href="{{ $s->link }}"> {{ $s->link }}</a></td>
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
                </div>
                @endif
                <hr>
            </div>
        </div>
        <!-- Blog End -->
    </div>

</div>