var jQueryScript = document.createElement('script');  
jQueryScript.setAttribute('src','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
document.head.appendChild(jQueryScript);

//var randomNumber = 5 + 6;
//console.log(randomNumber);

var randomNumber = Math.floor(Math.random() * 99) + 1;
/*
Math.random() generates a floating number between 0 and 1 (not including 1)
Math.floor() rounds down any floating point. For exanple: Math.floor(23.99) = 23
Math.floor(Math.random() * 99) gives us 0-98
*/

//console.log(randomNumber);
//document.getElementById("numberToGuess").innerHTML = randomNumber;
/*
The getElementById() method returns the element that has the ID attribute 
with the specified value and one of the most common methods for manipulating 
the elements within your document. The method returns null if there is no 
matching element ID. In the code above, lines 41, 42, and 43 could have used 
getElementById instead of querySelector and the result would have been the same.

The querySelector() method returns the first matching element within the 
document and if there is no matching element, the method returns null. 
In the code above, in line 46 we are using querySelector(‘.guessField’) 
just to demonstrate that it can be used to access an element by its CSS class, 
but we could have also used its ID instead: querySelector(‘#guessField’)
*/

var guesses = document.querySelector('#guesses');
var lastResult = document.querySelector('#lastResult');
var lowOrHi = document.querySelector('#lowOrHi');

var guessSubmit = document.querySelector('.guessSubmit');
var guessField = document.querySelector('guessField');

var guessCount = 1;
var resetButton = document.querySelector('#reset');
resetButton.style.display = 'none';
guessField.focus();
var losses = [];
var wins = [];

function checkGuess()
{
    //alert('I am a placeholder');
    var userGuess = Number(guessField.value);
    if (guessCount === 1)
    {
        guesses.innerHTML = 'Previous guesses: ';
    }
    guesses.innerHTML += userGuess + ' ';
    
        if (userGuess === randomNumber)
        {
            lastResult.innerHTML = 'Congratulations! You got it right!';
            lastResult.style.backgroundColor = 'green';
            lowOrHi.innerHTML = '';
            setGameOver();
            wins.push("Wins");
        }
        else if (guessCount === 7)
        {
            lastResult.innerHTML = 'Sorry, you lost!';
            setGameOver();
            losses.push("Losses");
        }
        else
        {
            lastResult.innerHTML = 'Wrong!';
            lastResult.style.backgroundColor = 'red';
            if (userGuess < randomNumber)
            {
                lowOrHi.innerHTML = 'Last guess was too low!';
            }
            else if (userGuess > randomNumber)
            {
                lowOrHi.innerHTML = 'Last guess was too high!';
            }
            
        if (userGuess > 99)
        {
            lowOrHi.innerHTML = 'Error<br> Guess must be less than 99';
            lastResult.style.display = 'none';
        }
        }
        
        guessCount++;
        guessField.value = '';
        guessField.focus();
}

guessSubmit.addEventListener('click', checkGuess);

function setGameOver()
{
    guessField.disabled = true;
    guessSubmit.disabled = true;
    resetButton.style.display = 'inline';
    resetButton.addEventListener('click', resetGame);
}

function resetGame()
{
    guessCount = 1;
    
    var resetParas = document.querySelectorAll('.resultParas p');
    for (var i = 0 ; i < resetParas.length ; i++)
    {
        resetParas[i].textContent = '';
    }
    
    resetButton.style.display = 'none';
    
    guessField.disabled = false;
    guessSubmit.disabled = false;
    guessField.value = '';
    guessField.focus();
    
    lastResult.style.backgroundColor = 'white';
    
    randomNumber = Math.floor(Math.random() * 99) + 1;
    //console.log(randomNumber);
}

    var total = document.getElementById('#total');
    total.innerHTML = 'Wins: ' + wins;
    total.innerHTML = 'Losses: ' + losses;
    




