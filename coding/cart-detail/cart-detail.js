var images = document.getElementsByClassName("img-item");
var div = document.getElementById("puting");
for (var i = 0; i < images.length; i++) {
  var newImg = images[0].outerHTML;
  div.innerHTML = newImg;
  images[i].addEventListener("click", function () {
    newImg = document.createElement("img");
    newImg.src = this.src;
    div.appendChild(newImg);
  });
}

var wishlistShow = document.getElementById("show");
var wishlistHidden = document.getElementById("hidden");
wishlistHidden.addEventListener("click", () => {
  wishlistHidden.style.visibility = "hidden";
  wishlistShow.style.visibility = "visible";
});
wishlistShow.addEventListener("click", () => {
  wishlistShow.style.visibility = "hidden";
  wishlistHidden.style.visibility = "visible";
});

var table = document.getElementsByClassName("sac-table");
var count = 0;
var view = document.getElementById("view");
table[0].style.display = "block";
var size = table.length;
view.addEventListener("click", function () {
  while (table[count] != size) {
    table[count].style.display = "block";
    view.style.display = "none";
    count++;
  }
});
// script.js

// To access the stars
let stars = document.getElementsByClassName("star");
// let output = document.getElementById("output");

// Funtion to update rating
function gfg(n) {
  remove();
  for (let i = 0; i < n; i++) {
    if (n == 1) cls = "one";
    else if (n == 2) cls = "two";
    else if (n == 3) cls = "three";
    else if (n == 4) cls = "four";
    else if (n == 5) cls = "five";
    stars[i].className = "star " + cls;
  }
  // output.innerText = "Rating is: " + n + "/5";
  document.getElementById("output").value = n;
}
for (i = 0; i < stars.length; i++) {
  stars[i].addEventListener("click", function () {
    document.getElementById("feedback").focus();
  });
}

// To remove the pre-applied styling
function remove() {
  let i = 0;
  while (i < 5) {
    stars[i].className = "star";
    i++;
  }
}
