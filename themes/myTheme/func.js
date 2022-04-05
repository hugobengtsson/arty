function pressPlusIcon() {
  let plusIcons = document.getElementsByClassName("plusIcon");

  let list = Array.prototype.slice.call(plusIcons);

  list.forEach((icon) => {
    icon.addEventListener("click", () => {
      console.log("pressed");
      icon.style.transform = "rotate("+45+"deg)";
      let descriptionContainer = document.createElement("div");
      descriptionContainer.classList.add("description");
      let descriptionText = document.createElement("span");
      descriptionText.classList.add("text");
      let works = document.getElementById("works");
      works.appendChild(descriptionContainer);
      descriptionText.innerText = "Hello";

      descriptionContainer.append(descriptionText);
    });
  });
}



pressPlusIcon();
