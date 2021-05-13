$(document).ready(function() {

	
	$.ajax({
		url: 'fetchMentor',
		type:"get",
		dataType: 'json',
		success: function(response) {
			var options = "<option value=''>--SELECT--</option>";
			if (response.dbStatus == "SUCCESS") {
				$.each(response.aaData,function(i, data) {
					options += "<option value= '"+data.tcode+"'>"+data.tname+"</option>";
				});
				$("#selMentor").html(options);
			}
		},
		error:function(response) {
			alert('Something went wrong....');
		}
	});
		
	
	$.ajax({
		url: 'fetchBatch',
		type:"get",
		dataType: 'json',
		success: function(response) {
			var options = "<option value=''>--SELECT--</option>";
			if (response.dbStatus == "SUCCESS") {
				$.each(response.aaData,function(i, data) {
					options += "<option value= '"+data.bcode+"'>"+data.bname+"</option>";
				});
				$("#admsnBatch").html(options);
			}
		},
		error:function(response) {
			alert('Something went wrong....');
		}
	});

	$.ajax({
		url: 'fetchDepartment',
		type:"get",
		dataType: 'json',
		success: function(response) {
			var options = "<option value=''>--SELECT--</option>";
			if (response.dbStatus == "SUCCESS") {
				$.each(response.aaData,function(i, data) {
					options += "<option value= '"+data.deptcode+"'>"+data.deptname+"</option>";
				});
				$("#department").html(options);
			}
		},
		error:function(response) {
			alert('Something went wrong....');
		}
	});
		
});

