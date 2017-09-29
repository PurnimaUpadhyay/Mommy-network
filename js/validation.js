// Wait for the DOM to be ready
$(function() {
             function recaptchaCallback() {
                $("#hiddenRecaptcha").valid()
            }

            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
           


            $("#contact").validate({
                ignore: ".ignore",

                rules: {
                
                    fname: {
                        required: true,

                        
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    fphone : {
                        required: true,                        
                    },
                    age:{
                        required: true

                    },
                    hiddenRecaptcha: {
                         required: function() {
                             if (grecaptcha.getResponse() == '') {
                                 return true;
                             } else {
                                 return false;
                             }
                         }
                     }

                    
                },
                messages: {

                    fname: {
                        required: "Please Enter Your Name",
                    },
                    age: {
                        required: "Please Enter Your Child's Age",
                    },
                    fphone : {
                        required: "Please Enter  Your Contact Number",
                    },               
                    email: {
                        required: "Please Enter Your Email Address",
                        email: "Please Enter a Valid Email Address"
                    },
                    hiddenRecaptcha : {
                        required: "Please select Captch",
                    }       
                },      
                submitHandler: function(form) {     
                    form.submit();      
                }       
            });     
            $("#contact_us").validate({     
                rules: {        
                        
                    lname: {     
                        required: true,         
                    },      
                    contact: {      
                        required: true,         
                    },      
                    message: {      
                       required: true,      
                    },      
                    email: {        
                        required: true,     
                        email: true     
                    }       
                    
                },      
                messages: {     
                    lname: {     
                        required: "Please Enter Your Name",     
                    },      
                    contact: {      
                        required: "Please Enter  Your Contact Number",      
                    },      
                    message : {     
                        required: "Please Enter Message",       
                    },                      
                    email: {        
                        required: "Please Enter Your Email Address",        
                        email: "Please Enter a Valid Email Address"
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

            subscribe

            $("#subscribe").validate({     
                rules: {

                    email: {        
                        required: true,     
                        email: true     
                    }       
                    
                },      
                messages: {     
                                         
                    email: {        
                        required: "Please Enter Your Email Address",        
                        email: "Please Enter a Valid Email Address"
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });


            


});

              
