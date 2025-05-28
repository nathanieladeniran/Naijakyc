let activateBut =  document.querySelector('#activateBut');
        activateBut.addEventListener('click', (e)=>{
            let pass = document.querySelector('#password').value;
            let cpass = document.querySelector('#cpass').value;
            if(pass != cpass){
                document.querySelector('#message').innerHTML = '<div class="alert alert-danger">Password Do Not Match</div>';
            }else{
                let loginurl = document.querySelector('#loginurl').value;
                activateBut.innerHTML = 'Creating Your Account......';    
                let activateForm = document.getElementById("activateform");
                const formData = new FormData(activateForm);
                let regurl = 'api/middlewares/activateAccount.inc';
                fetch(regurl, {
                method: "POST",
                body: formData,
                }).then((response)=>{
                return response.text();
                }).then((text)=>{
                    if(text == "Success"){                        
                        document.querySelector('#message').innerHTML = '<div class="alert alert-info">Account Activated Successfully, click to <a class="btn btn-primary" href="'+loginurl+'login">Login</a></div>';
                        activateBut.innerHTML = 'Complete Setup  <span class="btn-inner--icon"><i data-feather="user"></span>';
                    }else{
                        document.querySelector('#message').innerHTML = '<div class="alert alert-danger">Account Can not be created at the moment</div>';
                        activateBut.innerHTML = 'Complete Setup  <span class="btn-inner--icon"><i data-feather="user"></span>';
                    }
                
                });
            }
        });