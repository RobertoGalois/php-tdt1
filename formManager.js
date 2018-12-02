function toDoOnLoad()
{
	$("#login").focus();
	$("form#connexion input[type=submit]").click(function (e) {
		e.preventDefault();
		$("#feedbackScreen").html("Connection attempt in progress...");
		$("div#feedbackScreen").load('action.php',{ login: $("#login").val(), password: $("#password").val() });
		$("#login").val("");
		$("#password").val("");
	});
}


$(function () {
	toDoOnLoad();
});
