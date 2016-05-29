$(document).ready(function(){
     $('#submit').click(function(){
          var request = $.post({
              url: 'create/add',
              data: $('form').serialize(),
              dataType: 'text'
          });
          request.done(function(data){
               console.log(data);
               var result = $.parseJSON(data);
               $('#message').addClass(result.type);
               $('#message').html(result.message);
          });
     });
});