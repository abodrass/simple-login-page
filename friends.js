
const submitButton = document.getElementById('bou');
let text=document.getElementById("abod");

// Function to be called when the submit button is clicked
function handleClick() {
    const inputString = text.value;
    const colors = ["red", "blue", "yellow"];
    let result = "";
    
    for (let i = 0; i < inputString.length; i++) {
      const character = inputString.charAt(i);
      const color = colors[i % colors.length];
      result += `<span style="color:black; font-family: gabriel_weiss_friends;">${character}</span>` + `<span style="color: ${color};font-family: gabriel_weiss_friends;">.</span>`;
    }
    
    console.log(result);

    let hi=document.getElementById("hi");

    hi.innerHTML=result;





}

// Add a click event listener to the submit button
submitButton.addEventListener('click', handleClick);