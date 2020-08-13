const checkboxes = document.querySelectorAll("input[type=checkbox]");
checkboxes.forEach((ch) => {
  if (ch.hasAttribute("checked")) {
    ch.parentNode.parentNode.classList.add("done");
  }
  ch.onclick = function () {
    this.parentNode.submit();
  };
});
