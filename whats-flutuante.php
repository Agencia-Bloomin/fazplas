<div class="whats-flutuante">
  <div class="bg-verde-zap">
    <p>Fale Conosco pelo Whatsapp</p>
    <button class='btn-fechar'>
      <img src="https://www.bloomin.com.br/newsletter/x-symbol.png" alt="WhatsApp" title="WhatsApp">
    </button>
  </div>
  <div class="whats-popup">
    <div class="content">
      <a href="<?php echo CONF_SITE_WHATSAPP_LINK;?>" target='_blank'>
        <div class='linha'>
          <div class='coluna pequena'>
            <img src='img/logo/whats.jpg' alt="WhatsApp" title="WhatsApp">
          </div>
          <div class='coluna'>
            <span class='whats-title'>
              WhatsApp 1
            </span>
          </div>
        </div>
      </a>
      <a href="<?php echo CONF_SITE_WHATSAPP_LINK_2;?>" target='_blank'>
        <div class='linha'>
          <div class='coluna pequena'>
            <img src='img/logo/whats.jpg' alt="WhatsApp" title="WhatsApp">
          </div>
          <div class='coluna'>
            <span class='whats-title'>
              WhatsApp 2
            </span>
          </div>
        </div>
      </a>
      <a href="<?php echo CONF_SITE_WHATSAPP_LINK_3;?>" target='_blank'>
        <div class='linha'>
          <div class='coluna pequena'>
            <img src='img/logo/whats.jpg' alt="WhatsApp" title="WhatsApp">
          </div>
          <div class='coluna'>
            <span class='whats-title'>
              WhatsApp 3
            </span>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="whatsapp">
    <img src='https://www.bloomin.com.br/newsletter/ico-whats-branco.png' alt="WhatsApp" title="WhatsApp">
  </div>
</div>

<script>
  const zap = document.querySelector('.whatsapp')
  const btnFechar = document.querySelector('.btn-fechar')
  zap.addEventListener('click', item => {
    document.querySelector('.bg-verde-zap').classList.toggle('show')
    document.querySelector('.whats-popup').classList.toggle('show')
  })
  btnFechar.addEventListener('click', item => {
    document.querySelector('.bg-verde-zap').classList.toggle('show')
    document.querySelector('.whats-popup').classList.toggle('show')
  })
</script>