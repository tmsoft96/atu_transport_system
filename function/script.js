function openTapMyAccount(name, showTitle) {
    let tabContent = document.getElementsByClassName("tabContent");
    for (let x = 0; x < tabContent.length; ++x) {
        tabContent[x].style.display = "none";
    }
    document.getElementById(name).style.display = "block";
    let title = document.getElementById("title");
    title.innerHTML = showTitle;
}

function uploadProfilePicture(){
    let profilePic = document.getElementById("profilePic");
    let profilePictureInput = document.getElementById("profilePictureInput");
    let path = window.URL.createObjectURL(profilePictureInput.files[0])
    profilePic.src= path;
}

function selectBusId(id, name, numPlate){
    let busId = document.getElementById("busId");
    let busDisplay = document.getElementById("busSelectDisplay");
    busId.value = id;
    busDisplay.innerHTML = "Bus selected (model: " + name + ", number plate: " + numPlate + ")";
}