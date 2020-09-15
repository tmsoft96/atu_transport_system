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

function selectHomeSearch(id1, id2, text){
    let first = document.getElementById(id1);
    let second = document.getElementById(id2);

    first.value = text;
    second.innerHTML = text;

    let discount = document.getElementById("routeDiscount");
    let discount2 = document.getElementById("routeDiscount2");
    let amount = document.getElementById("routeAmount").value;
    let discountAmount = document.getElementById("routeDiscountInput").value;

    let totalFare = document.getElementById("routeTotalFare");
    let totalFareText = document.getElementById("routeTotalFareDisplay");
    let totalFareText2 = document.getElementById("routeTotalFareDisplay2");
    let modelTrip = document.getElementById("modelTripType");
    

    if (text == "Round Trip"){
        discount.classList.remove("invisible");
        discount2.classList.remove("invisible");
        modelTrip.innerHTML = text;
        let discountA = parseFloat(discountAmount) / 100;
        let totalAmount = parseFloat(amount) - discountA;
        totalFare.value = totalAmount;
        totalFareText.innerHTML = totalAmount;
        totalFareText2.innerHTML = totalAmount;
        console.log(totalAmount);
    } else if (text == "One Way") {
        discount.classList.add("invisible");
        discount2.classList.add("invisible");
        modelTrip.innerHTML = text;
        totalFare.value = amount;
        totalFareText.innerHTML = amount;
        totalFareText2.innerHTML = amount;
    }
}

function selectSeat(num){
    let seatText = document.getElementById("setSeatText");
    let seatText2 = document.getElementById("setSeatText2");
    let seatTextBox = document.getElementById("selectSeatBox");
    seatText2.innerHTML = num;
    seatText.innerHTML = num;
    seatTextBox.value = num;
}

function bookingHistorySelected(num, bookingId){
    let title = document.getElementById("bookingSelected");
    title.innerHTML = "Booking '" + num + "' selected";

    let printBtn =  document.getElementById("bookingPrintButton");
    let cancelBtn =  document.getElementById("bookingCancelButton");
    let editBtn =  document.getElementById("bookingEditButton");

    printBtn.disabled = false;
    cancelBtn.disabled = false;
    editBtn.disabled = false;

    document.getElementById("canelBookingInput").value = bookingId;
}