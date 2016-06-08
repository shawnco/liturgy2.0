$(document).ready(function(){
     $(document).on('click', '#add-row', function(){
          var row = $(this).parent().parent();
          row.clone().insertBefore('#button-row');
     });
     $(document).on('click', '#remove-row', function(){
          var row = $(this).parent().parent();
          row.remove();
     });
     
     $(document).on('click', '#add-element', function(){
          var row = $(this).parent();
          row.clone().appendTo(row.parent());
          $('.accordion').accordion('refresh');
     });
     
     $(document).on('click', '#remove-element', function(){
          var row = $(this).parent();
          row.remove();
     });
});