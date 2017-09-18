$(document).ready(function(){
	$('button[data-del]').click(function(){
	   var id = $(this).data('del');
	   
	  var answer = confirm("Вы действительно хотите удалить запись?");	
	  if(answer){
	  	location.href = "delete.php?del="+id;
	  	}
	

  });

 });

