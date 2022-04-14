<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Gerir Sliders</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="courses-details-area blog-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                @if($createData == false)
                <div class="col-md-8 mb-50">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2 class="text-center">Sliders</h2>
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
                                            <strong>Nome:</strong>
                                            <input type="text" wire:model="nome" class="form-control" placeholder="Nome">
                                            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Icon:</strong>
                                            <input type="file" wire:model="icon" class="form-control" placeholder="image">
                                            @if($icon)
                                            <img src="{{$icon->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
                                            @endif
                                            @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Descrição:</strong>
                                            <textarea class="form-control" style="height:100px" wire:model="descricao" placeholder="Detail"></textarea>
                                            @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Texto:</strong>
                                            <textarea class="form-control" style="height:150px" wire:model="texto" placeholder="Detail"></textarea>
                                            @error('texto') <span classs="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>1 Texto:</strong>
                                            <textarea class="form-control" style="height:150px" wire:model="texto1" placeholder="Detail"></textarea>
                                            @error('texto1') <span classs="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>2 Texto:</strong>
                                            <textarea class="form-control" style="height:150px" wire:model="texto2" placeholder="Detail"></textarea>
                                            @error('texto2') <span classs="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Link:</strong>
                                            <input type="text" wire:model="link" class="form-control" placeholder="link">
                                            @error('link') <span class="text-danger">{{ $message }}</span> @enderror
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
                            <h2>Slider</h2>
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
                                            <strong>Nome:</strong>
                                            <input type="text" wire:model="edit_nome" class="form-control" placeholder="Nome">
                                            @error('edit_nome') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Icon:</strong>
                                            <input type="file" wire:model="new_icon" class="form-control" placeholder="image">
                                            @if($new_icon)
                                            <img src="{{$new_icon->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
                                            @else
                                            <img src="{{ asset('storage')}}/{{$old_icon}}" style="width: 15%; text-align: center;" alt="" />
                                            @endif
                                            <input type="hidden" wire:model='old_icon'>
                                            @error('edit_icon') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Descrição:</strong>
                                            <textarea class="form-control" style="height:100px" wire:model="edit_descricao" placeholder="Detail"></textarea>
                                            @error('edit_descricao') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Texto:</strong>
                                            <textarea class="form-control" style="height:150px" wire:model="edit_texto" placeholder="Detail"></textarea>
                                            @error('edit_texto') <span classs="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Texto1:</strong>
                                            <textarea class="form-control" style="height:150px" wire:model="edit_texto1" placeholder="Detail"></textarea>
                                            @error('edit_texto1') <span classs="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Texto2:</strong>
                                            <textarea class="form-control" style="height:150px" wire:model="edit_texto2" placeholder="Detail"></textarea>
                                            @error('edit_texto2') <span classs="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Link:</strong>
                                            <input type="text" wire:model="edit_link" class="form-control" placeholder="Nome">
                                            @error('edit_link') <span class="text-danger">{{ $message }}</span> @enderror
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
                            <h3>Serviços</h3>
                            <ul>
                            @foreach($servicos as $s)
                                <li><a href="{{ url('servico', $s->id)}}">{{ $s->nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <div class="single-blog-banner">
                                <img src="{{asset('img/blog/blog-img.jpg')}}" alt="blog">
                                <h2>Escolha<br> Acertada<br> First Education</h2>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>Últimos Poosts</h3>
                            @foreach($poost as $p)
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="{{asset('storage')}}/{{$p->icon}}"><img src="{{asset('storage')}}/{{$p->icon}}" style="width: 70px; height: 70px;" alt="post">
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="{{asset('storage')}}/{{$p->icon}}">{{ $p->nome }}</a></h4>
                                    <p>{{ $p->created_at}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
<!--                         <div class="single-blog-widget">
                            <h3>Aceitações</h3>
                            <div class="single-tag">
                                <a href="blog-details.html" class="mr-10 mb-10">course</a>
                                <a href="blog-details.html" class="mr-10 mb-10">education</a>
                                <a href="blog-details.html" class="mb-10">teachers</a>
                                <a href="blog-details.html" class="mr-10">learning</a>
                                <a href="blog-details.html" class="mr-10">university</a>
                                <a href="blog-details.html">events</a>
                            </div>
                        </div> -->
                    </div>
                </div>

                @if($showData == true)
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Criação</th>
                                    <th scope="col">Acções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($slider as $s)
                                <tr>
                                    <td>{{ $s->nome }}</td>
                                    <td><img class="img-fluid" src="{{asset('storage')}}/{{$s->icon}}" style="width: 30px; text-align: center;" /></td>
                                    <td>{{ $s->descricao }}</td>
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