<!-- <div class="col-md-12 pt-50">
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Acções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actividade as $a)
                <tr>
                    <td>{{ $a->pessoas->nome }}</td>
                    <td>{{ $a->descricao }}</td>
                    <td>{{ $a->situacaos->nome }}</td>
                    <td>{{ $s->created_at->diffForhumans() }}</td>
                    <td>
                        <button wire:click="editProcesso('{{$a->id}}')"><i class="fas fa-edit"></i></button>
                        <button wire:click="deleteProcesso('{{ $a->id }}')"><i class="fab fa-instagram"></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> -->

@foreach($actividade as $a)
<div class="col-xs-12 col-sm-12 col-md-12 mt-20 pl-20" >
    <div class="single-event mb-35">
        <!-- <div class="event-date col-md-2">
            <h3><span>{{ $a->created_at }}</span></h3>
        </div> -->
        <div class="event-content text-left">
            <div class="event-content-left">
                <h4>{{$a->nome}}</h4>
                <h6>Candidato: {{$a->pessoas->nome}}</h6>
                <ul>
                    <li class="col-md-11">{{ $a->descricao }}</li>
                </ul>
            </div>
            <div class="float-right">
                <!-- <p class="float-right">Saldo</p>
                <a class="default-btn" href="event-details.html">{{ $s->saldo }}</a>
                <a class="default-btn" href="event-details.html">{{ $s->valor}}</a> -->
                <ul class="event-content-righ mr-10">
                    <li><strong>Situação: </strong> {{ $a->situacaos->nome }}</li>
                    <li><button wire:click="editProcesso('{{$a->id}}')" class="default-btn"><i class="fas fa-edit"></i></button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
<div>
    {{$actividade->links()}}
</div>