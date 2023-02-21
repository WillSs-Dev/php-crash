<?php include 'inc/header.php'; ?>

<h2>Feedbacks</h2>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php if (empty($feedbacks)) : ?>
  <p class="lead mt3"> There are no feedbacks</p>
<?php endif; ?>

<?php foreach ($feedbacks as $feedback) : ?>
  <div class="card my-3 w-50">
    <div class="card-body text-center">
      <?php
      echo $feedback['feedback'];
      ?>
    </div>
    <p class='lead text-center'>
      By:
      <?php echo $feedback['name']; ?>
      <br />
      on:
      <?php echo $feedback['date'] ?>
    </p>
  </div>
<?php endforeach ?>
</div>

<?php include 'inc/footer.php'; ?>