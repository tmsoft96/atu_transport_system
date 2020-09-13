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

function selectBusId(id){
    let busId = document.getElementById("busId");
    busId.value = id;
}