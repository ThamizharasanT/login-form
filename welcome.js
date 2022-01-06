$('.proceed-btn').click(function(e) {
    e.preventDefault();
    var email = document.getElementById('email').value;
    console.log('clicked');
    var details = {
        'email': email,
    };

    if (email != '') {
        $.ajax({
            type:'POST',
            url: 'home_select.php',
            data: details,
            success: function(datas) {
                if (datas == "success") {
                    window.location.href = 'ui_login.php';
                } else {
               $('#msg').html(datas);

                }
            }

        });
    }

});