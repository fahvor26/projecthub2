// Processing Contact Form
let form = document.forms['frm_contact'];

form.addEventListener('submit', function(e){
    // prevent the form from submiting
    e.preventDefault();
    // let fname = document.forms['frm_contact']['firstname'].value;
    let username = form['uname'].value; //shorthand to the statement
    let password = form['pass'].value;
    let formdata = {
        uname : username,
        pass : password
    }

    // The two method below are for vanila JS Http Request.
    // fetch()
    // XMLHttpRequest()
    

    // Making AJAX request with JQuery
    $.ajax({
        type:'post',
        url: 'backend/process_contact.php',
        data: formdata,
        success: function (response) {
            document.getElementById('msg').innerText = response
        }
    })
    
});