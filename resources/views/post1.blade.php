
@extends('layouts.template')

@section('content')
<!-- Page Header-->
<header class="masthead_post" style="background-image: url('{{asset('clean-blog/assets/img/fiat-strada.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Carros mais vendidos do Brasil ficam até 35% mais caros em 2021; Creta e Strada puxam alta</h1>
                    <h2 class="subheading">Pesquisa aponta que reajuste sobre os veículos mais vendidos no ano foi até 3,5 vezes maior do que a inflação oficial</h2>
                    <span class="meta">
                        Por Emily Nery - Auto Esporte
                    <br/>
                    <a href="https://autoesporte.globo.com/seu-bolso/noticia/2022/02/
                    carros-mais-vendidos-do-brasil-ficam-ate-35percent-mais-caros-em-2021-creta-e-strada-puxam-alta.ghtml">Leia na íntrega</a>
                    </span>
                    <p><small><i>05 de fevereiro de 2022</i></small></p>
                       
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p class="text-justify">Muito acima do Índice Nacional de Preços ao Consumidor Amplo (IPCA) – a nossa inflação oficial – 
                   que fechou em 10,06% em 2021, os 10 carros novos mais vendidos no Brasil ficaram até 35% mais caros.</p>
                <p class="text-justify">Segundo levantamento da consultoria Kelley Blue Book (KBB), nem a popularidade destes veículos foi capaz 
                   de espantar a hiperinflação dos preços, que ficou acima dos 14,8% – percentual do reajuste médio do Jeep Compass em 2021.</p>
                <p class="text-justify">A líder de vendas no ano, Fiat Strada, ficou cerca de 33,9% mais cara. Seu valor médio em janeiro 
                   era de R$ 76.986, mas encerrou o ano custando por volta de R$ 103.114.</p>
                <p class="text-justify">Mesmo após trocar de motor e renovar o visual – mudanças que costumam vir acompanhadas de generosos reajustes –, 
                   a irmã maior Toro concentrou um aumento bem menor, de 17,8%, mas ainda acima da inflação no período.</p>
                <p class="text-justify">O mesmo não se pode afirmar do Hyundai Creta. O SUV que passou por uma reestilização profunda em agosto ficou 35% mais caro 
                    entre janeiro e dezembro de 2021 – de R$ 90.497, saltou para R$ 122.151. Uma das possíveis explicações para essa alta 
                    acentuada foi o lançamento da inédita versão topo de linha Ultimate 2.0, que chegou aos R$ 160 mil no final do ano.</p>
                <img class="img-fluid" src="{{asset('clean-blog/assets/img/gol.jpg')}}" alt="Gol Volkswagen" />
                <p class="text-justify">Por outro lado, nem os veteranos escaparam da hipervalorização do 0-km. Foi o caso do Volkswagen Gol, sexto carro mais 
                    vendido no ano, que ficou 24,4% mais caro. O valor médio do hatch subiu R$ 14.547 no período e terminou dezembro custando R$ 74.263.</p>
                <p class="text-justify">No entanto, o veículo de entrada que concentra o maior reajuste é o Fiat Mobi. Com um aumento percentual de 30,8%, o preço médio do pequeno 
                   carro terminou dezembro em R$ 56.883. Atualmente, o modelo 0-km não sai por menos de R$ 60.990.</p>
                <p class="text-justify">Curiosamente, o SUV mais vendido do Brasil, o Jeep Renegade, acumulou um reajuste até maior do que o Compass (14,8%), modelo que 
                   foi reestilizado em 2021. O utilitário esportivo compacto encareceu em média 21,1% e chegou aos R$ 141.750 (média de preço de suas versões flex e a diesel).</p>
                <p class="text-justify">Vale lembrar que no início deste ano o Renegade passou por um facelift e adotou o motor 1.3 turboflex, aposentando o motor a diesel.</p>
                <blockquote class="blockquote"><p class="h3">Veja abaixo a tabela com as variações de preços dos 10 carros novos mais vendidos em 2021:</p></blockquote>
                <small>
                    <i>Publicação produzida por</i>
                    <a href="https://autoesporte.globo.com/">Auto Esporte</a>
                </small>
            </div>
        </div>
    </div>
</article>
<!-- Footer-->
@endsection