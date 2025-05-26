const button = document.querySelector(".acts");
button.addEventListener('click', () => {
  // create the box element with a class of .box
  const head2 = document.createElement("div");
  head2.textContent = `Sorry, Your account is blocked due to a long overdue Unpaid Loan.
  Visit our nearest branch to settle with us to unblock your account. 
  We are sorry for the inconviniences caused.`;
  head2.classList.add("head2");
  
  // append the new element box to the DOM
  document.querySelector("blockreason").appendChild(head2); 
  
  head2.animate(
  { transform: 'translateY(0)'}, 
  {
    duration: 500,
    fill: 'forwards'
  });

});