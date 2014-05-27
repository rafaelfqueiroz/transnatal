$(document).ready(function(){
	$('.rg-mask').mask('000.000.000');
	$('.cpf-mask').mask('000.000.000-00');
	$('.phone-mask').mask('(00) 0000-0000');
	$('.zip-code-mask').mask('00000-000');	
	$('.date-mask').mask('00/00/0000');
	$('.number-mask').mask('00000000000');
	$('.double-mask').mask('0000000.00', {'reverse' : true});
	$('.plate-mask').mask('aaa-0000');
});