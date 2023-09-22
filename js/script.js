document.querySelector('.abrir-menu').onclick = function (){
  document.documentElement. classList.add ('menu-ativo');
}

document.querySelector('.menu').onclick = function () {
  document.documentElement. classList.remove ('menu');
}




function formWhats(){

    var form = document.getElementById ('formContato')
    var nome = '*Nome: *' + document.getElementById ('nome').value;
    var email =  '*email: *' + document.getElementById ('email').value;
     var tel = document.getElementById('tel').value;
     var mens =  '*mensagens: *' + document.getElementById ('mens').value;

     var agencia = '*Agencia DREAM DEVS*';
     var assunto ='mensagem do site!'

     

     var numFone = '5511996383812'
     var quebraDeLinha = '%0A'


    if(tel == ''){
      alert ("o campo do celular é obrigatorio");
      return;
    }

    else{
       tel = '*Fone: *' +document.getElementById ('tel').value;
    }

   
   window.open('https://api.whatsapp.com/send?phone=' + 
   numFone + '&text='+
   assunto + ' - ' + agencia + quebraDeLinha + quebraDeLinha +
   nome + quebraDeLinha + 
   email + quebraDeLinha +
   tel + quebraDeLinha +
   mens, '_blank') 
  

   form.reset();

  }