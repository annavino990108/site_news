$(document).ready(function(){
	var checkboxes = $("input[type='checkbox']"),
		submitButt = $("input[type='submit']");

	checkboxes.click(function() {

		if(checkboxes.is(":checked"))
			{
				document.getElementById('hide').style.display='block';
				document.getElementById('footer').style.display='none';
			}
		else
			{
				document.getElementById('hide').style.display='none';
				document.getElementById('footer').style.display='block';
			}
		});
})