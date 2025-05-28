let enqBut =  document.querySelector('#enqBut');
        enqBut.addEventListener('click', (e)=>{
            document.querySelector('#message').innerHTML = '';
            let email = document.querySelector('#email').value;
            let enq = document.querySelector('#enq').value;
            if(email == ''){
                document.querySelector('#message').innerHTML = '<div class="alert alert-danger">Email Field is Empty</div>';
            }else if(enq == ''){
                document.querySelector('#message').innerHTML = '<div class="alert alert-danger">Message is Empty</div>';
            }
            else{
                enqBut.innerHTML = 'Sending your Message......';    
                let enqForm = document.getElementById("contactform");
                const formData = new FormData(enqForm);
                let regurl = 'api/middlewares/contactMail.inc';
                fetch(regurl, {
                method: "POST",
                body: formData,
                }).then((response)=>{
                return response.text();
                }).then((text)=>{
                    if(text == "1"){                        
                        document.querySelector('#message').innerHTML = '<div class="alert alert-info">Your Enquiry has been sent, you will receive a reply shortly</div>';
                        enqBut.innerHTML = 'Send Message  <span class="btn-inner--icon"><i data-feather="send">';
                    }else{
                        document.querySelector('#message').innerHTML = '<div class="alert alert-danger">Enquiry Can not be created at the moment</div>';
                        enqBut.innerHTML = 'Send Message  <span class="btn-inner--icon"><i data-feather="send">';
                    }
                
                });
            }
        });