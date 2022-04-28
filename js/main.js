function mainfunc() {
  /*NOCODEVIEW*/
  document.onkeydown = function (e) {
    if (e.keyCode == 123) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
      return false;
    }

    if (e.ctrlKey && e.shiftKey && e.keyCode == "C".charCodeAt(0)) {
      return false;
    }
    if (e.ctrlKey && e.keyCode == "S".charCodeAt(0)) {
      return false;
    }
  };
  var dgbt1 = document.getElementById("navbt1");
  var dgbt2 = document.getElementById("navbt2");
  var dgbt3 = document.getElementById("navbt3");
  var dgbt4 = document.getElementById("navbt4");
  var dgbt5 = document.getElementById("navbt5");
  var dgbt6 = document.getElementById("navbt6");

  var mdgbt1 = document.getElementById("mnavbt1");
  var mdgbt2 = document.getElementById("mnavbt2");
  var mdgbt3 = document.getElementById("mnavbt3");
  var mdgbt4 = document.getElementById("mnavbt4");
  var mdgbt5 = document.getElementById("mnavbt5");
  var mdgbt6 = document.getElementById("mnavbt6");

  var nbt1 = { name: "Home", path: "/index.php" };
  var nbt2 = { name: "About 4/1", path: "/About4-1.php" };
  var nbt3 = { name: "Homework", path: "/fallback.php" };
  var nbt4 = { name: "Files", path: "/Files.php" };
  var nbt5 = { name: "Project", path: "/Something.php" };
  var nbt6 = { name: "Web Master", path: "/webdev.php" };

  /*NAV PATH*/
  dgbt1.href = nbt1.path;
  dgbt2.href = nbt2.path;
  dgbt3.href = nbt3.path;
  dgbt4.href = nbt4.path;
  dgbt5.href = nbt5.path;
  dgbt6.href = nbt6.path;

  mdgbt1.href = nbt1.path;
  mdgbt2.href = nbt2.path;
  mdgbt3.href = nbt3.path;
  mdgbt4.href = nbt4.path;
  mdgbt5.href = nbt5.path;
  mdgbt6.href = nbt6.path;

  /*NAV NAME*/
  dgbt1.innerHTML = nbt1.name;
  dgbt2.innerHTML = nbt2.name;
  dgbt3.innerHTML = nbt3.name;
  dgbt4.innerHTML = nbt4.name;
  dgbt5.innerHTML = nbt5.name;
  dgbt6.innerHTML = nbt6.name;

  mdgbt1.innerHTML = nbt1.name;
  mdgbt2.innerHTML = nbt2.name;
  mdgbt3.innerHTML = nbt3.name;
  mdgbt4.innerHTML = nbt4.name;
  mdgbt5.innerHTML = nbt5.name;
  mdgbt6.innerHTML = nbt6.name;
}
