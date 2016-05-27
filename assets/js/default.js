$(document).ready(function(){
     $(document).on('click', '#add-row', function(){
          var row = $(this).parent().parent();
          row.clone().appendTo(row.parent());
     });
     $(document).on('click', '#remove-row', function(){
          var row = $(this).parent().parent();
          row.remove();
     });
});