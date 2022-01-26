
@extends('layouts.template')

@section('content')

        <!-- Conteúdo do site-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Site de Vendas de Veículos</h1>
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
                          <strong class="d-inline-block mb-2 text-primary">Brasil</strong>
                          <h3 class="mb-0">Featured post</h3>
                          <div class="mb-1 text-muted">Nov 12</div>
                          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                          <strong class="d-inline-block mb-2 text-success">Mundo</strong>
                          <h3 class="mb-0">Post title</h3>
                          <div class="mb-1 text-muted">Nov 11</div>
                          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Dicas</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                          </div>
                          <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Curiosidades</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                          </div>
                          <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
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