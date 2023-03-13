const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById("title").innerHTML = myObj.title;
  document.getElementById("description-place").innerHTML = myObj.description;
  //informazioni localizzazione luogo
  // document.getElementById("title-prev").innerHTML = myObj.previous["title"];
  // document.getElementById("previous").setAttribute("href", myObj.previous["link"]);
  // //informazioni scheda successiva
  // document.getElementById("title-next").innerHTML = myObj.next["title"];
  // document.getElementById("next").setAttribute("href", myObj.next["link"]);
}
xmlhttp.open("GET", "./video/custoza/1.json", true);
xmlhttp.send();