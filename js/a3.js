// Admin Index
function submitIndex(){
    const index1 = "{" + document.getElementById("index1").value + "}\n";
    const index2 = "{" + document.getElementById("index2").value + "}\n";

    const data2Blob = new File([index1, index2], "a3_index.txt", {
        type: "text/plain",
    });
    const blob2URL = window.URL.createObjectURL(data2Blob);

    const anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = "a3_index.txt";
    anchorTag.click();
    
}


// Admin Resume
function submitResume(){
    const resume1 = "{" + document.getElementById("resume1").value + "}\n";
    const resume2 = "{" + document.getElementById("resume2").value + "}\n";
    const resume3 = "{" + document.getElementById("resume3").value + "}\n";
    const resume4 = "{" + document.getElementById("resume4").value + "}\n";
    const resume5 = "{" + document.getElementById("resume5").value + "}\n";

    const data2Blob = new File([resume1, resume2, resume3, resume4, resume5], "a3_resume.txt", {
        type: "text/plain",
    });
    const blob2URL = window.URL.createObjectURL(data2Blob);

    const anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = "a3_resume.txt";
    anchorTag.click();

}

// Admin Projects
function submitProjects(){
    const projects = "{" + document.getElementById("projects").value + "}";

    const data2Blob = new File([projects], "a3_projects.txt", {
        type: "text/plain",
    })

    const blob2URL = window.URL.createObjectURL(data2Blob);

    const anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = "a3_projects.txt";
    anchorTag.click();
}


// Admin Contact
function readMessages(){
    var contact = document.getElementById("contact").files[0];
    var fileReader = new FileReader();
    fileReader.onload = function(fileLoadedEvent) {
        var elemHdl = document.getElementById("displayMsg");
        elemHdl.value = fileLoadedEvent.target.result;
    };
    fileReader.readAsText(contact, "UTF-8");
}

function submitContactMsg(){
    const contact1 = "{" + document.getElementById("contact1").value + "}\n";
    const contact2 = "{" + document.getElementById("contact2").value + "}\n";
    const contact3 = "{" + document.getElementById("contact3").value + "}\n";
    const contact4 = "{" + document.getElementById("contact4").value + "}\n";

    const data2Blob = new File([contact1, contact2, contact3, contact4], "a3_contact.txt", {
        type: "text/plain",
    });
    const blob2URL = window.URL.createObjectURL(data2Blob);

    const anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = "a3_contact.txt";
    anchorTag.click();

}


// Admin Social
function submitSocial(){
    const social1 = "{" + document.getElementById("social1").value + "}\n";
    const social2 = "{" + document.getElementById("social2").value + "}\n";
    const social3 = "{" + document.getElementById("social3").value + "}\n";

    const data2Blob = new File([social1, social2, social3], "a3_social.txt", {
        type: "text/plain",
    })

    const blob2URL = window.URL.createObjectURL(data2Blob);

    const anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = "a3_social.txt";
    anchorTag.click();
}


// Logout
function processLogout(){
    sessionStorage.clear;
    window.location.href = "http://localhost/Sari_40249017/admin.html";

}

// LOGIN
function processLogin(){
    const userInput = document.getElementById("username").value;
    const pwInput = document.getElementById("password").value;

    sessionStorage.setItem("user", userInput);
    sessionStorage.setItem("pw", pwInput);

    let u = sessionStorage.getItem("user");
    let p = sessionStorage.getItem("pw");


    const validUser = "Admin_User";
    const validPassword = "123Admin!";

    if ((u === validUser) && (p === validPassword)){
        window.location.href = "http://localhost/Sari_40249017/logout.html";
        sessionStorage.setItem("isLoggedIn", true);
    
        // TIME
        let date = new Date();
        sessionStorage.setItem('loginTime', date);

        sessionStorage.setItem("loginUserAgent", p);

    } else {
        document.getElementById("error").innerHTML = "Incorrect Login Information."
    }
    

}
