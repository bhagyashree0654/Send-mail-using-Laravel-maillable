$(document).ready(function() {

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

    $.ajax({
		url: 'fetchSubject',
		type:"get",
		dataType: 'json',
		success: function(response) {
			var options = "<option value=''>--SELECT--</option>";
			if (response.dbStatus == "SUCCESS") {
				$.each(response.aaData,function(i, data) {
					options += "<option value= '"+data.sub_code+"'>"+data.sub_name+"</option>";
				});
				$("#subject").html(options);
			}
		},
		error:function(response) {
			alert('Something went wrong....');
		}
	});
    $.ajax({
		url: 'fetchTeacher',
		type:"get",
		dataType: 'json',
		success: function(response) {
			var options = "<option value=''>--SELECT--</option>";
			if (response.dbStatus == "SUCCESS") {
				$.each(response.aaData,function(i, data) {
					options += "<option value= '"+data.tcode+"'>"+data.tname+"</option>";
				});
				$("#teacher").html(options);
			}
		},
		error:function(response) {
			alert('Something went wrong....');
		}
	});


		
});
