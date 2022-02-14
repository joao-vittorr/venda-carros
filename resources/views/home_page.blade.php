
@extends('layouts.template')

@section('content')

        <!-- Conteúdo do site-->
        <header class="masthead" style="background-image: url({{ asset('clean-blog/assets/img/banner-site1.jpg')}}); max-width: 100%;
        height: auto">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Vorox Motors - Anuncie já</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Digite o veículo que está buscando" data-sb-validations="required,email" />
                                    </div>
                                    <div class="col-auto"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Pesquisar</button></div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Grid de veículos mais buscados -->
        <div class="row g-0 p-5 borda features-icons bg-light">
        <h1 class="blue text-white borda-redonda texte-center">Veículos mais buscados</h1>
        </div>
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3" style="width: 22rem;">
                        <img src="{{asset('clean-blog/assets/img/honda-civic.png')}}" class="card-img-top" alt="Honda Civic">
                        <div class="card-body">
                            <h3>Honda Civic</h3>
                        </div>
                      </div>
                    <div class="col-lg-3" style="width: 21rem;">
                        <img src="{{asset('clean-blog/assets/img/toyota-corola.png')}}" class="card-img-top" alt="Toyota Corola">
                        <div class="card-body">
                            <h3>Toyota Corola</h3>
                        </div>
                    </div>
                    <div class="col-lg-3" style="width: 20rem;">
                        <img src="{{asset('clean-blog/assets/img/vw-golf.png')}}" class="card-img-top" alt="Volkswagen Golf">
                        <div class="card-body">
                            <h3>Volkswagen Golf</h3>
                        </div>
                    </div>
                    <div class="col-lg-3" style="width: 18rem;">
                        <img src="{{asset('clean-blog/assets/img/cg-125.png')}}" class="card-img-top" alt="Honda Cg 125">
                        <div class="card-body">
                            <h3>Honda Cg 125</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0 p-5 borda">
                <h2 class="blue text-white borda-redonda texte-center">&nbsp;&nbsp; Fique ligado</h2>
                <div class="row mb-2">
                    <div class="col-md-6">
                      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                          <strong class="d-inline-block mb-1 text-primary">Brasil</strong>
                          <h3 class="mb-0">Carros mais vendidos do Brasil ficam até 35% mais caros em 2021; Creta e Strada puxam alta</h3>
                          <div class="mb-1 text-muted">Fevereiro/2022</div>
                          <p class="card-text mb-1">Pesquisa aponta que reajuste sobre os veículos mais vendidos no ano foi até 3,5 vezes maior do que a inflação oficial.</p>
                          <a href="{{ route("post1")}}" class="stretched-link">Continue lendo...</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img width="300" src="{{asset('clean-blog/assets/img/hyundai-creta-platinum-016.jpg')}}" alt="Creta Hyundai">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                          <strong class="d-inline-block mb-2 text-success">Mundo</strong>
                          <h3 class="mb-0">Dubai transforma superesportivo na ambulância mais rápida do mundo</h3>
                          <div class="mb-1 text-muted">Fevereiro/2022</div>
                          <p class="card-text mb-1">Ex-carro mais caro do mundo e estrela de Velozes e Furiosos, Lyfan Hypersport será a ambulância que não carrega paciente.</p>
                          <a href="{{ route("post2")}}" class="stretched-link">Continue lendo...</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img width="300" src="{{asset('clean-blog/assets/img/dubai-ambulancia.jpg')}}" alt="Dubai Ambulância">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Dicas</strong>
                            <h3 class="mb-0">Vai lavar o carro? Então confira essas 10 dicas muito úteis</h3>
                          <div class="mb-1 text-muted">Abril/2021</div>
                          <p class="card-text mb-1">Eis um guia prático para deixar seu automóvel limpinho e brilhando: procedimentos requer determinados cuidados</p>
                          <a href="{{ route("post3")}}" class="stretched-link">Continue lendo...</a>
                        </div>
                            <div class="col-auto d-none d-lg-block">
                             <img width="300" src="{{asset('clean-blog/assets/img/lavar-rodas.jpg')}}" alt="Lavar Rodas">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Curiosidades</strong>
                            <h3 class="mb-0">10 curiosidades sobre carro que você precisa saber</h3>
                          <div class="mb-1 text-muted">Janeiro/2022</div>
                          <p class="card-text mb-1">O que a Fiat Multipla, o Monza Clodovil e um gênio da GM que foi preso por tráfico de drogas têm em comum? 
                              Eles fazem parte da história automobilística</p>
                          <a href="{{ route("post4")}}" class="stretched-link">Continue lendo...</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img width="300" src="{{asset('clean-blog/assets/img/multipla.jpeg')}}" alt="Fiat Multipla">
                        </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Depoimento dos usuários</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('clean-blog/assets/img/testimonials-1.jpg')}}" alt="..." />
                            <h5>Margaret E.</h5>
                            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('clean-blog/assets/img/testimonials-2.jpg')}}" alt="..." />
                            <h5>Fred S.</h5>
                            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('clean-blog/assets/img/testimonials-3.jpg')}}" alt="..." />
                            <h5>Sarah W.</h5>
                            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection