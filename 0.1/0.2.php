<?php
$url = explode('/',$_REQUEST['url']);
$r = '';

$r .= '<ul>';

$colors = array('ffffff','9daac9','79c5ae','8b104d','146877','d9c642');
$values = array('','Your production in safe hands','Here, there, everywhere','Reduced costs, higher quality','One step solution','Get your quote now.');
$r .= '<li class="top-info"><img src="/sites/cphdot/media/logo-big.png" alt="Copenhagen Dot" title="Copenhagen Dot"/><p>www.cphdot.com | +45 26 180 202</p><p>CPH DOT / Co HCP.ESKILDSEN | Rundforbivej 209 1TH | DK-2850 Nærum</p></li>';
$r .= '<li class="top-menu">'.lnk('Handelsagentur','handel','',array('class'=>'handelLink')).lnk('StartUp','startup','',array('class'=>'startupLink')).'</li>';
/*
.lnk('kontakt','handel','',array('class'=>'kontaktLink'))

$(".kontaktLink").click(function(e){
	e.preventDefault();
	$("body").animate({"scrollTop":kontaktPos+"px"});
});
	
	if(p > th && m.is(":hidden")){m.fadeIn();}
	else if(p < th && m.is(":visible")){m.fadeOut();}
	var kontaktPos = $("#contact").offset().top;

$form = new Form('Message','','',array('class'=>'full'));
$form->uid('hidden','367');
$form->email('input',false,translate('Your email'));
$form->content('textarea',false,translate('What can we help you with?'));
$form->{'send'}('submit');
$r .= dv('','contact').dv('d2 col').$form->returnContent().xdv().dv('d2 col').xdv().'<br class="clearfloat"/>'.xdv();
*/
T::$jsfoot[] = '
var w = $(window);
var t = $(".top-info");
var th = t.outerHeight(true)-20;
var m = $(".top-menu");
m.hide();
setTimeout("init()",300);
function init(){
	window.scrollTo(0,0);
	var body = $("body");
	var trade = $(".trade");
	var handelPos = trade.offset().top;
	var tro = trade.find(".overlay");
	var startup = $(".startup");
	var sto = startup.find(".overlay");
	var startupPos = startup.offset().top;
	if(!isMobile){
		w.bind("scroll",function(e){
			var p = w.scrollTop();
			body.css("background-position",p+"px "+p*2+"px");
		});
	}
	else{
		$(".overlay").css({"margin":0});
	}
}
';
$r .= dv('','inner-content');
$r .= '<li class="trade">'.dv('overlay').'<h2>CPH DOT Handelsagentur</h2><h3>Har din virksomhed brug for at købe eller produktudvikle private label varer i Kina?</h3><p class="trade-content">'.nl2br('Hos CPH DOT har vi 6 års erfaring med at produktudvikle, source og indkøbe varer, hovedsageligt inden for interiør, brugskunst, gaveartikler og gadgets.

Vi kan hjælpe med at afdække behovet, komme med forslag til løsninger, 
designs og produkter, mens vores samarbejdspartnere i Kina og Hong Kong finder de helt rigtige leverandører.

Vi arbejder som agenter og konsulenter på dele af opgaven, eller deltager aktivt som samarbejdspartner i hele udviklings-, sourcing- og 
indkøbsprocessen.

Vores mål er at I får de rigtige produkter, til den rigtige pris, på det rette 
tidspunkt.


Kontakt venligst Hans Christian på e-mail: 
cphdot@cphdot.dk').'</p>'.xdv().'</li>';

$r .= '<li class="startup">'.dv('overlay').'<h2>CPH DOT StartUp</h2><h3>Har du ideen? Men mangler hjælp til at produktudvikle, source og indkøbe produkter i Kina og Asien.</h3><p class="startup-content">'.nl2br('Hos CPH DOT StartUp hjælper vi nystartede og små virksomheder med at produktudvikle, source og indkøbe produkter i Kina og Asien, samt afdække hvilke krav der gør sig gældende for import af produktet.

Igennem vores arbejde med de store detailkæder kan vi opnå priser og 
betingelser, som de færreste små virksomheder og iværksættere, selv kan forhandle sig frem til.

CPH DOT StartUp tilbyder igennem vores samarbejdspartnere desuden; design af indpakning, produkt foto, kataloger, markedsføring, hjælp og forslag til afsætning, samt design og drift af hjemmesider med eller uden webshop.

Vores speciale er interiør, brugskunst, gaveartikler og gadgets. 
Men vi samarbejder med mange andre virksomheder og kender også til 
tekstil, møbel og elektronik branchen. 

CPH DOT StartUp kan arbejde som konsulenter på dele af opgaven, eller deltager aktivt som samarbejdspartner i hele udviklings-, sourcing- og indkøbsprocessen.

Vores mål er at du får de rigtige produkter, til den rigtige pris, på det rette tidspunkt, uden at du selv behøver vide alt om indkøb.

For et uforpligtende tilbud, kontakt venligst Hans Christian på e-mail: 
cphdot@cphdot.dk').'</p>'.xdv().'</li>';
$r .= '</ul>';
//This is how data is displayed
$page = new T(HOST);
T::$topMenu=false;
T::$doPrintFooter=false;
T::$customCss = HOME.'sites/cphdot/0.2.css';
//T::$jsincludes[] = 'jquery.parallax-1.1.3.js';
//T::$jsincludes[] = 'cubiq-iscroll/src/iscroll-lite.js';
T::$jsincludes[] = 'jquery.parallaxSwipe.js';
T::$body[] = $r;
T::$title = 'CPH DOT ® | Production outsourcing made simple';
T::$icon = HOME.'sites/cphdot/media/cphdot.ico';
?>