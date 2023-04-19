<?php
// Connect to InfinityFree database
$servername = "sql107.epizy.com";
$username = "epiz_33782235";
$password = "bTcAbg6O01iPz";
$dbname = "epiz_33782235_herewegofutbol";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve vacancies from database
$sql = "SELECT * FROM vacancies";
$result = mysqli_query($conn, $sql);
$vacancies = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Filter vacancies by search term
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $vacancies = array_filter($vacancies, function ($vacancy) use ($search) {
    return stripos($vacancy['title'], $search) !== false;
  });
}
?>

<h1>Vacancies</h1>

<form method="get">
  <label for="search">Search:</label>
  <input type="text" id="search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
  <input type="submit" value="Search">
</form>

<?php if (count($vacancies) > 0): ?>
  <ul>
    <?php foreach ($vacancies as $vacancy): ?>
      <li><a href="vacancy.php?id=<?php echo $vacancy['id']; ?>"><?php echo $vacancy['title']; ?></a></li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  <p>No vacancies found.</p>
<?php endif; ?>
