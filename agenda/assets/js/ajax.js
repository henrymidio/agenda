$(document).ready(function(){
              function check_compromisso(){
                    
                      var d = new Date();

                      //Formata a data que vai ser enviada na requisição  ajax
                      var month = d.getMonth()+1;
                      var day = d.getDate();
                      var hour = d.getHours();
                      var minute = d.getMinutes();

                      var output = d.getFullYear() + '-' +
                      ((''+month).length<2 ? '0' : '') + month + '-' +
                      ((''+day).length<2 ? '0' : '') + day + ' ' +
                      ((''+hour).length<2 ? '0' :'') + hour + ':' +
                      ((''+minute).length<2 ? '0' :'') + minute;

                       $.ajax({
                                url: "http://www.cardappweb.com/agenda/contatos/check_compromissos",
                                dataType : "json",
                                type: "post",
                                data: {'data': output},                               
                                success: function(msg){
                                      alert("Você tem um compromisso AGORA");
                                    },
                                 error: function (request, status, error) {
                                   //alert(status);
                                 }
                             });
                       
               }

               setInterval(function(){ check_compromisso() }, 30000);

               
            });     