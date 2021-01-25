
$(document).ready(function(){
    //Add New
    $(document).on('click', '#addnew', function(){
        if ($('#name').val()==""){
            alert('Please input data first');
        }
        else{
        $name=$('#name').val();
        $email=$('#email').val();		
        $contactno=$('#contactno').val();		
        $username=$('#username').val();			
        $password=$('#password').val();				
            $.ajax({
                type: "POST",
                url: "function/admin/addnew.php",
                data: {
                    name: $name,
                    email: $email,
                    contactno: $contactno,
                    username: $username,
                    password: $password,
                    add: 1,
                },
                success: function(){
                    // showUser();
                    alert("Successfully Save");
                    window.location='./admin.php';
                }
            });
        }
        
    });

});

