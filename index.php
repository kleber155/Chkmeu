<?php error_reporting(1); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Site</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: black;
            color: #00ff00;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
            margin-top: 100px;
        }

        .button {
            background-color: black;
            color: #00ff00;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
    <script>
        window.onload = function() {
            var modal = document.getElementById('modal');
            modal.style.display = 'block';
        }

        function hideModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
</head>
<body>
    <div id="modal" class="modal">
        <div class="modal-content">
            <p style="color: #00ff00;">
                <img src="use.fontawesome.com/releases/v5.5.0/css/logo.png" alt="Logo" style="width: 50px; height: 50px;">
                Esse chk é vendido somente por
                                <img src="use.fontawesome.com/releases/v5.5.0/css/logo.png" alt="Logo" style="width: 50px; height: 50px;">
@KW_SystemDanger, evite looters.
            </p>
            <button class="button" onclick="hideModal()">PROSSEGUIR</button>
        </div>
    </div>

    <!-- Restante do conteúdo do site -->
</body>
</html>


<html>
<head>
  <title>Cronômetro em Contagem Regressiva</title>
  <style>
    .badge {
      background-color: #343a40;
      color: #00ff00;
      padding: 10px;
      border-radius: 4px;
    }

    /* Estilos do popup */
    .popup {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      display: none;
    }

    .popup-content {
      background-color: black;
      color: #00ff00;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    .popup button {
      background-color: black;
      color: green;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1 class="badge" id="countdown"></h1>

  <!-- Popup -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <button onclick="reloadAndOpenUrl()">RECARREGUE</button>
    </div>
  </div>

  <script>
    var countDownDate = new Date("June 25, 2023 04:38:00").getTime();

    var countdown = setInterval(function() {
      var now = new Date().getTime();
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      var countdownText = days + "d " + hours + "h " + minutes + "m " + seconds + "s";

      if (distance < 0) {
        clearInterval(countdown);
        countdownText = "Sua diária acabou!";
        showPopup();
      }

      document.getElementById("countdown").innerHTML = countdownText;
    }, 1000);

    function showPopup() {
      document.getElementById("popup").style.display = "flex";
    }

    function reloadAndOpenUrl() {
      window.open("https://t.me/kw_systemdanger", "_blank"); // Insira a URL do site para abrir em uma nova janela
            window.location.reload();

    }
  </script>
</body>
</html>





  <html lang="pt-br">
  

<!-- Mirrored from / by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Mar 2021 19:07:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/icon.html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SystemDanger</title>
              <link rel="icon" type="image/png" href="foto1.html">
    <link rel="stylesheet" href="use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="assets/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/stylee209e209.css?v=1.0.0" rel="stylesheet" />
    <link href="assets/demo.css" rel="stylesheet" />
  </head>
  <body>
	<div class="col-md-11 mt-4" style="margin: auto; ">
      <div class="row">
        <div class="col-md-8">
          <div class="">
            <div class="card-body text-center">
              <h4 class="title mb-2"style="color: #00FF00;"> GG ALL BINS <br>
              SYSTEMDANGER</h4>
              <textarea style="height: 8.06rem; color: #00ff00;" class="form-control text-center form-checker mb-2" placeholder="Insira Sua Lista (999)"></textarea>
              <button class="btn-play btn-dark" style="width: 49%; float: left; color: #00ff00;"><i class="fa fa-play"></i> INICIAR</button>

              <button class=" btn-stop btn-dark" style="width: 49%; float: right; color: #00ff00;" disabled><i class="fa fa-stop"></i> PARAR</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-body">
              <h5 class="title"style="color: #00FF00;"><i class="fa fa-check"></i> Aprovadas:<span class="badge badge-dark float-right aprovadas"style="color: #00FF00;">0</span></h5>

              <h5 class="title"style="color: #00FF00;"><i class="fa fa-times"></i> Reprovadas:<span class="badge badge-dark float-right reprovadas"style="color: #00FF00;">0</span></h5>

              <h5 class="title"style="color: #00FF00;"><i class="fa fa-fire"></i> Retestes:<span class="badge badge-dark float-right retestes"style="color: #00FF00;">0</span></h5>

              <h5 class="title"style="color: #00FF00;"><i class="fa fa-sync-alt"></i> Testadas:<span class="badge badge-dark float-right testadas"style="color: #00FF00;">0</span></h5>

              <h5 class="title mb-0"style="color: #00FF00;"><i class="fa fa-share-square"></i> Carregadas:<span class="badge badge-dark float-right carregadas"style="color: #00FF00;">0</span></h5><br>

              <h5 class="title mb-0"style="color: #00FF00;"><i class="fa fa-user"></i> USER:<span class="badge badge-dark float-right "style="color: #00FF00;">KW_SystemDanger</span></h5><br>


            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="">
            <div class="card-body">
              <div class="float-right">
                <button type="show" class=" btn-dark btn-sm show-lives"><i class="fa fa-eye-slash"style="color: #00FF00;"></i></button>
                <button class="btn-dark btn-sm btn-copy"><i class="fa fa-copy"style="color: #00FF00;"></i></button>
              </div>
              <h4 class="title mb-1"style="color: #00FF00;"><i class="fa fa-check"style="color: #00FF00;"></i> APROVADAS</h4>
              <div id='lista_aprovadas'></div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="">
            <div class="card-body">
              <div class="float-right">
                <button type='hidden' class="btn-dark btn-sm show-dies"><i class="fa fa-eye"style="color: #00FF00;"></i></button>
                <button class="btn-dark btn-sm btn-trash"><i class="fa fa-trash"style="color: #00FF00;"></i></button>
              </div>
              <h4 class="title mb-1"style="color: #00FF00;"><i class="fa fa-times"style="color: #00FF00;"></i> REPROVADAS</h4>
              <div style='display: none;' id='lista_reprovadas'></div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="">
            <div class="card-body">
              <div class="float-right">
                <button type='hidden' class="btn-dark btn-sm show-retest"><i class="fa fa-eye"style="color: #00FF00;"></i></button>
                <button class="btn-dark btn-sm btn-fire"><i class="fa fa-trash"style="color: #00FF00;"></i></button>
              </div>
              <h4 class="title mb-1"style="color: #00FF00;"><i class="fa fa-fire"style="color: #00FF00;"></i> RETESTES</h4>
              <div style='display: none;' id='lista_retestes'></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="assets/jquery.min.js" type="text/javascript"></script>

<script>
$(document).ready(function() {

    $('.show-lives').click(function() {
        var type = $(this).attr('type');
        $('#lista_aprovadas').slideToggle();

        if (type == 'show') {
            $(this).html('<i class="fa fa-eye-slash"style="color: #00FF00;"></i>');
            $(this).attr('type', 'hidden');
        } else {
            $(this).html('<i class="fa fa-eye"style="color: #00FF00;"></i>');
            $(this).attr('type', 'show');
        }
    });

    $('.show-retest').click(function() {
        var type = $(this).attr('type');
        $('#lista_retestes').slideToggle();

        if (type == 'show') {
            $(this).html('<i class="fa fa-eye-slash"style="color: #00FF00;"></i>');
            $(this).attr('type', 'hidden');
        } else {
            $(this).html('<i class="fa fa-eye"style="color: #00FF00;"></i>');
            $(this).attr('type', 'show');
        }
    });

    $('.btn-fire').click(function() {
      Swal.fire({
        title: 'Retest Limpas.', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
      });
      $('#lista_retestes').text('');
    });

    $('.show-dies').click(function() {
      var type = $(this).attr('type');
      $('#lista_reprovadas').slideToggle();
      if (type == 'show') {
        $(this).html('<i class="fa fa-eye"style="color: #00FF00;"></i>');
        $(this).attr('type', 'hidden');
      } else {
        $(this).html('<i class="fa fa-eye-slash"style="color: #00FF00;"></i>');
        $(this).attr('type', 'show');
      }
    });

    $('.btn-trash').click(function() {
      Swal.fire({
        title: 'Dies Limpas.', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
      });
      $('#lista_reprovadas').text('');
    });

    $('.btn-copy').click(function() {
      Swal.fire({
        title: 'Lives Copiadas!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
      });
      var lista_lives = document.getElementById('lista_aprovadas').innerText;
      var textarea = document.createElement("textarea");
      textarea.value = lista_lives;
      document.body.appendChild(textarea);
      textarea.select();
      document.execCommand('copy'); document.body.removeChild(textarea);
    });

    $('.btn-play').click(function() {
      new Audio('use.fontawesome.com/releases/v5.5.0/css/sons/start.mp3').play();
      var lista = $('.form-checker').val().trim();
      var array = lista.split('\n');
      var retest = 0
      var lives = 0
      var dies = 0
      var testadas = 0
      var txt = '';

      if (!lista) {
        Swal.fire({
          title: 'Erro: Lista Vazia!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
        });
        return false;
      }

      Swal.fire({
        title: 'Teste Iniciado!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
      });

      var line = array.filter(function(value) {
        if (value.trim() !== "") {
          txt += value.trim() + '\n';
          return value.trim();
        }
      });

      var total = line.length;

      $('.form-checker').val(txt.trim());

      if (total > 1000) {
        Swal.fire({
          title: 'Limite de Linhas Exedido!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
        });
        return false;
      }

      $('.carregadas').text(total);
      $('.btn-play').attr('disabled', true);
      $('.btn-stop').attr('disabled', false);

      line.forEach(function(data) {
        var callBack = $.ajax({
          url: 'api.php?lista=' + data,
          success: function(retorno) {

            if(retorno.indexOf("Aprovada") >= 0) {

              $('#saldoCount').html($('#saldoCount').html() - 1)

              $('#lista_aprovadas').append(retorno);
              removelinha();
              new Audio('use.fontawesome.com/releases/v5.5.0/css/sons/live.mp3').play();
              lives = lives + 1;

            } else if (retorno.indexOf("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reteste<")){

              $('#lista_reprovadas').append(retorno);
              removelinha();
              dies = dies + 1;

            } else {

              $('#lista_retestes').append(retorno);
              removelinha();
              retest = retest + 1;
              
            }

            testadas = lives + dies + retest;
            $('.aprovadas').text(lives);
            $('.reprovadas').text(dies);
            $('.retestes').text(retest);
            $('.testadas').text(testadas);

            if (testadas == total) {
             new Audio('use.fontawesome.com/releases/v5.5.0/css/sons/fim.mp3').play();

              Swal.fire({
                title: 'Teste Finalizado!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
              });
              $('.btn-play').attr('disabled', false);
              $('.btn-stop').attr('disabled', true);
            }
          }
        });
        $('.btn-stop').click(function() {
          Swal.fire({
            title: 'Teste Parado!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000
          });
          $('.btn-play').attr('disabled', false);
          $('.btn-stop').attr('disabled', true);
          callBack.abort();
          return false;
        });
      });
    });
});

function removelinha() {
    var lines = $('.form-checker').val().split('\n');
    lines.splice(0, 1);
    $('.form-checker').val(lines.join("\n"));
}

</script>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background: black;
  background-image: radial-gradient(#00ff00 1%, transparent 6%);
  background-size: 10px 10px;
  height: 100vh;
  animation: hypnotize 1s infinite linear;
}

@keyframes hypnotize {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 10px 10px;
  }
}
</style>
</head>
<body>
</body>
</html>

