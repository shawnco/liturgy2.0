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
     
     $('.accordion').accordion({
          collapsible: true
     });
     
     $(document).on('change', '.type', function(){
          var target = $(this).parent().find('series');
          var request = $.post({
               url: '/liturgy2.0/edit/getSeries',
               data: 'series=' + $(this).val() + '&csrf_test_name=' + $('[name=csrf_test_name]').val(),
               dataType: 'text'
          });
          request.done(function(data){
               result = $.parseJSON(data);
               console.log(result);
               console.log(target);
               target.empty();
               target.append("<option value=''>--------</option>");
               for(r in result){
                    target.append("<option value='" + result[r].id + "'>" + result[r].name + "</option>");
               }
               
          });
     });
});