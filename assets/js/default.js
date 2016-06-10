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
});