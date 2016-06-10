function seriesDropdown(target){
     var request = $.post({
          url: '/liturgy2.0/edit/getSeries',
          data: 'series=' + target.val() + '&csrf_test_name=' + $('[name=csrf_test_name]').val(),
          dataType: 'text'
     });
     request.done(function(data){
          result = $.parseJSON(data);
          target = target.parent().find('#series');
          target.empty();
          target.append("<option value=''>--------</option>");
          for(r in result){
               target.append("<option value='" + result[r].id + "'>" + result[r].name + "</option>");
          }

     });     
}


$(document).ready(function(){
     $(document).on('click', '#add-row', function(){
          var row = $(this).parent().parent();
          var clone = row.clone();
          var index = parseInt($('.office-name').last().prop('name').match(/[0-9]+/g));
          clone.find('.office-name').prop('name', 'scheme[' + (index + 1) + '][name]');
          
          // Replace the name for all the type dropdowns.
          clone.find('.type, .series, .number').each(function(i){
               var start = $(this).prop('name').indexOf(']');
               $(this).prop('name', 'scheme[' + (index + 1) + $(this).prop('name').substring(start));
          });
          clone.insertBefore('#button-row');          
     });
     
     $(document).on('click', '#remove-row', function(){
          var row = $(this).parent().parent();
          row.remove();
     });
     
     $(document).on('click', '#add-element', function(){
          var row = $(this).parent();
          var prop = row.parent().find('p:last').find('.type').prop('name');
          var clone = row.clone();
          
          // Update the last number of each dropdown and input
          clone.find('.type, .series, .number').each(function(i){
               var index = parseInt(prop.substring(prop.lastIndexOf('[') + 1, prop.length - 1));
               var name = $(this).prop('name');
               var newName = name.substring(0, name.lastIndexOf('[') + 1);
               $(this).prop('name', newName + (index + 1) + ']');
          });
          
          row.parent().append(clone);
          $('.accordion').accordion('refresh');
     });
     
     $(document).on('click', '#remove-element', function(){
          var row = $(this).parent();
          row.remove();
     });
     
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
          seriesDropdown($(this).parent().find('#series'));
     });
});