<?php
  /**
   * The template for displaying the hacker-tools page
   *
   * Displays all of the element and everything up until the "content-area" div.
   *
   * @link https://github.com/ArbahudRioDaroyni/wp-game-portal
   * @package WP Game Portal
   * @subpackage WP Game Portal
   * @since 1.0.0
   */
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="width: 100%">
  <div class="console" id="console">
    <ol id="consoleList" class="consoleList">
      <li class="errorMsg">&gt Something went wrong, please check back later</li>
      <li class="starter">&lt;RequiredCommand: "power"&gt; &lt;InputType: string&gt &lt;InputPlace: command_line&gt; &lt;Execution: "click-enter"&gt;</li>
    </ol>
  </div>

  <p class="inputstart">></p>

  <input type="text" class="userInput" placeholder="Enter Command" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"/>

  <div class="load">
    <p class="load1"></p>
    <p class="load2 dot">.</p>
    <p class="load3 dot">.</p>
    <p class="load4 dot">.</p>
  </div>

  <div class="panel"></div>
</body>
</html>

<style>
body {
  margin: 0;
  padding: 0;
  font-family: "Share Tech Mono", sans-serif;
  font-size: 14px;
  overflow: hidden;
}
.userInput {
  border: none;
  font-family: "Share Tech Mono", sans-serif;
  position: absolute;
  bottom: -1px;
  left: 20px;
  height: 60px;
  width: 100%;
  z-index: 20;
}
.userInput:focus {
  border: none;
  box-shadow: none;
  outline: none;
}
.inputstart {
  position: absolute;
  bottom: 7px;
  left: 6px;
  z-index: 20;
}
.console {
  background-color: #111;
  position: absolute;
  display: flex;
  height: calc(100% - 66px);
  width: calc(100% - 4px);
  left: 0;
  border: 2px solid #222;
  top: 1px;
  overflow: auto;
  z-index: 9999999;
  transition: 0.2s;
  cursor: default;
}
.console ol {
  margin-left: -35px;
  place-self: flex-end;
}
.console ol li {
  list-style-type: none;
}
.console::-webkit-scrollbar-track {
  width: 10px;
  border-radius: 3px;
  border-radius: 5px;
}
.console::-webkit-scrollbar {
  background: black;
  width: 5px;
}
.console::-webkit-scrollbar-thumb {
  background: #02fc23;
  margin-right: 2px;
}
.panel {
  position: absolute;
  right: 60px;
  top: 15px;
}
.errorMsg {
  color: white;
}
.starter {
  display: none;
}
.load {
  position: absolute;
  top: 0;
  right: 50px;
  display: none;
}
.load .dot {
  animation: 2s darkBlink infinite linear;
  top: 0;
  position: absolute;
}
.load .load2 {
  right: -10px;
  animation-delay: 0.3s;
}
.load .load3 {
  right: -15px;
  animation-delay: 0.6s;
}
.load .load4 {
  right: -20px;
  animation-delay: 0.9s;
}
@keyframes darkBlink {
  0% {
    color: "";
 }
  22% {
    color: "";
 }
  25% {
    color: black;
 }
  48% {
    color: black;
 }
  50% {
    color: "";
 }
  73% {
    color: "";
 }
  75% {
    color: black;
 }
  98% {
    color: black;
 }
  100% {
    color: "";
 }
}
@keyframes danger {
  0% {
    color: "";
 }
  24.9% {
    color: "";
 }
  25% {
    color: black;
 }
  49.9% {
    color: black;
 }
  50% {
    color: "";
 }
  74.9% {
    color: "";
 }
  75% {
    color: black;
 }
  100% {
    color: black;
 }
}

</style>

<script>
// Element shortcuts

var textConsole = document.querySelector(".console"),
	consList = document.querySelector(".consoleList"),
	body = document.querySelector("body"),
	input = document.querySelector(".userInput"),
	panel = document.querySelector(".panel");

// Presets and arrays of info

var style = ["black", "grey"];
var bootSequence = [
	"Initializing...",
	"System firmware booting...",
	"Pinging server for updates...",
	"Installing update package",
	"Updates installed successfully",
	"Securing software links...",
	"Checking security requirements...",
	"Jejakcyber.com tools system fully operational, ready for use",
	"Type 'help' for a list of commands"
];
var helpList = [
	"help: list possible commands",
	"hacker-tools <String>: => (gatesofolympus, sweetbonanza, starlightprincess)",
	"clear: clear the console text"
	// "display <type=string>: display a line of text on the console",
	// "setStyle <type=hex> <type=hex>: set the colors of the console",
	// "power: toggle the power state of the system"
];
var int;
var iteration = 0;

