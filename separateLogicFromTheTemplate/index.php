  <?php
  $books = [
    [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. Dick',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2012'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2010.'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http://example.com',
      'releaseDate' => '2011.'
    ]
  ];


$filteredBooks = array_filter($books, function ($book) {
    return $book ['author'] === 'Andy Weir';
});

require "index.view.php";