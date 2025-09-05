// Dynamically load the header from outside the folder
fetch("/header.html")
  .then(response => {   
    if (!response.ok) {
      throw new Error("Failed to load header");
    }
    return response.text();
  })
  .then(data => {
    document.querySelector("body").insertAdjacentHTML("afterbegin", data);
  })
  .catch(error => {
    console.error("Error loading header:", error);
  });
