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

                            return "" == grecaptcha.getResponse()

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

                        required: "Please enter your Contact Number",

                    },               

                    email: {

                        required: "Please Enter Your Email Address",

                        email: "Please Enter a Valid Email Address"

                    },

                    hiddenRecaptcha : {

                        required: "Please Enter Your Phone Number",

                    }       

                },      

                submitHandler: function(form) {     

                    form.submit();      

                }       

            });     

            $("#contact_us").validate({     

                rules: {        

                        

                    name: {     

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

                    name: {     

                        required: "Please Enter Your Name",     

                    },      

                    contact: {      

                        required: "Please enter your Contact Number",      

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





            





});



              

