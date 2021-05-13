$(document).ready(function() {	
		
	$.ajax({
		url: 'fetchDeptReg',
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
		
	
	$.ajax({
		url: 'fetchCourse',
		type:"get",
		dataType: 'json',
		success: function(response) {
			var options = "<option value=''>--SELECT--</option>";
			if (response.dbStatus == "SUCCESS") {
				$.each(response.aaData,function(i, data) {
					options += "<option value= '"+data.ccode+"'>"+data.cname+"</option>";
				});
				$("#course").html(options);
			}
		},
		error:function(response) {
			alert('Something went wrong....');
		}
	});
		
});
