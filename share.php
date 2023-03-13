<?php 
    $linkhref = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="flex justify-center items-center w-48 md:w-full md:justify-end md:items-end gap-3 mt-2 md:mt-0 mb-2 md:mb-0 md:mt-0">
    <div class="hidden md:block">CONDIVIDI&nbsp;&nbsp;&nbsp;&nbsp;&minus;</div>          

    <a name="Condividi su Facebook" id="cfacebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=$linkhref?>&src=sdkpreparse" tabindex="0" target="_blank" rel="noopener nofollow noreferrer" class="block">
        <i class="icon-facebook"></i>
        <span class="sr-only">Condividi su Facebook</span>
    </a>
    <a name="Condividi su Whatsapp" id="cwhatsapp" href="https://wa.me/?text=<?=$linkhref?>" tabindex="0" target="_blank" rel="noopener nofollow noreferrer" class="block">
        <i class="icon-whatsapp"></i>
        <span class="sr-only">Condividi su Whatsapp</span>
    </a>
    <a name="Condividi su Twitter" id="ctwitter" href="https://twitter.com/intent/tweet?url=<?=$linkhref?>" tabindex="0" target="_blank" rel="noopener nofollow noreferrer" class="block">
        <i class="icon-twitter"></i>
        <span class="sr-only">Condividi su Twitter</span>
    </a>
    <a name="Condividi su Telegram" id="ctelegram" href="https://t.me/share/url?url=<?=$linkhref?>" tabindex="0" target="_blank" rel="noopener nofollow noreferrer" class="block">
        <i class="icon-telegram"></i>
        <span class="sr-only">Condividi su Telegram</span>
    </a> 
    <a name="Condividi via e-mail" id="cmail" class="hidden md:block" href="mailto:?subject=SHARE: Guarda il Progetto AvAntiSavoia! dell'IS Carlo Anti&body=<?=$linkhref?>" tabindex="0" target="_blank" rel="noopener nofollow noreferrer" class="block">
        <i class="icon-alternate_email"></i>
        <span class="sr-only">Condividi via email</span>
    </a> 
</div>