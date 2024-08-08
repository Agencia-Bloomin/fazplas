<header>
    <div class="header-area header-transparent">
        <div class="top_menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                        <div class="header-social">
                            <?php if(!empty(CONF_SOCIAL_FACEBOOK_PAGE)): ?>
                            <a href="<?php echo CONF_SOCIAL_FACEBOOK_PAGE;?>" target="_blank">
                                <i class="fab icon-facebook"></i>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SOCIAL_INSTAGRAM_PAGE)): ?>
                            <a href="<?php echo CONF_SOCIAL_INSTAGRAM_PAGE;?>" target="_blank">
                                <i class="fab icon-instagram"></i>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SOCIAL_YOUTUBE_PAGE)): ?>
                            <a href="<?php echo CONF_SOCIAL_YOUTUBE_PAGE;?>" target="_blank">
                                <i class="fab icon-youtube"></i>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SOCIAL_LINKEDIN_PAGE)): ?>
                            <a href="<?php echo CONF_SOCIAL_LINKEDIN_PAGE;?>" target="_blank">
                                <i class="fab icon-linkedin-in"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-11 d-flex justify-content-end">
                        <div class="contact-menu">
                            <?php if(!empty(CONF_SITE_EMAIL)): ?>
                            <a class="dn_btn" href="mailto:<?php echo CONF_SITE_EMAIL;?>">
                                <i class="icon-solid icon-envelopes-bulk"></i>
                                <?php echo CONF_SITE_EMAIL;?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SITE_EMAIL_2)): ?>
                            <a class="dn_btn" href="mailto:<?php echo CONF_SITE_EMAIL_2;?>">
                                <i class="icon-solid icon-envelopes-bulk"></i>
                                <?php echo CONF_SITE_EMAIL_2;?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SITE_PHONE_LINK)): ?>
                            <a class="dn_btn" href="tel:<?php echo CONF_SITE_PHONE_LINK;?>">
                                <i class="icon-solid icon-phone"></i>
                                <?php echo CONF_SITE_PHONE;?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SITE_WHATSAPP_LINK)): ?>
                            <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK;?>" target="_blank">
                                <i class="icon-brands icon-whatsapp"></i>
                                <?php echo CONF_SITE_WHATSAPP;?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SITE_WHATSAPP_LINK_2)): ?>
                            <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK_2;?>" target="_blank">
                                <i class="icon-brands icon-whatsapp"></i>
                                <?php echo CONF_SITE_WHATSAPP_2;?>
                            </a>
                            <?php endif; ?>
                            <?php if(!empty(CONF_SITE_WHATSAPP_LINK_3)): ?>
                            <a class="dn_btn" href="<?php echo CONF_SITE_WHATSAPP_LINK_3;?>" target="_blank">
                                <i class="icon-brands icon-whatsapp"></i>
                                <?php echo CONF_SITE_WHATSAPP_3;?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-main">
            <a href="./">
                <div class="logo">
                    <img src="img/logo/logo.png" alt="Logo" title="Logo" class="img-fluid">
                </div>
            </a>
            <div class="open-nav-menu">
                <span></span>
            </div>
            <div class="menu-overlay"></div>
            <nav class="nav-menu">
                <div class="close-nav-menu">
                    <i class="icon-solid icon-xmark"></i>
                </div>
                <ul class="menu">
                    <li class="menu-item has-children">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="javascript:void(0)">Empresa</a>
                    </li>
                    <li class="menu-item has-children">
                        <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">Produtos <i
                                class="plus"></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item has-children has-children-2">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu"> PS (PSAI,
                                    Poliestireno Alto Impacto) <i class="plus"></i></a>
                                <ul class="sub-menu sub-menu-2">
                                    <li class="menu-item"><a href="javascript:void(0)">PSAI</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">PSAI Multicamadas</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">PS Cristal</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children has-children-2">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu"> PET Chapas e
                                    Bobinas <i class="plus"></i></a>
                                <ul class="sub-menu sub-menu-2">
                                    <li class="menu-item"><a href="javascript:void(0)">Bobinas ou Chapas</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">Lâmina Multicamadas</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">Média Barreira para Alimentos</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item has-children has-children-2">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu"> PETG Chapas <i
                                        class="plus"></i></a>
                                <ul class="sub-menu sub-menu-2">
                                    <li class="menu-item"><a href="javascript:void(0)">PETG Cristal Chapas</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children has-children-2">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu"> Polionda,
                                    Plastionda, Ondaplast <i class="plus"></i></a>
                                <ul class="sub-menu sub-menu-2">
                                    <li class="menu-item"><a href="javascript:void(0)">Chapas, Caixas, Bobinas,
                                            Colmeias, Discos</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">Caixa Agrícola</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children has-children-2">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu"> Polietileno <i
                                        class="plus"></i></a>
                                <ul class="sub-menu sub-menu-2">
                                    <li class="menu-item"><a href="javascript:void(0)">Filme de Polietileno para
                                            Impressão</a></li>
                                    <li class="menu-item"><a href="javascript:void(0)">Embalagens</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item has-children">
                        <a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">Serviços <i
                                class="plus"></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">
                                    Impressão Digital</a></li>
                            <li class="menu-item"><a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">
                                    Impressão Offset</a></li>
                            <li class="menu-item"><a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">
                                    Serigrafia</a></li>
                            <li class="menu-item"><a class="nav-link" href="javascript:void(0)" data-toggle="sub-menu">
                                    Corte e Vinco</a></li>
                        </ul>
                    </li>
                    <li class="menu-item d-lg-none d-block">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </nav>
            <div class="contact-btn d-lg-block d-none">
                <a href="contato" class="btn">Contato</a>
            </div>
        </div>
    </div>
</header>