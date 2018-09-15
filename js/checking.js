
$('#status').change(function(){

	if ($(this).prop('checked')) {
		$('#hidden_stat').val('Enable');

	} else{
		$('#hidden_stat').val('Disabled');
	}
});

$('#insert').on('submit', function(){
	event.preventDefault();

	if ('#uid_first').val() == '' {

		alert('Oops');
		return false;

	}else{
		var form_data =$(this).serialize();
		$.ajax({
			url:"../pages/checking.php",
			method:"POST",
			data:form_data,
			success:function(data) {
				if (data == 'done') {
					$('#insert')[0].reset();
					$('#status').bootstrapToggle('on');
					alert('data');
				}
			}
		})
	}
});