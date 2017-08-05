jQuery().ready(function($){

			$('#loading')
			    .hide()  // hide it initially
			    .ajaxStart(function() {
			        $(this).show();
			    })
			    .ajaxStop(function() {
			        $(this).hide();
			    })
			;



			// Ajax Called When Page is Load/Ready (Load standard)
			jQuery.ajax({
							  url: 'standard.php',
							  global:false,
							  type: "POST",
							  dataType: "xml",
							  async: true,	
							  success: populateStan
							}); 
							
							

			//Ajax Called When You Change  stanufaturer
			$("#standard").change(function (env) 
				
				{
				 resetValues();	
				 	
				    var data = { stan :$('#standard').val()	};
				    //console.log(data);
				jQuery.ajax({
								  url: 'classification.php',
								  type: "POST",
								  dataType: "xml",
								  data:data,
								  async: true,	
								  success: populateClass
							}); 
				});
				
			//Ajax Called When You Change Type of Printer
			$("#classG").change(function () 
				{

				    var data = { 
					stan :$('#standard').val(),
					typ : $('#classG').val()
					};
				jQuery.ajax({
								  url: 'number.php',
								  type: "POST",
								  dataType: "xml",
								  data:data,
								  async: true,	
								  success: populateNumber
							}); 
				});
				
			//Do What You Want With Result .......... :)
			// 	$("#number").change(function () 
			// 	{

			// //'you select Model='+$('#standard').val()+'type='+$('#classG').val()+'And Model='+$('#number').val()
			// alert('you selected Standard Name = '+$('#standard option:selected').text()+' ,Classification Type= '+$('#classG option:selected').text()+' And Number Name = '+$('#number option:selected').text()
			// );
			// 	});
				
				
							
			});	