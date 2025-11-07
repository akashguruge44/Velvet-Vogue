document.querySelectorAll(".size").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".size").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
  });
});
