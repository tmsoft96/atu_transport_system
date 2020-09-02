function openTapMyAccount(name, showTitle) {
    let tabContent = document.getElementsByClassName("tabContent");
    for (let x = 0; x < tabContent.length; ++x) {
        tabContent[x].style.display = "none";
    }
    document.getElementById(name).style.display = "block";
    let title = document.getElementById("title");
    title.innerHTML = showTitle;
}