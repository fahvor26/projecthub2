// Processing Contact Form
// let form = document.forms['frm_contact'];

// form.addEventListener('submit', function(e){
//     // prevent the form from submiting
//     e.preventDefault();
//     // let fname = document.forms['frm_contact']['firstname'].value;
//     let username = form['uname'].value; //shorthand to the statement
//     let password = form['pass'].value;
//     let formdata = {
//         uname : username,
//         pass : password
//     }

//     // The two method below are for vanila JS Http Request.
//     // fetch()
//     // XMLHttpRequest()
    

//     // Making AJAX request with JQuery
//     $.ajax({
//         type:'post',
//         url: 'backend/process_contact.php',
//         data: formdata,
//         success: function (response) {
//             document.getElementById('msg').innerText = response
//         }
//     })
    
// });

// Using JQuery
$("#pass").on('keyup', function(){
    $pass = $(this).val();
    
    if ($pass.length <= 20) {
        $('#progress').css({
            'width' : ($pass.length * 5) + '%'
        })
    }

    if ($pass.length <= 4) {
        $('#progress').css({
            'background-color' : 'red'
        })
    } else if($pass.length <= 8){
        $('#progress').css({
            'background-color' : 'orange'
        })
    } else {
        $('#progress').css({
            'background-color' : 'green'
        })
    }
})

$('form[name=frm_contact]').on('submit', function(e) {
    e.preventDefault();
    let formdata = {
        username : $('#uname').val(), // Using the ID to reference the HTML Element
        phone : $('input[name=phone]').val(), // Using the 'name' attribute to reference the HTML Element
        email : $('#email').val(),
        subject : $('#subject').val(),
        message : $('#msg').val(),
    }

    // Using the ajax post() method
    // $.post('backend/process_contact.php', formdata, function(a){
    //     console.log(a);
    // });

    $.ajax({
        type:'post',
        url: 'backend/process_contact.ph',
        data: formdata,
        success: function(response){

        },
        error: function(xhr, status, message){
            console.log(xhr.statusText);
        },
        beforeSend: function (){
            $('#picons').html(`<i class="fa fa-spinner fa-spin"></i>`);
        },
        complete: function(){
            $('#picons').html(`<i class="fa fa-paper-plane"></i>`);
        }
    })

})