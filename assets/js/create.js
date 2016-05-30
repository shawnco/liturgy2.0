$(document).ready(function(){
     $('#submit').click(function(){
          var request = $.post({
              url: 'add',
              data: $('form').serialize() + '&csrf_test_name=' + $('[name=csrf_test_name]').val(),
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