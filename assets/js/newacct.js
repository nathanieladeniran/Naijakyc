let newAcctBut =  document.querySelector('#newacctBut');
        newAcctBut.addEventListener('click', (e)=>{
            //let users = document.querySelector('#subAcct').value;
            //let acctType = document.querySelector('#acctType').value;
          
                newAcctBut.innerHTML = 'Creating Your Account......';    
                let regForm = document.getElementById("regform");
                const formData = new FormData(regForm);
                let regurl = 'api/middlewares/clientReg.inc';
                fetch(regurl, {
                method: "POST",
                body: formData,
                }).then((response)=>{
                return response.text();
                }).then((text)=>{
                    if(text == "Success1"){                        
                        document.querySelector('#message').innerHTML = '<div class="alert alert-info">Account created, an email has been sent to you, click the link to complete setup</div>';
                        newAcctBut.innerHTML = 'Create Account  <span class="btn-inner--icon"><i data-feather="user"></i></span>';
                    }else{
                        document.querySelector('#message').innerHTML = '<div class="alert alert-danger">Account Can not be created at the moment</div>';
                        newAcctBut.innerHTML = 'Create Account  <span class="btn-inner--icon"><i data-feather="user"></i></span>';
                    }
                
                });
        });