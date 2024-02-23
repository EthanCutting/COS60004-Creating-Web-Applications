/**
 * Author: Ethan PP Cutting
 * Target:
 * purpose: lab05
 * created: 28/03/2023
 * last upadted: 28/03/2023
 */

"use strict";

		function promptName() {
			var sName = prompt("Enter your name.\nThis prompt should show when the\nClick Me button is clicked.", "Your name");
			alert("Hi there " + sName + ". Alert boxes are a quick way to check the state\n of your variables when you are developing code.");
			rewriteParagraph(sName);
			writeNewMessage();
		}

		function init() {
			var clickMe = document.getElementById("clickme");
			clickMe.onclick = promptName;
		}

		function rewriteParagraph(userName){
			message.innerHTML = "Hi" + userName + ". If you can see this you have successfully overwritten the contents of this paragraph. congratulations";
		}

		function writeNewMessage() {
			var mymessage = document.getElementById("mymessage");
			mymessage.innerHTML = "You have now finished Task 1";

		}

		window.onload = init;