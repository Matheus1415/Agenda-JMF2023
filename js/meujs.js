$(function(){
    //NOME FOCO E DESFOCO
    $('.nome').focus(function(){
        $('.nome').css('background-color','rgb(247, 121, 121)');
    })
    $('input').blur(function(){
        $('.nome').css('background-color','#d8d8d8  ');
    })
    //EMAIL FOCO E DESFOCO
    $('.email').focus(function(){
        $('.email').css('background-color','rgb(247, 121, 121)');
    })
    $('.email').blur(function(){
        $('.email').css('background-color','#d8d8d8  ');
    })
    //SENHA FOCO E DESFOCO
    $('.senha').focus(function(){
        $('.senha').css('background-color','rgb(247, 121, 121)  ');
    })
    $('.senha').blur(function(){
        $('.senha').css('background-color','#d8d8d8  ');
    })
    //AO DAR SUBMIT MANDA UMA MENSAGEM
    $('form').submit(function(){
        alert('Seu formulario foi enviado com sucesso!');
    })  


})