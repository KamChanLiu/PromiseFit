$('#save').click()
{
	console.log($('#activity').val());
	var timestring = $('#timeInput').val()+$('#time_unit').val();
	$.post('CreateWorkout.php', { userid: "1", workout: $('#activity').val(), time : timestring}, function(data){
							$('.result').html(data);
						}
					);
}
