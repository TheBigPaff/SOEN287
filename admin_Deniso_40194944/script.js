var sep="\\|";

// checks if if text contains separator
function validateInput(text){
    if(text.includes(sep)){
        alert("Input not valid. Make sure this character '" + sep + "' is not in the input.");
        return false;
    }
    
    return true;
}

function saveToTextFile(string, fileName){
    var data2Blob = new File([string], fileName, {type: "text/plain"});
    var blob2URL = window.URL.createObjectURL(data2Blob);

    /* Create a HTML anchor tag via JavaScript, and force download */

    var anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = fileName;
    anchorTag.click();
}

function readFromTextFile(fileButtonId) {
    var uploadFile = document.getElementById(fileButtonId).files[0];
    var fileReader = new FileReader();
    fileReader.onload = loadMessagesToTable;

    fileReader.readAsText(uploadFile, "UTF-8");
}

function loadMessagesToTable(fileLoadedEvent) {
    let table = document.getElementById("messagesTable").getElementsByTagName("tbody")[0];
    let content = fileLoadedEvent.target.result;

    table.innerHTML = ""; // clear all rows
    let messages = content.split(sep); // messages are split by the '\|' separator
    let messageCount = 0;
    // add rows for each message
    messages.forEach(message => {
        let row = table.insertRow();
        row.innerHTML = String.raw`<td>Message ${(messageCount++)}</td><td><textarea readonly="readonly">${message}</textarea></td>`;
    });
};

function submitIndex(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    let statement = document.getElementById("professional_statement").value;
    let biography = document.getElementById("brief_biography").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(statement) && validateInput(biography)){
        saveToTextFile(statement + sep + biography, "index_data.txt");
    }
}

function submitResume(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    let qualifications = document.getElementById("qualifications").value;
    let skill_set = document.getElementById("skill_set").value;
    let awards = document.getElementById("awards").value;
    let work_experience = document.getElementById("work_experience").value;
    let referees = document.getElementById("referees").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(qualifications) && validateInput(skill_set) && validateInput(awards) && validateInput(work_experience) && validateInput(referees)){
        saveToTextFile(qualifications + sep + skill_set + sep + awards + sep + work_experience + sep + referees, "resume_data.txt");
    }
}

function submitProjects(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    let projects = document.getElementById("projects").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(projects)){
        saveToTextFile(projects, "projects_data.txt");
    }
}

function readMessages(){
    readFromTextFile("uploadFile");
}

function submitSocial(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    let link1 = document.getElementById("link1").value;
    let link2 = document.getElementById("link2").value;
    let link3 = document.getElementById("link3").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(link1) && validateInput(link2) && validateInput(link3)){
        saveToTextFile(link1 + sep + link2 + sep + link3, "social_data.txt");
    }
}

function processLogout(){
    if(window.confirm("Are you sure you want to log out?")){
        window.sessionStorage.clear();
        alert("User logged out successfully.");
    }
}
