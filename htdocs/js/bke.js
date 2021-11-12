import Player from "./Player.js";

const WinningValues = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
]

/**
 * To start:
 * Check index.html, make sure the board with fields are created with correct classnames
 * The board should be 3x3 fields
 * Add correct classes
 */

let players = [];
let currentPlayer = 0; // This is the index of the array of the currentplayer
const fields = document.querySelectorAll('.field');
const resetButton = document.querySelector(".reset-btn");
const playerFrame = document.querySelector(".addplayersFrame")
const addPlayerButton = document.querySelector(".addPlayer")
const playerNameInput = document.querySelector(".playerName")

const winnerLabel = document.querySelector(".winnerLabel")

const plr1Label = document.querySelector(".plr1Label")
const plr2Label = document.querySelector(".plr2Label")

const playerTurnLabel = document.querySelector(".playerTurnLabel")

const symbols = ["X", "O"]

let winner = null;

//Create two players aligned with the Player class
//const playerOne = ...
//const playerTwo = ...
//Add both players to the players array

/**
 * Assignment
 * Make a loop thru all the fields and add a click event. 
 * Connect the addSymbolToField function in the eventHandler
 */


fields.forEach(field => {
    field.addEventListener("click", function () {
        if (winner === null) {
            const allowed = addSymbolToField(field);
            if (allowed !== false) {
                checkWinner();
                RefreshScreen();
            }
        }
    });
});

/**
 * Assignment 
 * Give body to the reset function (the function exists below)
 */
addPlayerButton.textContent = "Add Player" + (players.length + 1);

addPlayerButton.addEventListener("click", function () {
    if (players.length < 2) {
        if (playerNameInput.value !== "") {
            players.push(new Player(playerNameInput.value, symbols[players.length]));
            playerNameInput.value = "";
            RefreshScreen();
        } else {
            alert("Please enter a player name.")
        }
    }
});

resetButton.addEventListener("click", resetGame);

function RefreshScreen() {
    if (players.length + 1 !== 3) {
        addPlayerButton.textContent = "Add Player" + (players.length + 1);
    } else {
        addPlayerButton.textContent = "Full";
    }
    if (players[0]) {
        plr1Label.textContent = players[0].name + `(${players[0].GetLevel()})`;
    } else {
        plr1Label.innertextContentHTML = "player 1";
    }
    if (players[1]) {
        plr2Label.textContent = players[1].name + `(${players[1].GetLevel()})`;
    } else {
        plr2Label.textContent = "player 2";
    }
    if (players.length === 2) {
        playerTurnLabel.textContent = players[currentPlayer].name + "'s Turn"
    } else {
        playerTurnLabel.textContent = "Please at 2 players";
    }
}


function addSymbolToField(field) {
    const fieldContent = field.textContent;
    if (fieldContent === 'X' || fieldContent === 'O') {
        alert('This field can not be used');
        return false;
    }

    field.textContent = players[currentPlayer].symbol

    /**
     * Assignment
     * Add the current player symbol to the field textContent
     * What more needs to be done here? Make a short todolist
     */

}

function ShowWinner(plr) {
    winner = plr
    winnerLabel.textContent = plr.name + " Won The Game!";
    plr.AddPoint();
}

function checkWinner() {

    let streak = 0;
    let plrWon = false;

    WinningValues.forEach(current => {

        current.forEach(checkvalue => {
            const thisField = fields[checkvalue]
            if (plrWon === false) { ////// to reduce from 2 not needed if statements to 1
                if (thisField.textContent === players[currentPlayer].symbol) {
                    streak++;
                    if (streak === 3) {
                        plrWon = players[currentPlayer];
                    }
                } else {
                    streak = 0
                }
            }
        });
    });

    if (plrWon) {
        ShowWinner(plrWon);
    }

    console.log(streak);

    if (currentPlayer === 1) {
        currentPlayer = 0
    } else {
        currentPlayer++;
    }
}

function resetGame() {
    /**
     * Assignment
     * Make sure this works (all fields empty, reset data if needed)
     */
    RefreshScreen();
    fields.forEach(field => {
        field.textContent = "";
    });
    winnerLabel.textContent = "";
    winner = null;
}

console.log('File loaded');