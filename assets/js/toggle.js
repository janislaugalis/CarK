$("#toggleArea .accordion-body").hide();
$('#toggleArea .togglize').click(function(){
	$(this).siblings(".accordion-body").slideToggle("slow");
	return false;
});
