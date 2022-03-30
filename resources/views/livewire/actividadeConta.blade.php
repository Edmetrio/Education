<div class="col-xs-12 col-sm-12 col-md-12 pt-20">
    <div class="form-group">
        <strong>Saldo Disponível:</strong>
        <h1 class="text-danger">{{ $total }}</h1>
    </div>
</div>
<!-- <div class="col-md-12 pt-50">
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Movimento</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Saldo Disponível</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Acções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conta as $s)
                <tr>
                    <td>{{ $s->movimentos->nome }}</td>
                    <td>{{ $s->descricao }}</td>
                    <td>{{ $s->saldo }}</td>
                    <td>{{ $s->valor }}</td>
                    <td>{{ $s->created_at->diffForhumans() }}</td>
                    <td>
                        <button wire:click="editConta('{{$s->id}}')"><i class="fas fa-edit"></i></button>
                        <button wire:click="deleteConta('{{ $s->id }}')"><i class="fab fa-instagram"></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> -->
@foreach($conta as $s)
<div class="col-md-11 ml-10">
    <div class="single-event mb-35">
        <!-- <div class="event-date">
            <h3>20 <span>June</span></h3>
        </div> -->
        <div class="event-content text-left ml-20">
            <div class="event-content-left">
                <h4>{{$s->movimentos->nome}}</h4><hr>
                <ul>
                    <li>{{ $s->descricao }}</li>
                </ul>
            </div>
            <div class="float-right mr-10">
                <!-- <p class="float-right">Saldo</p>
                <a class="default-btn" href="event-details.html">{{ $s->saldo }}</a>
                <a class="default-btn" href="event-details.html">{{ $s->valor}}</a> -->
                <ul class="event-content-righ">
                    <li><strong>Saldo: </strong> {{ $s->saldo }}</li>
                    <li><strong>Valor: </strong> {{ $s->valor }}</li>
                    <li><strong>{{ $s->created_at->format('d-m-y') }}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach