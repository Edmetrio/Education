<div>
    <div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>about us</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

<div class="courses-area pt-150 text-center">
        <div class="container">
            <div class="row">
                @foreach($servico as $s)
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 5%;">
                    <div class="single-course">
                        <a href="{{ url('servico', $s->id) }}"><img src="{{asset('storage')}}/{{$s->icon}}" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{ url('servico', $s->id) }}">{{ $s->nome }}</a></h3>
                            <p>{{ $s->descricao }}. </p>
                            <a class="default-btn" href="{{ url('servico', $s->id) }}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
