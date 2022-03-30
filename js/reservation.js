const form = document.querySelector("#reserve");
const inputs = document.querySelectorAll("#reserve input");
const select = document.querySelector("#reserve select");
const message = document.querySelector(".reservation-message");
const messageText = document.querySelector(".reservation-message p");

const checkForm = () => {
  let issues = 0;

  if (!select.value) {
    select.style.border = "1px solid red";
    issues++;
  } else {
    select.style.border = "unset";
  }

  inputs.forEach((input) => {
    if (!input.value) {
      input.style.border = "1px solid red";
      issues++;
    } else {
      input.style.border = "unset";
    }
  });

  if (!issues) {
    return true;
  }

  return false;
};

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const formChecked = checkForm();

  if (formChecked) {
    const name = inputs[0].value;
    const email = inputs[1].value;
    const amount = parseInt(inputs[2].value);
    const dateAndTime = inputs[3].value.split("T");
    const location = select.value;

    const date = dateAndTime[0];
    const time = dateAndTime[1];

    $.ajax({
      url: "php/createReservation.php",
      type: "post",
      dataType: "json",
      data: { token: "reservation", name, email, amount, location, date, time },
      success: () => {
        form.style.display = "none";
        message.style.display = "flex";
        messageText.innerHTML =
          "Your reservation has been succesfully created.";
      },
      error: () => {
        form.style.display = "none";
        message.style.display = "flex";
        messageText.innerHTML =
          "Your reservation failed, please try again later.";
      },
    });
  }
});