// Variables used later

var command,
	consoleItem,
	pwrOn = false,
	newItem,
	textNode,
	stepperArray = [],
	stepperIt = 0,
	commandSplit = [];

//   |  Everything Else |
//   V                  V

// Command line "press enter" stuff

input.addEventListener("click", searchReady);

function searchReady() {
	document.querySelector(".userInput").addEventListener("keydown", searchActive);
}

function searchActive(event) {
	switch (event.keyCode) {
		case 13: // Enter is pressed
			command = input.value;
			if (command === "power" && pwrOn === false) {
				router("power");
			} else if (pwrOn === true) {
				commandSplit = command.split(" ");
				if (commandSplit.length >= 3 && commandSplit[0] !== "setStyle") {
					for (var a = 2; a < commandSplit.length; a++) {
						commandSplit[1] += " " + commandSplit[a];
					}
				}
				router(commandSplit[0], commandSplit[1]);
				input.value = "";
			}
			break;
	}
}

// Triggers different functions based on given command

function router(command1, command2) {
	switch (command1) {
		case "power":
			if (pwrOn) {
				appendConsole("Powering Off...");
				setTimeout(powerOff, 1300);
			} else {
				pwrOn = true;
				initialize();
				input.value = "";
			}
			break;
		case "help":
			stepperArray = helpList;
			int = setInterval(consoleStep, 200);
			break;
		case "hacker-tools":
			stepperArray = hackerTools;
			int = setInterval(consoleStep, 200);
			break;
		case "clear":
			consList.innerHTML = "";
      li = document.createElement("LI");
      em = document.createElement("EM");
      textNode = document.createTextNode("> " + 'Console was cleared');
      consList.appendChild(li.appendChild(em.appendChild(textNode)));
			break;
		case "display":
			appendConsole(command2);
			appendConsole(" ");
			break;
		case "setStyle":
			style = [commandSplit[1], commandSplit[2]];
			setStyle(style[0], style[1]);
			appendConsole("setStyle: " + style[0] + ", " + style[1]);
			appendConsole(" ");
			break;
		default:
			appendConsole("Undefined command '" + command1 + "'");
			appendConsole(" ");
	}
}

//   All the different functions for commands

// Used to add a single line of text to the console
function appendConsole(text) {
	newItem = document.createElement("LI");
	textNode = document.createTextNode("> " + text);
	newItem.appendChild(textNode);
  consList.appendChild(newItem);
	// consList.insertBefore(newItem, consList.childNodes[0]);
	document.querySelector(".userInput").value = "";
}
// Used to add multiple lines of text
function consoleStep() {
	appendConsole(stepperArray[stepperIt]);
	stepperIt++;
	if (stepperIt === stepperArray.length) {
		clearInterval(int);
		stepperIt = 0;
		stepperArray = [];
		appendConsole("");
	}
}
// Starting text sequence
function initialize() {
	stepperArray = bootSequence;
	int = setInterval(consoleStep, 500);
	iteration = 0;
	style = ["black", "#02fc23"];
	setStyle(style[0], style[1]);
}
// Set the style of the console
function setStyle(back, color) {
	body.style.backgroundColor = back;
	body.style.color = color;
	input.style.backgroundColor = back;
	input.style.color = color;
	if (pwrOn === true) {
		textConsole.style.border = "2px solid " + color;
		textConsole.style.background = back;
	}
	if (back === "default") {
		style = ["black", "#02fc23"];
		setStyle(style[0], style[1]);
	}
	if (back === "special") {
		style = ["black", "blue"];
		setStyle(style[0], style[1]);
	}
}
// Power off sequence
function powerOff() {
	router("clear");
	style = ["black", "grey"];
	setStyle(style[0], style[1]);
	input.value = "";
	input.blur();
	pwrOn = false;
}

// Things that happen after it loads

setTimeout(function () {
	document.querySelector(".starter").style.display = "inline";
}, 1346);

setStyle(style[0], style[1]);

console.clear();

// This is here so that if EVERYTHING works right, the error message won't show. Mess something up to see what happens (it's not super fancy btw)
document.querySelector(".errorMsg").style.display = "none";

</script>