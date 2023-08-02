const allSideMenu = document.querySelectorAll(".side-menu.top li a");
const currentURL = window.location.href;
const $ = document.querySelector.bind(document);

function toast({ title = "", message = "", type = "info", duration = 1000 }) {
  const main = $("#toast");
  if (main) {
    const toast = document.createElement("div");

    const autoRemoveId = setTimeout(() => {
      main.removeChild(toast);
    }, duration + 1000);

    toast.onclick = function (e) {
      if (e.target.closest(".toast__close")) {
        main.removeChild(toast);
        clearTimeout(autoRemoveId);
      }
    };

    const icons = {
      success: "fas fa-check-circle",
      info: "fas fa-info-circle",
      warning: "fas fa-exclamation-circle",
      error: "fas fa-exclamation-circle",
    };
    const icon = icons[type];

    toast.classList.add("toast", `toast--${type}`);
    const delay = (duration / 1000).toFixed(2);
    toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

    toast.innerHTML = ` <div class="toast__icon">
                            <i class="${icon}"></i>
                        </div>
                        <div class="toast__body">
                            <h3 class="toast__titile">${title}</h3>
                            <p class="toast__msg">${message}</p>
                        </div>
                        <div class="toast__close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>`;
    main.appendChild(toast);
  }
}

function validateInput(input) {
  if (input.value < 0) {
    input.value = 0;
  }
}
if ($("#themDM_form")) {
  $("#themDM_form").addEventListener("submit", function (event) {
    const tendanhmuc = $('input[name = "tendanhmuc"]').value;
    const thutu = $('input[name = "thutu"]').value;
    if (!(tendanhmuc && thutu)) {
      event.preventDefault();
    }
    if (!tendanhmuc) {
      toast({
        title: "Error",
        message: " Tên danh mục không được để chống",
        duration: 3000,
        type: "error",
      });
    }
    if (!thutu) {
      toast({
        title: "Error",
        message: " Thứ tự không được để chống",
        duration: 3000,
        type: "error",
      });
    }
  });
}

if ($("#themSP_form")) {
  $("#themSP_form").addEventListener("submit", function (event) {
    const tensanpham = $('input[name = "tensanpham"]').value;
    const masp = $('input[name="masp"]').value;
    const giasp = $('input[name="giasp"]').value;
    const soluong = $('input[name="soluong"]').value;
    const hinhanh = $('input[name="hinhanh"]').value;

    if (!(tensanpham && masp && giasp && soluong && hinhanh)) {
      event.preventDefault();
    }

    if (!hinhanh) {
      toast({
        title: "Error",
        message: "Hình ảnh sản phẩm không được để chống",
        duration: 3000,
        type: "error",
      });
    }
    if (!tensanpham) {
      toast({
        title: "Error",
        message: "Tên sản phẩm không được để chống",
        duration: 3000,
        type: "error",
      });
    }
    if (!masp) {
      toast({
        title: "Error",
        message: "Mã sản phẩm không được để chống",
        duration: 3000,
        type: "error",
      });
    }
    if (!giasp) {
      toast({
        title: "Error",
        message: "Giá sản phẩm không được để chống",
        duration: 3000,
        type: "error",
      });
    }
    if (!soluong) {
      toast({
        title: "Error",
        message: "Số lượng sản phẩm không được để chống",
        duration: 3000,
        type: "error",
      });
    }
  });
}

allSideMenu.forEach((item) => {
  item.parentElement.classList.remove("active");
});

allSideMenu.forEach((item) => {
  if (item.href === currentURL) {
    item.parentElement.classList.add("active");
  }
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace("bx-x", "bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
});
