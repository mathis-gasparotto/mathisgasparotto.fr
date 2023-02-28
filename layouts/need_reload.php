<div class="need-reload">
  <p class="need-reload__text">Veuillez recharger la page</p>
  <button onClick="history.go(0);" class="need-reload__btn btn btn-primary">Recharger la page</button>
</div>


<?php if (!IS_MOBILE) { ?>
  <style>
    @media screen and (max-width: 1200px) {
      .need-reload {
        display: flex;
      }
      body {
        overflow: hidden;
      }
    }
  </style>
<?php } else { ?>
  <style>
    @media screen and (min-width: 1200.01px) {
      .need-reload {
        display: flex;
      }
      body {
        overflow: hidden;
      }
    }
  </style>
<?php } ?>