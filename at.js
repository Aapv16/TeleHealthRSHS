// toggle class active
const navbarList = document.querySelector(".nav-list"); //cari elemen yang nama kelasnya navbar-list

//cari nama IDnya, lalu ketika dia di klik "onclik" sama dengan jalankan fungsi :
//navbarList.classListnya.toggle. jadi jika sebelumnya gak ada kelasnya tambahin, jika sudah ada kelasnya kurangin, jadi yang kita kasih adalah kelas "active"
//ketika humburger menunya di klik
document.querySelector("#Humburger").onclick = () => {
  navbarList.classList.toggle("active");
};

// klik di luar sidebar untuk menghilangkan navbar-list
// tolong carikan saya nama elemen yang namanya selectornya #hamburger-menu, ketika ketemu dan diklik dimanapun dihalaman maka

const hamburger = document.querySelector("#Humburger");
// ketika di klik dimanapun di halaman, kita jalankan fungsi kemudian ambil evennya
document.addEventListener("click", function (e) {
  //! = tidak sama atau bukan -> kita batasi agar di klik tidak bingung atau menimpa
  if (!hamburger.contains(e.target) && !navbarList.contains(e.target))
    //jadi selama yang kita klik bukan navbar (menu) dan bukan hamburger, maka akan ter remove
    navbarList.classList.remove("active");
});

//
const searchInput = document.getElementById("search-input");
const list = document.getElementById("list");
const listItems = list.getElementsByTagName("div");


searchInput.addEventListener("keyup", function (e) {
  const listTerm = e.target.value.toLowerCase();
  for (let i = 0; i < listItems.length; i++) {
    const text = listItems[i].textContent.toLowerCase();
    if (text.includes(listTerm)) {
      listItems[i].style.display = "block";
    } else {
      listItems[i].style.display = "none";
    }
  }
});
//
