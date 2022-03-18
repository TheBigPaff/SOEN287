sep="\\|";

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

function readFromTextFile(fileButtonId, displayWinId) {
    var uploadFile = document.getElementById(fileButtonId).files[0];
    var fileReader = new FileReader();
    fileReader.onload = function(fileLoadedEvent) {
        var elemHdl = document.getElementById(displayWinId);
        elemHdl.value = fileLoadedEvent.target.result;
    };

    fileReader.readAsText(uploadFile, "UTF-8");
}

function submitIndex(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    statement = document.getElementById("professional_statement").value;
    biography = document.getElementById("brief_biography").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(statement) && validateInput(biography)){
        saveToTextFile(statement + sep + biography, "index_data.txt");
    }
}

function submitResume(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    qualifications = document.getElementById("qualifications").value;
    skill_set = document.getElementById("skill_set").value;
    awards = document.getElementById("awards").value;
    work_experience = document.getElementById("work_experience").value;
    referees = document.getElementById("referees").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(qualifications) && validateInput(skill_set) && validateInput(awards) && validateInput(work_experience) && validateInput(referees)){
        saveToTextFile(qualifications + sep + skill_set + sep + awards + sep + work_experience + sep + referees, "resume_data.txt");
    }
}

function submitProjects(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    projects = document.getElementById("projects").value;

    // "\|" is the separator, we need to check if there are any.
    if(validateInput(projects)){
        saveToTextFile(projects, "projects_data.txt");
    }
}

function readMessages(){
    readFromTextFile("uploadFile", "message");
}

function submitSocial(){
    // copy contents of both textarea and store them in one or more txt files on local computer
    link1 = document.getElementById("link1").value;
    link2 = document.getElementById("link2").value;
    link3 = document.getElementById("link3").value;

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
