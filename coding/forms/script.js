let hidden = document.getElementById("hidden");
let show = document.getElementById("show");
let showTooltip = document.getElementById("showTooltip");
let hideTooltip = document.getElementById("hideTooltip");

hidden.addEventListener("click", () => {
  var pass = document.getElementById("password");
  if (pass.value != "") {
    hidden.style.visibility = "hidden";
    show.style.visibility = "visible";
    pass.type = "Text";
  } else {
    alert("please enter your password");
    pass.focus();
  }
});
hidden.addEventListener("mouseover", () => {
  var pass = document.getElementById("password");
  if (pass.value != "") {
    showTooltip.style.visibility = "visible";
  }
});
hidden.addEventListener("mouseleave", () => {
  showTooltip.style.visibility = "hidden";
});
show.addEventListener("click", () => {
  show.style.visibility = "hidden";
  hidden.style.visibility = "visible";
  document.getElementById("password").type = "Password";
});
show.addEventListener("mouseover", () => {
  hideTooltip.style.visibility = "visible";
});
show.addEventListener("mouseleave", () => {
  hideTooltip.style.visibility = "hidden";
});
