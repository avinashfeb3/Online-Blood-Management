//contact-form
  $('document').ready(function()
{
    /* validation */
    $('form[id="contact-form"]').validate({
        rules:
        {
            name: {
                required: true,
                minlength: 3,
                maxlength:12
            },
            email: {
                  required: true,
                email: true
            },
            contact: {
                  required: true,
                minlength:10,
            },
            message: {
                required: true,
                maxlength:500,
            },
        },
        messages:
        {
            name: {
                required:"Enter a  Name",
                minlength:"Name must be greater then 3 char",
                maxlength:"Name must be less then 12 Characters",
        },
            email:{
                required: "provide a email",
                email:"Enter a Valid Email"
            },
            contact:{
                required: "provide a contact no.",
                contact:"Enter a Valid Contact NO."
            },
             message:{
                required: "type Your feedback",
                maxlength:"must be less then 500 Characters",
            },
           
        },
        submitHandler: contactForm
    });
    
     
 function contactForm(){

      var name = $('#inputName').val();
      var email = $('#inputEmail').val();
      var contact = $('#inputContact').val();
      var message = $('#inputMessage').val();
           $.ajax({
            url:"blood/contactus.php", 
            method: "POST", 
            data: {name:name, email:email, contact:contact,message:message},
            success: function(data){
               
              if(data == "1") {
                  var res= data.valueOf();
                       document.getElementById("demo").innerHTML = res;
                       document.getElementById("demo").innerHTML += "Thankyou for contacting Us, we will shortly reach you";
                        $('#inputName').val('');
                        $('#inputEmail').val('');
                        $('#inputContact').val('');
                        $('#inputMessage').val('');
                      
                           }                    
                   else if (data == "2"){
                        alert("Invalid");
                      var res= data.valueOf();
                       document.getElementById("demo").innerHTML = res;
                    document.getElementById("demo").innerHTML += "There are some error, Try next time";
                                                       }
                    else{
                      alert("try again");
                      var res= data.valueOf();
                       document.getElementById("demo").innerHTML = res;
                    }
                               }
          });
        return false;
 }
});

