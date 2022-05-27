<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Gerir Permissões</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses-details-area blog-area pt-100 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-20  ">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2>Permissões</h2>
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


                            @if($updateData == true)
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Regras:</strong>
                                        <select class="form-control" wire:model="role_id">
                                            <option>Seleccione a Regra</option>
                                            @foreach($role as $r)
                                            <option value="{{ $r->id }}">{{ $r->nome }}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome da Rota:</strong>
                                        <select class="form-control" wire:model="rota_id">
                                            <option>Seleccione o Nome da Rotas</option>
                                            @foreach($rota as $r)
                                            <option value="{{ $r->id }}">{{ $r->nome }}</option>
                                            @endforeach
                                        </select>
                                        @error('rota_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" wire:click.prevent="update()" class="btn btn-primary">Alterar</button>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Regras:</strong>
                                        <select class="form-control" wire:model="role_id">
                                            <option>Seleccione a Regra</option>
                                            @foreach($role as $r)
                                            <option value="{{ $r->id }}">{{ $r->nome }}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome da Rota:</strong>
                                        <select class="form-control" wire:model="rota_id">
                                            <option>Seleccione o Nome da Rotas</option>
                                            @foreach($rota as $r)
                                            <option value="{{ $r->id }}">{{ $r->nome }}</option>
                                            @endforeach
                                        </select>
                                        @error('rota_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" wire:click.prevent="store()" class="btn btn-primary">Adicionar</button>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Gerir Utilizadores</h3>
                            <ul>
                                <li><a href="{{ route('rotas') }}">Rotas</a></li>
                                <li><a href="{{ route('roles') }}">Roles</a></li>
                                <li><a href="{{ route('users') }}">Utilizadores</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    @if ($message = Session::get('status'))
                    <div>
                        <p class="alert alert-success" class="table p-field p-col-12 p-md-6 table-striped" style="text-align: center;">{{ $message }}</p>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Role</th>
                                    <th scope="col">Nome das Rotas</th>
                                    <th scope="col">Criação</th>
                                    <th scope="col">Acções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissao as $s)
                                <tr>
                                    @foreach($s->roles as $r)
                                    <td>{{ $r->nome }}</td>
                                    @endforeach
                                    @foreach($s->rotas as $r)
                                    <td>{{ $r->nome }}</td>
                                    @endforeach
                                    <td>{{ $s->created_at->diffForhumans() }}</td>
                                    <td>
                                        <button wire:click="edit('{{$s->id}}')"><i class="fas fa-edit"></i></button>
                                        <button wire:click="delete('{{$s->id}}')"><i class="fas fa-trash"></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>