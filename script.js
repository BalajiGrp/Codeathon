let Enqname = document.getElementById("recipient-name");
let Enqemail = document.getElementById("recipient-email");
let Enqmess = document.getElementById("message-text");


function Enquiry(){
if(Enqname.value == "" || Enqemail.value == "" || Enqmess.value == ""){
    alert("All Fields are Required")
}else{
    confirm("We will connect soon")
    Enqname.value="";
    Enqemail.value="";
    Enqmess.value="";
}


}