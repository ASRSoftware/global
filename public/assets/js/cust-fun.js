/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('#gl-login').submit(function(e) {
    e.preventDefault();
    $.post('user/login', $('#gl-login').serializeArray(),
            function(data) {
                if (data == 1) {
                    $('#login-msg').html('login Successfuly');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else {
                    $('#login-msg').html('Username or Password Incorect');
                }               
            });
});

$('#gl-sign').submit(function(e) {
    e.preventDefault();
    $.post('user/signup', $('#gl-sign').serializeArray(),
            function(data) {
                if(data.status){
                    $('#msg-box').html('Registration Complete. Activation link is send on your email.');
                }else{
                     $('#msg-box').html('Please Field the form properly');
                }
            },'json');
});