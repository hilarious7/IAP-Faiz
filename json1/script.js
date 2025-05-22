// let mahasiswa = {
//   nama: "Muhammad Raja Faiz",
//   nim: "2217020165",
//   prodi: "Sistem Informasi",
//   angkatan: 2020,
// };

// console.log(JSON.stringifymahasiswa);

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState === 4 && xhr.status === 200) {
//     let mahasiswa = JSON.parse(xhr.responseText);
//     console.log(mahasiswa);
//   }
// };

// xhr.open("GET", "coba.json", true);
// xhr.send();

$.getJSON("coba.json", function (data) {
  console.log("data");
});
