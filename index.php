<!-- <?php
$users = ["unisha", "srijana", "jamuna"];
$user = ["name" => "John", "age" => 20];
echo $user["name"] . ", " . $user["age"];
?> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSS & JS Learning</title>

    <style>
        /* 
        =========================
        CSS BASICS
        =========================

        CSS (Cascading Style Sheets) is used to style HTML elements.
        It controls colors, layout, spacing, and responsiveness.

        Syntax:
        selector {
            property: value;
        }
        */

        body {
            font-family: Arial;
            margin: 20px;
        }

        /* 
        CLASS SELECTOR (.class)
        Targets elements with a specific class
        */
        .box {
            background-color: lightblue;
            padding: 20px;
            margin: 10px;
        }

        /*
        ID SELECTOR (#id)
        Targets a unique element
        */
        #special {
            background-color: lightcoral;
        }

        /*
        FLEXBOX (IMPORTANT)
        Used for layout (aligning items in row/column)
        */
        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: center;

            /* justify-content: center; */
            /* Items in center */

            /* justify-content: flex-start; */
            /* Items start from left */

            /* justify-content: flex-end; */
            /* Items move to right */

            /* justify-content: space-around; */
            /* Equal space around each item */

            /* justify-content: space-evenly; */
            /* Equal spacing everywhere */

        }

        /*
        HOVER EFFECT
        Changes style when user hovers mouse
        */
        .hover-box:hover {
            background-color: yellow;
        }

        /*
        TRANSITION
        Smooth animation between states
        */
        .animate {
            transition: all 0.5s ease;
        }

        .animate:hover {
            transform: scale(1.2);
        }

        /*
        RESPONSIVE DESIGN (MEDIA QUERY)
        Changes layout for smaller screens
        */
        @media (max-width: 600px) {
            body {
                background-color: lightgray;
            }
        }
    </style>
</head>

<body>

    <!-- 
    =========================
    HTML STRUCTURE
    =========================
    -->

    <h1>CSS & JavaScript Practice</h1>

    <div class="box">Simple Box</div>

    <div id="special" class="box">ID Styled Box</div>

    <div class="flex-container box">
        <div>Item 1</div>
        <div>Item 2</div>
    </div>

    <div class="box hover-box animate">Hover & Animate Me</div>

    <button onclick="showMessage()">Click Me</button>

    <p id="text">This text will change</p>

    <!-- 
    =========================
    JAVASCRIPT SECTION
    =========================
    -->

    <script>

        /*
        =========================
        JAVASCRIPT BASICS
        =========================

        JavaScript adds interactivity to websites.

        It can:
        - Handle clicks
        - Change content
        - Control behavior
        */

        /*
        VARIABLES
        Store data values
        */
        let name = "John";
        let age = 20;

        console.log(name, age);

        /*
        FUNCTION
        A reusable block of code
        */
        function showMessage() {
            alert("Button Clicked!");
        }

        /*
        DOM MANIPULATION
        DOM = Document Object Model

        Lets you change HTML using JS
        */
        function changeText() {
            // Changes HTML inside element
            // Can include tags
            document.getElementById("text").innerHTML = "Text Changed!";

            // Changes ONLY text (safer than innerHTML)
            // document.getElementById("text").textContent = "Only text";

            //  Changes CSS using JavaScript
            // document.getElementById("text").style.color = "green";


        }

        // changeText(); 
        //if fucntion is called then it runs the fuction immediately as soon as the page is open but 
        // "Wait until user clicks the element with id='text',
        // then run changeText()"
        // So the function is NOT executed immediately.
        // It is only attached to a user action (event).
        /*
        EVENT LISTENER
        Listens for user actions like click
        */
        document.getElementById("text").addEventListener("click", changeText);

    //     Triggers when mouse enters element
    //     document.getElementById("btn").addEventListener("mouseover", function () {
    // console.log("Mouse is over button");});

