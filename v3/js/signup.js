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

$('.phonenum').on('blur keyup',function()
{
let num=$('#numberphone').val();
var phone_pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
 
$('.error-num').hide();
if(!phone_pattern.test( num ))
{
    $('.error-num').show();
}
});