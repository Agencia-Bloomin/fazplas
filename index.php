<?php include 'inc/inc.seo.php' ?>

</head>

<body>
    <?php include 'inc/inc.header.php' ?>

    <div class="padding-banner banner-area">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="media-icons">
                        <?php if (!empty(CONF_SOCIAL_FACEBOOK_PAGE)) : ?>
                        <a href="<?php echo CONF_SOCIAL_FACEBOOK_PAGE; ?>" target="_blank">
                            <i class="fab icon-facebook-f"></i>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty(CONF_SOCIAL_INSTAGRAM_PAGE)) : ?>
                        <a href="<?php echo CONF_SOCIAL_INSTAGRAM_PAGE; ?>" target="_blank">
                            <i class="fab icon-instagram"></i>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty(CONF_SOCIAL_LINKEDIN_PAGE)) : ?>
                        <a href="<?php echo CONF_SOCIAL_LINKEDIN_PAGE; ?>" target="_blank">
                            <i class="fab icon-linkedin-in"></i>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty(CONF_SOCIAL_YOUTUBE_PAGE)) : ?>
                        <a href="<?php echo CONF_SOCIAL_YOUTUBE_PAGE; ?>" target="_blank">
                            <i class="fab icon-youtube"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="swiper bannerSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="img/banners/bannermob1.webp">

                                    <source media="(min-width: 768px)" srcset="img/banners/banner1.webp">
                                    <img class="img-slide img-fluid" src="img/banners/banner1.webp" alt="Banner 1"
                                        title="Banner 1">
                                </picture>
                                <div class="content">
                                    <span>Banner Um</span>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum
                                        vero aperiam
                                        eum
                                        veritatis, dolor
                                        quibusdam
                                        ad facilis accusantium sed, perspiciatis delectus tenetur!
                                        Nulla, sit odio!
                                    </p>
                                    <a href="#">Saiba Mais</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="img/banners/bannermob2.webp">

                                    <source media="(min-width: 768px)" srcset="img/banners/banner2.webp">
                                    <img loading="lazy" class="img-slide img-fluid" src="img/banners/banner2.webp"
                                        alt="Banner 2" title="Banner 2">
                                </picture>
                                <div class="content">
                                    <span>Banner Dois</span>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum
                                        vero aperiam
                                        eum
                                        veritatis, dolor
                                        quibusdam
                                        ad facilis accusantium sed, perspiciatis delectus tenetur!
                                        Nulla, sit odio!
                                    </p>
                                    <a href="#">Saiba Mais</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="img/banners/bannermob3.webp">

                                    <source media="(min-width: 768px)" srcset="img/banners/banner3.webp">
                                    <img loading="lazy" class="img-slide img-fluid" src="img/banners/banner3.webp"
                                        alt="Banner 3" title="Banner 3">
                                </picture>
                                <div class="content">
                                    <span>Banner Três</span>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum
                                        vero aperiam
                                        eum
                                        veritatis, dolor
                                        quibusdam
                                        ad facilis accusantium sed, perspiciatis delectus tenetur!
                                        Nulla, sit odio!
                                    </p>
                                    <a href="#">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span>Em Destaque</span>
                        <h2>Produtos</h2>
                        <div class="divider m-auto mb-4"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="swiper productSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="card-product">
                                        <div class="thumbnail">
                                            <img class="img-fluid " src="img/gallery/psai.png" alt="PS (PSAI, Poliestireno Alto Impacto)"
                                                title="PS (PSAI, Poliestireno Alto Impacto)">
                                        </div>
                                        <div class="inner">
                                            <h3 class="title">PS (PSAI, Poliestireno Alto Impacto)</h3>
                                            <span class="btn-link">Saiba Mais <i class="icon-solid icon-arrow-right-long"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="card-product">
                                        <div class="thumbnail">
                                            <img class="img-fluid " src="img/gallery/pet-bobinas.png" alt="PET Chapas e Bobinas"
                                                title="PET Chapas e Bobinas">
                                        </div>
                                        <div class="inner">
                                            <h3 class="title">PET Chapas e Bobinas</h3>
                                            <span class="btn-link">Saiba Mais <i class="icon-solid icon-arrow-right-long"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="card-product">
                                        <div class="thumbnail">
                                            <img class="img-fluid " src="img/gallery/petg.jpg" alt="PETG Chapas"
                                                title="PETG Chapas">
                                        </div>
                                        <div class="inner">
                                            <h3 class="title">PETG Chapas</h3>
                                            <span class="btn-link">Saiba Mais <i class="icon-solid icon-arrow-right-long"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="card-product">
                                        <div class="thumbnail">
                                            <img class="img-fluid " src="img/gallery/polionda.webp" alt="Polionda, Plastionda, Ondaplast"
                                                title="Polionda, Plastionda, Ondaplast">
                                        </div>
                                        <div class="inner">
                                            <h3 class="title">Polionda, Plastionda, Ondaplast</h3>
                                            <span class="btn-link">Saiba Mais <i class="icon-solid icon-arrow-right-long"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="card-product">
                                        <div class="thumbnail">
                                            <img class="img-fluid " src="img/gallery/polietileno.jpg" alt="Polietileno"
                                                title="Polietileno">
                                        </div>
                                        <div class="inner">
                                            <h3 class="title">Polietileno</h3>
                                            <span class="btn-link">Saiba Mais <i class="icon-solid icon-arrow-right-long"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn mb-4 mt-3">Veja todos</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area bg-gray">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 animate">
                    <div class="section-title mb-4">
                        <span>Conheça a nossa empresa</span>
                        <h2>Sobre Nós</h2>
                        <div class="divider"></div>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam fugit asperiores ratione
                        quidem
                        esse exercitationem aut nobis est ab cupiditate eveniet ea vero praesentium veritatis vitae
                        deserunt unde, totam magnam?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum sequi eaque quidem quis, ipsa
                        ipsum ducimus reprehenderit natus nisi ex! Dolorum natus aut facere blanditiis?</p>

                    <a href="empresa" class="btn mt-2 mb-5">Saiba Mais</a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="style-img">
                        <img loading="lazy" src="img/gallery/about.jpg" alt="Sobre Nós" title="Sobre Nós"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-plus">
                        <div class="d-flex align-items-center">
                            <div class="text-area">
                                <h3><i class="icon-solid icon-bullseye" aria-hidden="true"></i> Missão</h3>
                                <p>Desenvolver produtos e prestar serviços com qualidade, visando à satisfação do
                                    cliente através da utilização de tecnologias adequadas e de ponta, superando a
                                    cada
                                    entrega a nossa qualidade, contribuindo assim para a inovação dos produtos
                                    oferecidos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-plus">
                        <div class="d-flex align-items-center">
                            <div class="text-area">
                                <h3><i class="icon-solid icon-eye" aria-hidden="true"></i> Visão</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsa ex autem
                                    earum
                                    voluptate corporis? Minima nisi laboriosam fugiat! Eveniet officiis voluptates
                                    sint
                                    incidunt dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-plus">
                        <div class="d-flex align-items-center">
                            <div class="text-area">
                                <h3><i class="icon-solid icon-gem" aria-hidden="true"></i> Valores</h3>
                                <ul>
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="service-area show-animate">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-4">
                            <span>Confira nossos</span>
                            <h2>Serviços</h2>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="box-navfeatures">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mb-4">
                                    <ul class="nav nav-tabs custom-nav" id="myTab">
                                        <li class="nav-item tab-style">
                                            <span class="nav-link active" id="tabs001">Impressão Digital
                                                <div class="icon">
                                                    <img src="img/logo/impressao.png" alt="Impressão Digital"
                                                        title="Impressão Digital">
                                                </div>
                                            </span>
                                        </li>
                                        <li class="nav-item tab-style" role="presentation">
                                            <span class="nav-link" id="tabs002">Impressão Offset
                                                <div class="icon">
                                                    <img src="img/logo/offset.png" alt="Impressão Offset"
                                                        title="Impressão Offset">
                                                </div>
                                            </span>
                                        </li>
                                        <li class="nav-item tab-style" role="presentation">
                                            <span class="nav-link" id="tabs003">Serigrafia
                                                <div class="icon">
                                                    <img src="img/logo/serigrafia.png" alt="Serigrafia"
                                                        title="Serigrafia">
                                                </div>
                                            </span>
                                        </li>
                                        <li class="nav-item tab-style" role="presentation">
                                            <span class="nav-link" id="tabs004">Corte e Vinco
                                                <div class="icon">
                                                    <img src="img/logo/corte.png" alt="Corte e Vinco"
                                                        title="Corte e Vinco">
                                                </div>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <!-- 001 -->
                                        <div class="tab-pane active" id="tab001">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="box-img mb-4">
                                                        <img src="img/gallery/impressao-digital.jpeg"
                                                            alt="Impressão Digital"
                                                            title="Impressão Digital">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="box-text">
                                                        <h3 class="title">Impressão Digital</h3>
                                                        <div class="desc">

                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                A
                                                                accusamus, qui sunt corporis alias fuga debitis possimus
                                                                eius iusto. Qui eveniet quibusdam expedita quaerat,
                                                                ipsam
                                                                commodi repudiandae maiores eligendi officia?</p>
                                                        </div>


                                                        <a href="#" class="btn mt-4">Saiba mais</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 002 -->
                                        <div class="tab-pane" id="tab002">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="box-img mb-4">
                                                        <img src="img/gallery/impressao-offset.png" alt="Impressão Offset"
                                                            title="Impressão Offset">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="box-text">
                                                        <h3 class="title">Impressão Offset</h3>
                                                        <div class="desc">

                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Doloremque nemo totam, voluptates nobis officiis non
                                                                impedit
                                                                atque laboriosam, provident laudantium voluptatem
                                                                doloribus
                                                                alias eveniet quis, quo sequi sint quos quia facilis
                                                                aliquam
                                                                libero voluptate ab dignissimos veniam. Quia, facere
                                                                repellendus.</p>
                                                        </div>

                                                        <a href="#" class="btn mt-4">Saiba mais</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 003 -->
                                        <div class="tab-pane" id="tab003">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="box-img mb-4">
                                                        <img src="img/gallery/serigrafia.png" alt="Serigrafia"
                                                            title="Serigrafia">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="box-text">
                                                        <h3 class="title">Serigrafia</h3>
                                                        <div class="desc">

                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Illum enim aut eaque velit numquam id quasi dolorum,
                                                                itaque,
                                                                laborum esse beatae deleniti voluptas cupiditate! Minima
                                                                debitis distinctio dolor voluptatem exercitationem
                                                                ducimus
                                                                iste, laudantium praesentium aspernatur ad, delectus
                                                                quisquam rem aut!</p>
                                                        </div>

                                                        <a href="#" class="btn mt-4">Saiba mais</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 004 -->
                                        <div class="tab-pane" id="tab004">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="box-img mb-4">
                                                        <img src="img/gallery/corte-vinco.jpg" alt="Corte e Vinco"
                                                            title="Corte e Vinco">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="box-text">
                                                        <h3 class="title">Corte e Vinco</h3>
                                                        <div class="desc">

                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Aperiam dolore quos eos nam impedit voluptas, quibusdam
                                                                harum quod vero ipsa accusamus atque distinctio
                                                                provident
                                                                ab. Dolor nihil alias consequuntur id quod voluptate
                                                                saepe
                                                                quas quidem, veritatis facere magni velit quaerat?</p>
                                                        </div>

                                                        <a href="#" class="btn mt-4">Saiba mais</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'inc/inc.cta.php' ?>
        <?php include 'inc/inc.footer.php' ?>
        <?php include 'inc/inc.js.php' ?>
</body>

</html>