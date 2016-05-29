$(document).ready(function(){
     $('#submit').click(function(){
          var request = $.post({
              url: 'Create/add',
              data: $('form').serialize(),
              dataType: 'text'
          });
          
     });
});