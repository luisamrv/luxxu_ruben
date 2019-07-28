$(window).on("load", function() {

    // process the form
    $('form.form-horizontal').submit(function(event) {

        $('form.form-horizontal').removeClass('has-error'); 
        $('form.form-horizontal .help-block').remove(); 
        $('form.form-horizontal .alert-success').remove();
        
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name'             : $('input[name=inputName]').val(),
            'email'             : $('input[name=inputEmail]').val(),
            'ebook'              : $('input[name=inputEbook]').val(),
            'country'              : $('select[name=inputCountry]').val()
        };
        console.log(formData); 

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '/includes/process/process-product-ebook-download.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                //console.log(data); 

                // here we will handle errors and validation messages
                if ( ! data.success) {
                    
                    // handle errors for name ---------------
                    // if (data.errors.name) {
                    //     $('form.form-horizontal').addClass('has-error'); // add the error class to show red input
                    //     $('form.form-horizontal').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
                    // }

                    // handle errors for email ---------------
                    if (data.errors.email) {
                        $('form.form-horizontal').addClass('has-error'); // add the error class to show red input
                        $('form.form-horizontal').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
                    }

                } else {

                    var contentType ="application/x-www-form-urlencoded; charset=utf-8";

                    if(window.XDomainRequest)
                        contentType = "text/plain";

                    $.ajax({
                        url:"http://webuzz.com.pt/subscribers_get/post_ebooks.php",
                        data:{
                            name: $('input[name=inputName]').val(),
                            email: $('input[name=inputEmail]').val(),
                            nome_ebook: $('input[name=inputEbook]').val(),
                            nome_country: $('input[name=inputCountry]').val(),
                            site: 'LX',
                            marca: 'Luxxu',
                            url: $('#ebook-form form input[name=origin]').val(),
                            origin: window.location.href,

                            //PREVENT CSRF ATTACKS
                            token_webuzz : 'g2zAsJ8NrvZHmdCuvydCWoGWNjYRsr9jYbPpDIqf',
                        },
                        type:"POST",
                        dataType:"json",   
                        contentType:contentType,
                        success:function(data)
                        {
                            if( data=='success'){

                            }
                        }

                    });

                    // ALL GOOD! just show the success message!
                    $('form.form-horizontal').append('<div class="alert alert-success">' + data.message + '</div>');

                    // usually after form submission, you'll want to redirect
                    // window.location = '/thank-you'; // redirect a user to another page

                }
            })

            // using the fail promise callback
            .fail(function(data) {

                // show any errors
                // best to remove for production
                console.log(data);
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});