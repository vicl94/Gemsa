/*!
 *  JS | DISEÑO E INTERACCIONES DE LA INTERFAZ
 */

$(document).ready(function() {
//START
		
  $('[data-toggle=offcanvas]').click(function() { 	// Left-Slide Navbar
    $('.row-offcanvas').toggleClass('active');		//
    $('.showhide').toggle();						//
  });												//

/*!
 *  PROFILE
 */

$('#profile_name_edit').click(function(){ // EDIT USERNAME BUTTON
	$("#profile_name").prop('disabled', false);
	$("#profile_name_edit").hide();
	$("#profile_name_submit").show();
});
$('#profile_password_edit').click(function(){ // EDIT PASSWORD BUTTON
	$("#profile_password").prop('disabled', false).val('');
	$("#profile_password_edit").hide();
	$("#profile_password_new_label").show();
	$("#profile_password_new").show();
	$("#profile_password_confirm_label").show();
	$("#profile_password_confirm").show();

	$("#profile_password_submit").show();

});
/* 
* STORE
*/



//END
});


