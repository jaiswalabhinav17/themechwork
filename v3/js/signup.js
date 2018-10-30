$('.passwordValidation').on('blur keyup',function()
{
let rep_pass=$('#repeat_password').val();
let pass=$('#password').val();
$('.error-password').hide();
if(pass!==rep_pass)
{
    $('.error-password').show();
}
});