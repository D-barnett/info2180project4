function Login()
        {
            var browserlogin;
                if(window.XMLHttpRequest){
                    browserlogin=new XMLHttpRequest();
                }
                
                browserlogin.onreadystatechange=function()
                {
                         if (browserlogin.readyState==4 && browserlogin.status==200)
                         {
                                 document.body.innerHTML=browserlogin.responseText;
                         }
                 };
                 
                 browserlogin.open("GET",window.location.href = "mainscreen.html",true);
                 browserlogin.send();                
                
        }
        $('submit').onclick = function()
        {
                Login();
        };
