<!-- <div class="col-md-12 pt-50">
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
                @foreach($poost as $s)
                <tr>
                    <td>{{ $s->nome }}</td>
                    <td><img class="img-fluid" src="{{asset('../storage/app/public')}}/{{$s->icon}}" style="width: 30px; text-align: center;" /></td>
                    <td>{{ $s->descricao }}</td>
                    <td>{{ $s->created_at->diffForhumans() }}</td>
                    <td>
                        <button wire:click="editPoste('{{$s->id}}')"><i class="fas fa-edit"></i></button>
                        <button wire:click="delete('{{ $s->id }}')"><i class="fab fa-instagram"></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> -->

@foreach($poost as $s)
<div class="col-md-11 mt-20">
    <div class="single-event mb-10">
        <div class="event-date">
        <img class="img-fluid" src="{{asset('../storage/app/public')}}/{{$s->icon}}" style="width: 100px; text-align: center;" />
        </div>
        <div class="event-content text-left">
            <div class="event-content-left">
                <h4>{{ $s->nome }}</h4>
                <ul>
                    <li>{{ $s->descricao }}</li>
                </ul>
            </div>
            <div class="float-right mr-10">
                <ul class="event-content-righ">
                    <li><strong>Criado: </strong>{{ $s->created_at->diffForhumans() }} </li>
                    <li class="float-right"><button wire:click="editPoste('{{$s->id}}')"><i class="fas fa-edit"></i></button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
<div>
    {{$poost->links()}}
</div>