/*
Mouse events:
- click
- dblclick
- mouseover
- mouseout

Keyboard events:
- keydown
- keyup

Form events:
- input
- change
- submit

Window events:
- load
window.addEventListener("load", function () {
    console.log("Page fully loaded");
});

HTML
<script defer>

👉 defer often replaces need for load //

- resize
It triggers when:
→ User changes browser window size
→ Dragging edge of window
→ Rotating mobile device
window.addEventListener("resize", function () {
    console.log("Window resized");
});

*/

        /*
        CONDITIONALS
        Used for decision making
        */
        let score = 80;

        if (score > 50) {
            console.log("Pass");
        } else {
            console.log("Fail");
        }


        /*
  


        /*
          mewo meow
        ARRAYS
        Store multiple values
        */
        let fruits = ["Apple", "Banana", "Mango"];
        console.log(fruits[0]);

        /*

        OBJECTS
        Store structured data
        */
        let person = {
            name: "Sam",
            age: 25
        };

        console.log(person.name);

        /*
        STYLE MANIPULATION
        Change CSS using JS
        */
        function changeStyle() {
            document.body.style.backgroundColor = "black";
            document.body.style.color = "white";
        }

        /*
        TIMEOUT (DELAY)
        Runs code after delay
        */
        setTimeout(() => {
            console.log("Runs after 2 seconds");
        }, 2000);


/*
====================================================
JAVASCRIPT LOOPS — COMPLETE GUIDE (NO HTML/CSS)
====================================================

This file explains:
1. Types of loops
2. Differences between them
3. Where they are used in real websites
====================================================
*/

////////////////////////////////////////////////////
// 1. FOR LOOP
////////////////////////////////////////////////////

/*
WHAT IT DOES:
Runs code a fixed number of times.

WHEN TO USE:
- When you KNOW how many times to loop
- When using indexes (arrays, lists)
*/

for (let i = 0; i < 5; i++) {
    console.log("For loop:", i);
}

/*
REAL USE CASES:
- Showing product cards
- Rendering lists from database
- Looping through array with index
*/

////////////////////////////////////////////////////
// 2. FOR...OF LOOP
////////////////////////////////////////////////////

/*
WHAT IT DOES:
Directly loops through VALUES of an array.

WHEN TO USE:
- When you only need values, not index
*/

let fruits = ["Apple", "Banana", "Mango"];

for (let fruit of fruits) {
    console.log("For...of:", fruit);
}

/*
REAL USE CASES:
- Displaying posts
- Showing product names
- Working with API data
*/

////////////////////////////////////////////////////
// 3. forEach LOOP
////////////////////////////////////////////////////

/*
WHAT IT DOES:
Runs a function for each array item.

WHEN TO USE:
- Modern way to loop arrays
- Clean UI rendering logic
*/

let users = ["Ali", "Sara", "John"];

users.forEach(function(user) {
    console.log("forEach:", user);
});

/*
REAL USE CASES:
- Rendering UI lists
- Showing comments
- Processing API response data
*/

////////////////////////////////////////////////////
// 4. WHILE LOOP
////////////////////////////////////////////////////

/*
WHAT IT DOES:
Runs WHILE condition is true.

WHEN TO USE:
- When number of iterations is NOT known
*/

let i = 0;

while (i < 3) {
    console.log("While loop:", i);
    i++;
}

/*
REAL USE CASES:
- Waiting for condition to become true
- Game loops
- Checking data availability
*/

////////////////////////////////////////////////////
// 5. DO...WHILE LOOP
////////////////////////////////////////////////////

/*
WHAT IT DOES:
Runs at least ONCE, then checks condition.

WHEN TO USE:
- When you MUST execute code once before checking condition
*/

let j = 0;

do {
    console.log("Do While loop:", j);
    j++;
} while (j < 3);

/*
REAL USE CASES:
- Input validation systems
- Retry mechanisms
- Menus that must show at least once
*/

////////////////////////////////////////////////////
// 🔥 DIFFERENCES SUMMARY
////////////////////////////////////////////////////

/*
FOR LOOP:
- Fixed number of iterations
- Uses index
- Most flexible

FOR...OF:
- Clean iteration over values
- No index needed

forEach:
- Modern array method
- Best for UI rendering
- Cannot break early easily

WHILE:
- Unknown number of iterations
- Depends on condition

DO...WHILE:
- Runs at least once no matter what
*/


    </script>

</body>

</html>