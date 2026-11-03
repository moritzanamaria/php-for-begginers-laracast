<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Separate Logic From the Template</title>
</head>
<body>
    <body>

  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
 
      <li>
        <a href="<?= $book['purchaseUrl']; ?>">
          <?= $book['name']; ?> (<?= $book['releaseDate'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
      
    <?php endforeach; ?>
  </ul>
  
</body>
</html>