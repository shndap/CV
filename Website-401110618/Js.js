function confirmation(){
    
    if(confirm("Are you sure you want to send me a message?")){
        document.getElementById("output").innerHTML = 
            "Message sent successfully.";
    }else{
        document.getElementById("output").innerHTML = 
            "Message discarded.";
    }
}