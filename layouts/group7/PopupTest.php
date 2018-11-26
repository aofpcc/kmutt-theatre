<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Popup Form (TEST)</h2>
<p>Click on the button at the bottom of this page to open the form.</p>

<button class="open-button" onclick="openForm()">Invite your friends with e-mail</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Invite your friend with e-mail</h1>

    <label for="to"><b>To</b></label>
    <input type="text" placeholder="Enter your friend's email" name="to" required>

    <label for="from"><b>From</b></label>
    <input type="text" placeholder="Enter your email" name="from" required>

    <label for="sub"><b>Subject</b></label>
    <input type="text" placeholder="Enter your subject" name="sub" required>

    <label for="note"><b>Note</b></label>
    <input type="text" placeholder="Description..." name="note" required>

    <button type="send" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>