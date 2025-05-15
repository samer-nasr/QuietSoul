const currentPage = window.location.pathname.split("/").pop();
const logo = document.getElementById("logo-link");

const centerPages = ["page6.html", "page7.html", "page8.html", "page9.html", "page10.html", "page11.html", "page12.html"]; // عدّلي حسب الصفحات يلي بدك اللوغو بالنص فيها

if (centerPages.includes(currentPage)) {
  logo.classList.add("logo-center");
} else {
  logo.classList.add("logo-left");
}