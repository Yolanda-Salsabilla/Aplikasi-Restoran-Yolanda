// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// nav menu
function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
}
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

  function addToCart(itemName, qtyFieldId) {
    const quantity = parseInt(document.getElementById(qtyFieldId).value);
    if (quantity > 0) {
        const notification = document.getElementById("notification");
        notification.textContent = `Added ${quantity} ${itemName} to the cart.`;
        setTimeout(() => {
            notification.textContent = "";
        }, 2000);
    }
}
function clearForm() {
  // Mengosongkan nilai input
  document.getElementById("name").value = "";
  document.getElementById("email").value = "";
  document.getElementById("number").value = "";
  document.getElementById("message").value = "";
}