const btnwmodal = document.querySelectorAll("[data-toggle='modal']");
for (let i = 0; i < btnwmodal.length; i++) {
  btnwmodal[i].addEventListener("click", function () {
    let target = this.dataset.target;
    const target_el = document.getElementById(target);
    target_el.classList.add("show");
    target_el.addEventListener("click", function () {
      this.classList.remove("show");
    });
  });
}

//button close
const btnclose = document.querySelectorAll("[data-dismiss='modal']");
for (let i = 0; i < btnclose.length; i++) {
  btnclose[i].addEventListener("click", function () {
    let target_el = this.closest(".wmodal");
    target_el.classList.remove("show");
  });
}

var wmodaldialog = document.getElementsByClassName("wmodal-dialog");
var i;
for (i = 0; i < wmodaldialog.length; i++) {
  wmodaldialog[i].addEventListener("click", function () {
    event.stopPropagation();
  });
}

// modal youtube
const modalyoutube = document.getElementById("modal-youtube");
const blockyoutube = document.getElementById("w-youtube");
const btnyoutube = document.querySelectorAll("[data-toggle='youtube']");
for (let i = 0; i < btnyoutube.length; i++) {
  btnyoutube[i].addEventListener("click", function () {
    let target = this.dataset.target;
    blockyoutube.src = "";
    blockyoutube.src = target;
    // alert(target);
    modalyoutube.classList.add("show");
    modalyoutube.addEventListener("click", function () {
      this.classList.remove("show");
    });
  });
}
