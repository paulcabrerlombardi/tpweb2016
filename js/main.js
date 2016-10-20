$(document).ready(function(){

	$('#lnkPartesbike').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=partes',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkPartesskate').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=partes_skate',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkRidersbike').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=riders',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkContacto').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=contacto',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkAdmin').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=admin',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #info", function(ev){
		ev.preventDefault();
		var formData = new FormData($("#form_subir")[0]);
		$.ajax({
			method: 'POST',
			url:'index.php?action=agregar_parte',
		    data: formData,
		    cache:false,
		    contentType: false,
		    processData: false,

			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #btn-contacto", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'index.php?action=agregar_contacto',
		    data:$("#subir_contacto").serialize(),
		    cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article .icon-cancel-circle", function(ev){
		ev.preventDefault();
		var id = $(this).attr("id_parte");
		$.ajax({
			method: 'POST',
			url:'index.php?action=borrar_parte',
		    data: {'id' : id},
		    cache:false,
			success: function(data){
				$("#"+id).remove();
			},
			error: function(){
				alert("error");
			}
		});
	});
	$('#wrap').on("click", "article #editar", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'index.php?action=editar_parte',
		    data:$("#form_editar").serialize(),
		    cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});
});