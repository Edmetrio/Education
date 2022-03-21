<h3> @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif
</h3>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <table class="table">
            <tr>
                <td class="alert alert-primary">Nome:</td>
                <td><strong>{{$pessoa->nome ?? ''}}</strong></td>
            </tr>
            <tr>

                <td>Sexo:</td>
                <td><strong>{{$pessoa->sexos->nome ?? ''}}</strong></td>
            </tr>
            <tr>
                <td>Nacionalidade:</td>
                @foreach($pessoa->nacionalidades as $n)
            <tr>
                <td><strong>{{ $n->nome ?? '' }}</strong></td>
            </tr>
            @endforeach
            </tr>
            <tr>
                <td>Data de Nascimento:</td>
                <td><strong>{{ $pessoa->nascimento ?? ''}}</strong></td>
            </tr>
            <tr>
                <td>Número do Passaporte:</td>
                <td><strong>{{ $pessoa->passaporte ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Número do Telefone</td>
                <td><strong>{{ $pessoa->telefone ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><strong>{{ $pessoa->email ?? '' }}</strong></td>
            </tr>
            <tr>
                <td class="alert alert-primary">Academico</td>
                <td><strong></strong></td>
            </tr>
            @foreach($pessoa->academicas as $a)
            <tr>
                <td>Escola Secundário ou Universidade</td>
                <td><strong>{{ $a->escola ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Término do Ensino</td>
                <td><strong>{{ $a->termino ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Pais que se formou</td>
                <td><strong>{{ $a->pais->nome ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Certificado</td>
                <td><strong>{{ $a->certificado ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Idioma de Proficiência</td>
                @foreach($a->idiomas as $i)
                <td><strong>{{ $i->nome ?? '' }}</strong></td>
                @endforeach
            </tr>
            <tr>
                <td>Exame de Proficiência</td>
                @foreach($a->exames as $e)
                <td><strong>{{ $e->nome ?? 'Sem Exame'}}</strong></td>
                @endforeach
            </tr>
            @endforeach
            <tr>
                <td class="alert alert-primary">Superior</td>
            </tr>
            @foreach($pessoa->superiors as $s)
            <tr>
                <td>Grau de Licenciatura</td>
                <td><strong>{{ $s->graus->nome ?? '' }}</strong></td>

            </tr>
            <tr>
                <td>Curso</td>
                <td><strong>{{ $s->curso ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Ano de Entrada</td>
                <td><strong>{{ $s->intakes->nome ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Pacote</td>
                <td><strong>{{ $s->pacotes->nome ?? ''}}</strong></td>
                <td><strong>{{ $s->pacotes->valor ?? ''}}</strong>{{ $s->moedas->nome ?? '' }}</td>
            </tr>
            <tr>
                <td>Orçamento</td>
                <td><strong>{{ $s->orcamento ?? '' }}</strong></td>
            </tr>
            <tr>
                <td>Países de Interesse</td>
                @foreach($s->pais as $p)
                <td><strong>{{ $p->nome ?? '' }}</strong></td>
                @endforeach
            </tr>
            <tr>
                <td>Idioma que deseja estudar</td>
                @foreach($s->idiomas as $i)
                <td><strong>{{ $i->nome ?? '' }}</strong></td>
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>
</div>