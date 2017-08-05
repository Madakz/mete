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
						  async: false,	
						  success: populateStan
						}); 
						
						

		//Ajax Called When You Change  standard Name
		$("#standard").change(function () 
			{

			 resetValues();	
			 
			    var data = { stan :$(this).attr('value')	};

			jQuery.ajax({
							  url: 'classification.php',
							  type: "POST",
							  dataType: "xml",
							  data:data,
							  async: false,	
							  success: populateClass
						}); 
			});
			
		//Ajax Called When You Change Type of Printer
		$("#classG").change(function () 
			{

			    var data = { 
				stan :$('#standard').val(),
				typ : $(this).attr('value')
				};
			
			});
			
		//Do What You Want With Result .......... :)
		// 	$("#classG").change(function () 
		// 	{

		// //'you select Model='+$('#standard').val()+'type='+$('#classG').val()+'And Model='+$('#number').val()
		// alert('you selected Standard Name = '+$('#standard option:selected').text()+' ,Classification Type= '+$('#classG option:selected').text()
		// );
		// 	});
			
			
						
				});

//for picking the classification id and autosuggest below input field
$(document).ready(function(){
			$("#search-box").keyup(function(){
				$.ajax({
				type: "POST",
				url: "includes/readmaterial.php",
				data:{keyword:$(this).val(),
						 clas: $('#classG').val()
						},
				beforeSend: function(){
					$("#search-box").css("background","#FFF url(images/LoaderIcon.gif) no-repeat 165px");
				},
				success: function(data){
					$("#suggesstion-box").show();
					$("#suggesstion-box").html(data);
					$("#search-box").css("background","#FFF");
				}
				});
			});
		});

		function selectCountry(val) {
		$("#search-box").val(val);
		$("#suggesstion-box").hide();
		}



		