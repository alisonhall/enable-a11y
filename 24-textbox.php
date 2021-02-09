<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARIA Textbox Role Example</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/textbox.css" />
    <meta charset="utf-8">
</head>

<body>

    <?php include("includes/example-header.php"); ?>

    

    <main>
            <h1>ARIA Textbox Role Example</h1>
        <aside class="notes">
            <h2>Notes:</h2>

            <ul>
                <li>The first example is simply a
                    <code>div</code> with its
                    <code>contenteditable</code> attribute set to
                    <code>"true"</code>.
                    Textareas can be simulated using <code>aria-multiline="true"</code> and using CSS <code>resize: both</code> to make them resizable.
                </li>
                <li>No JavaScript was involved in making these.</li>
                <li>The first example shows up as a form field in Voiceover's rotor and NVDA's Element Dialogue.</li>
                <li>The element will not submit its data to the server like a real form field.</li>
                <li>Coding
                    <code>&lt;input type="number" role="textbox" /></code> doesn't do anything useful in any screenreader.</li>
            </ul>

        </aside>

        <form>

            <h2>ARIA example</h2>

            <div>
                <label id="address-label" for="address">Address to deliver to:</label>
                <div aria-labelledby="address-label" role="textbox" contenteditable="true"></div>
            </div>

            <div>
                <label id="notes-label" for="notes">Delivery Notes:</label>
                <div aria-labelledby="notes-label" role="textbox" contenteditable="true" aria-multiline="true"></div>
            </div>

            <h2>HTML example</h2>
            <div>
                <label for="ccinfo">Credit Card Billing Address:</label>
                <input type="text" name="ccinfo" id="ccinfo" />
            </div>

            <div>
                <label for="reason">Reason for Late Payment:</label>
                <textarea id="reason" name="reason"></textarea>
            </div>

        </form>


    </main>


    <!-- <script src="js/#STUB#.js"></script> -->
</body>

</html>