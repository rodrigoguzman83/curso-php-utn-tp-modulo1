<?php include('header.php'); ?>

<div class="container mt-3">
    <h1>CONTACTO</h1>
    <form method='POST' action="enviar.php" class="container">
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mb-3">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="form-group mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea required>
        </div>
        <button type="reset" class="btn btn-danger mb-3">Cancel</button>
        <button type="submit" class="btn btn-primary mb-3">Send</button>
    </form>
</div>

<?php include('footer.php'); ?>

</body>

</html>