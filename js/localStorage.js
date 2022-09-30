function storeName(name){
    localStorage.setItem("name",name);
}


function logOut(){
    localStorage.removeItem("name");
    location.replace("./index.html")
}

function checkItem(){
        if(localStorage.getItem("name"))
        {
            window.location.replace("./welcome.html");
        }
        else
        {
            window.location.replace("./index.html");
        }
}












/*for ( var i = 0, len = localStorage.length; i < len; ++i ) {
    console.log( localStorage.getItem( localStorage.key( i ) ) );
  }*/