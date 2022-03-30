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
                                    <div class="col-xs-12 col-sm-12 col-md-11">
                                        <div class="form-group">
                                            <strong>Intake:</strong>
                                            <select class="form-control" wire:model="intake_id.0">
                                                <option>Seleccione o Intake</option>
                                                @foreach($intake as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('intake_id.0') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-1 col-md-1 mt-12">
                                        <div class="form-group">
                                            <strong>.</strong>
                                            <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})" style="margin-bottom: 20%;">+</button>
                                        </div>
                                    </div>

                                    @foreach($inputs as $key => $value)
                                    <div class="col-xs-12 col-sm-12 col-md-10">
                                        <div class="form-group">
                                            <strong>Intake:</strong>
                                            <select class="form-control" wire:model="intake_id.{{ $value }}">
                                                <option>Seleccione o Intake</option>
                                                @foreach($intake as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('intake_id.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <strong>.</strong>
                                            <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">-</button>
                                        </div>
                                    </div>
                                    @endforeach
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

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pais:</strong>
                        <select class="form-control" wire:model="selectedPais">
                            <option value="">Seleccione o País</option>
                            @foreach($pais as $s)
                            <option value="{{ $s->id }}">{{ $s->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @if (!is_null($selectedPais))
                @foreach($universidades as $u)
                <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-course mb-70">
                            <div class="course-content">
                                <h6>{{ $u->universidade }}</h6>
                                <strong>Intakes:</strong>
                                @foreach($u->intakes as $i)
                                {{ $i->nome }} |
                                @endforeach
                                <p><strong>Abertura:</strong> {{ $u->abertura }}<br />
                                    <strong>Fecho:</strong> {{ $u->fecho }}
                                </p>
                                <ul>
                                    <li class="col-md-6 col-sm-6 col-xs-12">
                                        <a class="default-btn" href="{{ $u->link }}">Visitar</a>
                                    </li>
                                    <li class="text-right">
                                        <button wire:click="editProcesso('{{$u->id}}')" class="default-btn text-right"><i class="fas fa-edit"></i></button>
                                        <button wire:click="editProcesso('{{$u->id}}')" class="default-btn text-right"><i class="fas fa-edit"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif

                @if($showData == true)
                <div class="row">
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
                    @foreach($inscricao as $u)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-course mb-70">
                            <div class="course-content">
                                <h6>{{ $u->universidade }}</h6>
                                <strong>Intakes:</strong>
                                @foreach($u->intakes as $i)
                                {{ $i->nome }} |
                                @endforeach
                                <p><strong>Abertura:</strong> {{ $u->abertura }}<br />
                                    <strong>Fecho:</strong> {{ $u->fecho }}
                                </p>
                                <ul>
                                    <li class="col-md-6 col-sm-6 col-xs-12">
                                        <a class="default-btn" href="{{ $u->link }}">Visitar</a>
                                    </li>
                                    <li class="text-right">
                                        <button wire:click="editProcesso('{{$u->id}}')" class="default-btn text-right"><i class="fas fa-edit"></i></button>
                                        <button wire:click="editProcesso('{{$u->id}}')" class="default-btn text-right"><i class="fas fa-edit"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div>
                        {{$inscricao->links()}}
                    </div>
                </div>
                @endif
                <hr>
            </div>
        </div>
    </div>


</div>

</div>