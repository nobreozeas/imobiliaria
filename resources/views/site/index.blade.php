@extends('layout.app')
@section('title', 'Início')

@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">
    @endpush


    <header>
        <nav class="navbar navbar-expand-md fixed-top navbar_transparente">

            <div class="container">
                <a href="" class="navbar-brand">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" width="150">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <span class="nav-toggler-icon">
                        <i class="fa-solid fa-bars text-light"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-decoration-none text-light"><i
                                    class="fa-solid fa-house"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-decoration-none text-light">Imóveis à venda</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-decoration-none text-light">Imóveis para alugar</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-decoration-none text-light">Sobre nós</a>
                        </li>
                    </ul>
                </div>


            </div>

        </nav>
    </header>

    <section class="banner d-flex">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-12">
                    <div id="titulo_banner">
                        <h1 class="text-center" style="font-size: 50px; color: #fff; font-weight:700;">Especialistas em
                            Imóveis de Alto padrão.</h1>
                        <h6 class="text-center" style="font-size: 30px; color: #fff; font-weight:500;">O sonho da casa
                            própria mais perto de você.</h6>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <div class="text-light" id="header_filtro">
                            <span>Encontre o seu imóvel</span>
                        </div>
                    </div>
                    <div class="input_search">
                        <div class="inputs">
                            <form action="">
                                <div class="row">
                                    <div class="col-3 mb-3">
                                        <select class="form-select" name="" id="tipo">
                                            <option value="1">Comprar</option>
                                            <option value="2">Alugar</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" name="" id="">
                                            <option value="1">Tipo</option>
                                            <option value="1">Apartamento</option>
                                            <option value="1">Casa</option>
                                            <option value="1">Cobertura</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Digite o bairro">
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" name="" id="">
                                            <option value="">Preço de Venda</option>
                                            <option value="">Até 100.000</option>
                                            <option value="">De 100.000,00 até 200.000</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" name="" id="">
                                            <option value="">Quartos</option>
                                            <option value="">1+</option>
                                            <option value="">2+</option>
                                            <option value="">3+</option>
                                            <option value="">4+</option>
                                            <option value="">5+</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" name="" id="">
                                            <option value="">Condomínio</option>
                                            <option value="">Alphaville</option>
                                            <option value="">Ecoville</option>
                                            <option value="">Golden</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-secondary w-100"><i
                                                class="fa-solid fa-magnifying-glass me-2"></i>Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="mt-5">

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/banner1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/banner2.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <section class="mt-5">
            <div>
                <h4 class="text-center text-light mb-4 titulos">Imóveis em destaque</h4>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques ">
                        <img src="{{ asset('assets/images/casa2.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa3.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa4.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center mt-5">
                            <a href="" class="text-decoration-none btn_ver_mais">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="mt-5">
            <div>
                <h4 class="text-center text-light mb-4 titulos">Imóveis de Alto Padrão</h4>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques ">
                        <img src="{{ asset('assets/images/casa2.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa3.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa4.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center mt-5">
                            <a href="" class="text-decoration-none btn_ver_mais">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="mt-5">
            <div>
                <h4 class="text-center text-light mb-4 titulos">Imóveis Médios</h4>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques ">
                        <img src="{{ asset('assets/images/casa2.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa3.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa4.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center mt-5">
                            <a href="" class="text-decoration-none btn_ver_mais">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="mt-5">
            <div>
                <h4 class="text-center text-light mb-4 titulos">Imóveis Populares</h4>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques ">
                        <img src="{{ asset('assets/images/casa2.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa3.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark text-light card_destaques">
                        <img src="{{ asset('assets/images/casa4.png') }}" class="card-img-top" alt="...">

                        <div class="card-footer">
                            <div class="tipo pb-2">
                                <span>Casa - Alphaville, Acre</span>
                            </div>
                            <div class="preco pb-2">
                                <span>R$ 1.000.000,00</span>
                            </div>

                            <div class="d-flex justify-content-around flex-row text-center">
                                <div class="tamanho"><small><i
                                            class="fa-solid fa-ruler-combined me-1 text-primary"></i>174
                                        m<sup>2</sup></small></div>
                                <div class="quartos"><small><i class="fa-solid fa-bed me-1 text-primary"></i>3
                                        Quartos</small></div>
                                <div class="banheiros"><small><i class="fa-solid fa-bath me-1 text-primary"></i>4
                                        Banheiros</small></div>
                                <div class="vagas"><small><i class="fa-solid fa-car-side me-1 text-primary"></i>2
                                        Vagas</small></div>
                            </div>

                            <div class="botao">
                                <button class="btn btn-secondary w-100 mt-3">Ver detalhes</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center mt-5">
                            <a href="" class="text-decoration-none btn_ver_mais">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>






    </div>

    <div class="faixa">
        <div class="container">
            <div class="text-center my-3">
                <h4 class="text-light">Conheça os Nossos Especialistas</h4>
            </div>
            <section>
                <div class="row d-flex justify-content-center">
                        <div class="col-md-3">
                            <div class="card card_especialistas">

                                <img src="{{ asset('assets/images/espe2.jpg') }}" class="card-img-top especialistas_img"
                                    alt="...">
                                <div class="card-body card_body_especialistas">
                                    <div class="d-flex flex-column">
                                        <span>Joana Ferreira</span>
                                        <span>Especialista em vendas de casas</span>
                                        <span>15 anos de Experiência</span>
                                        <span>@for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid fa-star" style="color: #f1d209;"></i>

                                        @endfor</span>
                                        <div class="d-flex">
                                            <a href=""><i class="fa-brands fa-whatsapp me-3 fa-xl"></i></a>
                                            <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card_especialistas">

                                <img src="{{ asset('assets/images/espe1.jpg') }}" class="card-img-top especialistas_img"
                                    alt="...">
                                <div class="card-body card_body_especialistas">
                                    <div class="d-flex flex-column">
                                        <span>Cláudio Rodrigues</span>
                                        <span>Especialista em aluguel comercial</span>
                                        <span>15 anos de Experiência</span>
                                        <span>@for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid fa-star" style="color: #f1d209;"></i>

                                        @endfor</span>
                                        <div class="d-flex">
                                            <a href=""><i class="fa-brands fa-whatsapp me-3 fa-xl"></i></a>
                                            <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card_especialistas">

                                <img src="{{ asset('assets/images/espe3.jpg') }}" class="card-img-top especialistas_img"
                                    alt="...">
                                <div class="card-body card_body_especialistas">
                                    <div class="d-flex flex-column">
                                        <span>Denise Freitas</span>
                                        <span>Especialista em condomínios</span>
                                        <span>15 anos de Experiência</span>
                                        <span>@for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid fa-star" style="color: #f1d209;"></i>

                                        @endfor</span>
                                        <div class="d-flex">
                                            <a href=""><i class="fa-brands fa-whatsapp me-3 fa-xl"></i></a>
                                            <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </section>

        </div>

    </div>



@endsection
