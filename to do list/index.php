<!DOCTYPE html>
<html>

<head>
    <title>TO do list</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="container">
        <h1 class="tt">Tambah Taks</h1>
        <div class="fsnsb">
            <form action="add.php" method="post">
                <input type="text" name="task" placeholder="Tambahkan tugas baru" required>
                <button type="submit">Tambahkan</button>
            </form>
        </div>
        <div class="ul">
            <h2>List tugas</h2>
            <ul>
                <?php
                $tasks = file("tugas.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                if (empty($tasks)) {
                    echo "<p>Tidak ada tugas yang ditambahkan.</p>";
                } else {
                    foreach ($tasks as $task) {
                        echo "<li>$task</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>