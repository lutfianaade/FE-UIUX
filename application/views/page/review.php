<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; }
        .modal-content { background: #fff; padding: 20px; border-radius: 5px; width: 90%; max-width: 500px; }
        .close { position: absolute; top: 10px; right: 10px; font-size: 20px; cursor: pointer; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input, .form-group textarea { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        .btn-primary { background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<!-- Button to trigger the modal -->
<button id="openModal" class="btn-primary">Leave a Review</button>
<a href="http://localhost/buket/delivered_order" id="openModal" class="btn-primary">Review</a>

<!-- Modal -->
<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>
        <h5>Review Form</h5>
        <form id="reviewForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea id="review" name="review" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn-primary">Submit Review</button>
        </form>
        <div id="message" style="margin-top: 15px;"></div>
    </div>
</div>

<script>
    // JavaScript to handle modal functionality and form submission
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('reviewModal').style.display = 'flex';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('reviewModal').style.display = 'none';
    });

    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting normally
        
        // Collect form data
        var name = document.getElementById('name').value;
        var review = document.getElementById('review').value;

        // Display message
        var message = `Thank you for your review, ${name}! Your review: "${review}" has been received.`;
        document.getElementById('message').innerText = message;
        
        // Optionally reset the form and hide the modal
        document.getElementById('reviewForm').reset();
        document.getElementById('reviewModal').style.display = 'none';
    });
</script>

</body>
</html>
