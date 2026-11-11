<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
<h1>Users</h1>

<?php
foreach ($users as $user): ?>
  <p><?= htmlspecialchars($user['name']) ?></p>
<?php
endforeach; ?>
</body>
</html>