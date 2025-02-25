const tilt = $(".js-tilt").tilt();
document.querySelectorAll(".color-cont").forEach((div) => {
  div.addEventListener("click", () => {
    const hexValue = div.getAttribute("data-hex");
    navigator.clipboard
      .writeText(hexValue)
      .then(() => {
        alert(`Colore copiato: ${hexValue}`);
      })
      .catch((err) => {
        console.error("Errore durante la copia nella clipboard:", err);
      });
  });
});
